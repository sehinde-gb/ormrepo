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


$monolog = Log::getMonolog();
$syslog = new \Monolog\Handler\SyslogHandler('papertrail');
$formatter = new \Monolog\Formatter\LineFormatter('%channel%.%level_name%: %message% %extra%');
$syslog->setFormatter($formatter);

$monolog->pushHandler($syslog);


Auth::routes();

# Admin Boundary
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::resource('blogs', 'BlogsController');

    Route::resource('charges', 'ChargesController', [
        'as' => 'admin'

    ]);


    Route::post('blogs/{blog}/comments', function (App\Blog $blog) {

        $comment = new App\Comment(['body' => request('body')]);
        $comment->user_id = Auth::id();
        $comment->parent_id = request('parent_id', null);

        $blog->comments()->save($comment);

        return back();
    });


});

# Checkout
Route::post('/checkout/charges/{id}', ['as' => 'checkout.charges','uses' => 'CheckoutController@charges']);
Route::post('/checkout', ['uses' => 'CheckoutController@index']);
Route::get('checkout/thankyou', ['as' => 'checkout.thankyou', 'uses' => 'CheckoutController@thankyou']);


# Blogs
Route::get('/blogs/{title}', 'BlogsController@showSlug')->where('title', '[A-Za-z-]+');
Route::resource('blogs', 'BlogsController', ['only' => ['index', 'show']]);
Route::get('/', ['as' => 'home', 'uses' => 'BlogsController@index']);

Route::get('/search/{query}', function($query) {
   return App\Blog::search($query)->get();
});


#Static
Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('/contact', ['as' => 'contact','uses' => 'PagesController@create']);
Route::post('/contact', ['as' => 'contact_store', 'uses' => 'PagesController@store']);
Route::get('/privacy', ['as' => 'privacy', 'uses' => 'PagesController@privacy']);
Route::get('cookie', ['as' => 'cookie', 'uses' => 'PagesController@cookie']);
Route::get('/bookings', ['as' => 'book', 'uses' => 'PagesController@book']);

# Tags
Route::get('tags/{tags}', 'TagsController@show');
Route::get('tags', 'TagsController@index');







Route::get('/rss', 'RssController@generate');




