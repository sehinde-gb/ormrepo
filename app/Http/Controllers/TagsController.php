<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Exceptions\TagNotFoundException;


class TagsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tags = Tag::orderBy('name')->get()->groupBy(function ($tag) {
            return substr($tag->name, 0, 1);

        });

        //return $categorys;

        return view('tags.index', compact('tags'));

    }

    /**
     * Show the article form to fetch the tags.
     *
     * @param $tag
     * @return \Illuminate\View\View
     * @throws TagNotFoundException
     */
    public function show($tag)
    {
        try
            {

                $blogs = $tag->blogs;


                $index = 'Search Categorys';

            } catch (TagNotFoundException $e) {

                throw new TagNotFoundException($e->getMessage());
            }
        return view('tags.show', compact('blogs', 'index'));
    }

}
