<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Exceptions\HttpNotFoundException;
use App\Exceptions\MethodNotFoundException;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Newsletter;




class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
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

        return view('blogs.index', compact('blogs', 'title'));
    }


    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return Response
     * @throws HttpNotFoundException
     * @internal param $id
     * @internal param int $post
     */

    public function show(Blog $blog)
    {

        try {

            $previous = Blog::where('id', '<=', $blog->id)->first();

            $next = Blog::where('id', '>', $blog->id)->first();

            } catch (\Exception $e) {

            throw new HttpNotFoundException($e->getMessage());

        }

        return view('blogs.show')->with([
            'blog' => $blog,
            'previous' => $previous,
            'next' => $next

        ]);

    }


    /**
     * Show the slug within the show page.
     *
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
