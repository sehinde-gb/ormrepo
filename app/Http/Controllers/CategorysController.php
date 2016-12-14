<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Exceptions\CategoryNotFoundException;


class CategorysController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categorys = Category::orderBy('name')->get()->groupBy(function ($category) {
            return substr($category->name, 0, 1);

        });

        //return $categorys;

        return view('categorys.index', compact('categorys'));

    }

    /**
     * Show the article form to fetch the tags.
     *
     * @param Category $category
     * @return \Illuminate\View\View
     * @throws TagNotFoundException
     */
    public function show($category)
    {
        try
        {
            //dd($category);
            $blogs = $category->blogs;
            //dd($blogs);

            $index = 'Search Categorys';

        } catch (CategoryNotFoundException $e) {

            throw new CategoryNotFoundException($e->getMessage());
        }
        return view('categorys.show', compact('blogs', 'index'));
    }

}
