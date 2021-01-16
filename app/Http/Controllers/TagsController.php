<?php

namespace App\Http\Controllers;

use App\Exceptions\TagNotFoundException;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Sort the tags and group them by name and then pass the tag to the tags
     * index view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tags = Tag::orderBy('name')->get()->groupBy(function ($tag) {
            return substr($tag->name, 0, 1);
        });

        return view('tags.index', compact('tags'));
    }

    /**
     * Fetch the tags and pass it to the display tag resource.
     *
     * @param $tag
     * @return \Illuminate\View\View
     * @throws TagNotFoundException
     */
    public function show($tag)
    {
        try {
            $blogs = $tag->blogs;

            $index = 'Search Tags';
        } catch (TagNotFoundException $e) {
            throw new TagNotFoundException($e->getMessage());
        }

        return view('tags.show', compact('blogs', 'index'));
    }
}
