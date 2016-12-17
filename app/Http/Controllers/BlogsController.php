<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Exceptions\BlogNotFoundException;
use App\Exceptions\SlugNotFoundException;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Newsletter;
use App\Comment;



class BlogsController extends Controller
{
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
     * @param Blog $blog
     * @return Response
     * @throws BlogNotFoundException
     * @internal param $id
     * @internal param int $post
     */

    public function show(Blog $blog)
    {

        try {

            //$blog = Blog::findOrFail($id);

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

            //dd($blog);

        } catch (\Exception $e) {

            throw new SlugNotFoundException($e->getMessage());
        }

        return $this->show($blog);
    }


}
