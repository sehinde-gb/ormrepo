<?php

    namespace App\Http\Controllers;

    use App\Blog;
    use App\Exceptions\BlogNotFoundException;
    use App\Exceptions\SlugNotFoundException;
    use App\Http\Requests\UserRequest;
    use App\User;
    use Illuminate\Http\Request;
    use Newsletter;
    use Illuminate\Support\Facades\DB;
    use App\Comment;



    class BlogsController extends Controller
    {
        /**
         * Display a listing of the resource.
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
                    //$blogs = DB::table('blogs')->simplePaginate(15);

                    $title = 'Blog Listings';

                }

            } catch (\Exception $e) {

                throw new BlogNotFoundException($e->getMessage());
            }

            return view('blogs.index', compact('blogs', 'title'));
        }



        /**
         * Display the specified resource.
         *
         * @param $id
         * @return Response
         * @throws BlogNotFoundException
         * @internal param int $post
         */

        public function show($id)
        {

            try {

                $index = 'Show a Post';

                $blog = Blog::findOrFail($id);

                $previous = Blog::where('id', '<=', $blog->id)->first();
                //dd($previous);
                $next = Blog::where('id', '>', $blog->id)->first();

                $comments = Comment::forBlog($blog)->get()->threaded();

                //return $comments;

                } catch (\Exception $e) {

                throw new BlogNotFoundException($e->getMessage());

            }

            return view('blogs.show')->with([
                'blog' => $blog,
                'previous' => $previous,
                'next' => $next,
                'comments' => $comments
            ]);
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
