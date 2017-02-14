<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Events\BlogWasUpdated;
use App\Exceptions\SlugNotFoundException;
use App\Http\Requests\BlogRequest;
use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use App\Exceptions\BlogNotFoundException;
use Illuminate\Support\Facades\Auth;
use Markdown;
use App\Events\BlogWasCreated;

class BlogsController extends Controller
{
    /**
     * @var User
     */
    public $user;

    /**
     * PostsController constructor.
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
     * @throws BlogNotFoundException
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

           throw new BlogNotFoundException($e->getMessage());
       }

        return view('admin.blogs.index', compact('blogs', 'title'));
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     * @throws BlogNotFoundException
     */
    public function create()
    {

        try {
            $title = 'Create Blog';

            $categories = Category::pluck('name', 'id');

        } catch (\Exception $e) {

            throw new BlogNotFoundException($e->getMessage());
        }



        return view('admin.blogs.create', compact('blog', 'categories', 'title'));
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
     * @throws BlogNotFoundException
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

            throw new BlogNotFoundException($e->getMessage());
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
     * @throws BlogNotFoundException
     * @internal param $id
     */

    public function edit($id)
    {
        try {
            $categories = Category::pluck('name', 'id');

            $blog = Blog::findOrFail($id);

            $user = Auth::user();

        } catch (\Exception $e) {

            throw new BlogNotFoundException($e->getMessage());
        }

        return view('admin.blogs.edit', compact('blog', 'categories',  'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogRequest|Request $request
     * @param $id
     * @return Response
     * @throws BlogNotFoundException
     * @internal param Blog $blog
     * @internal param int $id
     */
    public function update(BlogRequest $request, $id)
    {
        try {

            $user = Auth::user();

            event(new BlogWasUpdated($user));

            $blog = Blog::findOrFail($id);

            //dd($blog);

            $blog->update(request()->input());

            } catch (\Exception $e) {

              throw new BlogNotFoundException($e->getMessage());
            }

            if ($request->input('category_list') == null) {

                $category_list = [];

            } else {

                $category_list = $request->input('category_list');
            }

            $this->syncCategories($blog, $category_list);

            return redirect('/admin/blogs');

    }


    /**
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws BlogNotFoundException
     */
    public function destroy($id)
    {
        try
        {
            $blog = Blog::findOrFail($id);

            $blog->delete();

        } catch (\Exception $e) {

            throw new BlogNotFoundException($e->getMessage());
        }
        return redirect()->route('admin.blogs.index');
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

        event(new BlogWasCreated($user));

        $imageName = $blog->id . '.' .
            $request->file('feat_image')->getClientOriginalExtension();

        $request->file('feat_image')->move(
            base_path() . '/public/featured/images/', $imageName
        );


        if ($request->input('category_list') == null) {
            $category_list = [];
        } else {
            $category_list = $request->input('category_list');
        }

        $this->syncCategories($blog, $category_list);

        return $blog;


    }

    /**
     * Sync the categories by passing in the Blog object.
     *
     * @param $blog
     * @param array $categories
     *
     */
    private function syncCategories($blog, array $categories)
    {
        $blog->categories()->sync($categories);
    }


    /**
     * Show the slug within the show page
     * @param $slug
     * @return \Illuminate\Http\Response
     *
     * @throws SlugNotFoundException
     */

    public function showSlug($slug)
    {
        try {

            $blog = Blog::findBySlug($slug);

        } catch (\Exception $e) {

            throw new SlugNotFoundException($e->getMessage());
        }

        return $this->show($blog);
    }


}
