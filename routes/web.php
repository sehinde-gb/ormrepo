<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
    use Illuminate\Support\Facades\Auth;

    Auth::routes();

    Route::get('/blogs/{title}', 'BlogsController@showSlug')->where('title', '[A-Za-z-]+');

    Route::get('/search/{query}', function($query) {
       return App\Blog::search($query)->get();
    });

    Route::get('categorys', function() {
        $categorys = App\Category::orderBy('name')->get()->groupBy(function ($category) {
            return substr($category->name, 0, 1);

        });

        //return $categorys;

        return view('categorys.index', compact('categorys'));

    });


    Route::get('/', ['as' => 'home', 'uses' => 'BlogsController@index']);

    Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
    Route::get('/contact', ['as' => 'contact','uses' => 'PagesController@create']);
    Route::post('contact', ['as' => 'contact_store', 'uses' => 'PagesController@store']);

# Subscribe
    Route::get('newsletter',
        ['as' => 'newsletter', 'uses' => 'SubscriptionsController@create']);
    Route::post('subscribe',
        ['as' => 'subscription_store', 'uses' => 'SubscriptionsController@store']);


    Route::get('news',
        ['as' => 'news', 'uses' => 'SubscribeUserController@create']);
    Route::post('news',
        ['as' => 'news_store', 'uses' => 'SubscribeUserController@store']);



    # Admin Boundary
    Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {

        Route::resource('blogs', 'BlogsController');

        Route::post('blogs/{blog}/comments', function (App\Blog $blog) {

            $comment = new App\Comment(['body' => request('body')]);
            $comment->user_id = Auth::id();
            $comment->parent_id = request('parent_id', null);

            $blog->comments()->save($comment);

            return back();
        });


    });



    Route::get('/rss', 'RssController@generate');

    Route::resource( 'blogs', 'BlogsController', ['only' => ['index', 'show']]);


