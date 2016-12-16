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
        $categories = Category::orderBy('name')->get()->groupBy(function ($category) {
            return substr($category->name, 0, 1);

        });

        //return $categorys;

        return view('categories.index', compact('categories'));

    }

    /**
     * Show the article form to fetch the categorys.
     *
     * @param Category $category
     * @return \Illuminate\View\View
     * @throws CategoryNotFoundException
     */
    public function show($category)
    {
        try
            {

                $blogs = $category->blogs;


                $index = 'Search Categorys';

            } catch (CategoryNotFoundException $e) {

                throw new CategoryNotFoundException($e->getMessage());
            }
        return view('categories.show', compact('blogs', 'index'));
    }

}
