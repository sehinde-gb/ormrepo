<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Events\BlogWasCreated;
use App\Events\BlogWasUpdated;
use App\Http\Requests\BlogRequest;
use App\Blog;
use App\Tag;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use App\Exceptions\HttpNotFoundException;
use Illuminate\Support\Facades\Auth;
use Markdown;


class BlogsController extends Controller
{
    /**
     * @var User
     */
    public $user;

    /**
     * BlogsController constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
         $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws HttpNotFoundException
     */
    public function index(Request $request)
    {

       try {

           $query = $request->input('q');


           if ($query) {

               $blogs = Blog::search($query)->get();

               return view('pages.search', compact('blogs'));

           } else {

               $blogs = Blog::latest('published_at')->get()->all();


               $title = 'Blog Listings';

           }

       } catch (\Exception $e) {

           throw new HttpNotFoundException($e->getMessage());
       }

        return view('admin.blogs.index', compact('blogs', 'title'));
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     * @throws HttpNotFoundException
     */
    public function create()
    {

        try {
            $title = 'Create Blog';

            $tags = Tag::pluck('name', 'id');

        } catch (\Exception $e) {

            throw new HttpNotFoundException($e->getMessage());
        }



        return view('admin.blogs.create', compact('blog', 'tags', 'title'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param BlogRequest|Request $request
     * @return Response
     *
     */
    public function store(BlogRequest $request)
    {

        $this->createBlog($request);



        return redirect('/admin/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Response
     * @throws HttpNotFoundException
     * @internal param $blog
     *
     */
    public function show($id)
    {

        try {

            $blog = Blog::findOrFail($id);

            $previous = Blog::where('id', '<', $blog->id)->orderBy('id','desc')->first();

            $next = Blog::where('id', '>', $blog->id)->orderBy('id','asc')->first();

            $comments = Comment::forBlog($blog)->get()->threaded();

            } catch (\Exception $e) {

            throw new HttpNotFoundException($e->getMessage());
            }

        return view('admin.blogs.show')->with([
            'blog' => $blog,
            'previous' => $previous,
            'next' => $next,
            'comments' => $comments

        ]);

    }


    /**
     * Show the form for editing the specified resource.
     * @return Response
     * @throws HttpNotFoundException
     * @internal param $id
     */

    public function edit($id)
    {
        try {
            $tags = Tag::pluck('name', 'id');

            $blog = Blog::findOrFail($id);

            $user = Auth::user();

        } catch (\Exception $e) {

            throw new HttpNotFoundException($e->getMessage());
        }

        return view('admin.blogs.edit', compact('blog', 'tags',  'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogRequest|Request $request
     * @param $id
     * @return Response
     * @throws HttpNotFoundException
     * @internal param Blog $blog
     * @internal param int $id
     */
    public function update(BlogRequest $request, $id)
    {
        try {

            $user = Auth::user();

            $blog = Blog::findOrFail($id);

            $blog->update(request()->input());

            event(new BlogWasUpdated($user));

            } catch (\Exception $e) {

              throw new HttpNotFoundException($e->getMessage());
            }

            if ($request->input('tag_list') == null) {

                $tag_list = [];

            } else {

                $tag_list = $request->input('tag_list');
            }

            $this->syncTags($blog, $tag_list);

            return redirect('/admin/blogs');

    }


    /**
     * Deletes the blog post from storage.
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws HttpNotFoundException
     */
    public function destroy($id)
    {
        try
        {
            $blog = Blog::findOrFail($id);

            $blog->delete();

        } catch (\Exception $e) {

            throw new HttpNotFoundException($e->getMessage());
        }

        return redirect('/admin/blogs');

    }


    /**
     * Assign the results of the PostRequest and assign
     * the user_id to publish the post.
     *
     * @param BlogRequest $request
     * @return mixed
     */
    protected function createBlog(BlogRequest $request)
    {
        $user = Auth::user();

        $blog = $user->blogs()->create($request->all());

        if ($request->input('tag_list') == null) {
            $tag_list = [];
        } else {
            $tag_list = $request->input('tag_list');
        }


        $this->syncTags($blog, $tag_list);


        event(new BlogWasCreated($user));

        $imageName = $blog->id . '.' .
            $request->file('feat_image')->getClientOriginalExtension();

        $request->file('feat_image')->move(
            base_path() . '/public/featured/images/', $imageName
        );



        return $blog;


    }

    /**
     * Sync the categories by passing in the Blog object.
     *
     * @param $blog
     * @param array $tags
     * @internal param array $categories
     */
    private function syncTags($blog, array $tags)
    {
        $blog->tags()->sync($tags);
    }


    /**
     * Show the slug within the show page
     * @param $slug
     * @return \Illuminate\Http\Response
     * @throws HttpNotFoundException
     */

    public function showSlug($slug)
    {
        try {

            $blog = Blog::findBySlug($slug);

        } catch (\Exception $e) {

            throw new HttpNotFoundException($e->getMessage());
        }

        return $this->show($blog);
    }


}
