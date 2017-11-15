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




Auth::routes();

Route::get('/', ['as' => 'home', 'uses' => 'HomesController@index']);

Route::get('/quotes', ['as' => 'quotes', 'uses' => 'QuotesController@index']);

Route::post('/quotes', ['as' => 'quotes_store', 'uses' => 'QuotesController@store']);

# Admin Boundary
Route::group(['prefix' => 'admin', 'as' => 'admin.','namespace' => 'Admin'], function () {

    Route::resource('blogs', 'BlogsController');

    Route::resource('charges', 'ChargesController');

});

# Checkout
Route::post('/checkout/charges/{id}', ['as' => 'checkout.charges','uses' => 'CheckoutController@charges']);
Route::post('/checkout', ['uses' => 'CheckoutController@index']);
Route::get('checkout/thankyou', ['as' => 'checkout.thankyou', 'uses' => 'CheckoutController@thankyou']);


# Blogs
Route::get('/blogs/{title}', 'BlogsController@showSlug')->where('title', '[A-Za-z-]+');
Route::resource('blogs', 'BlogsController', ['only' => ['index', 'show']]);
Route::get('/blogs', ['as' => 'blogs.index', 'uses' => 'BlogsController@index']);

Route::get('/search/{query}', function($query) {
   return App\Blog::search($query)->get();
});


#Static
Route::get('/privacy', ['as' => 'privacy', 'uses' => 'PagesController@privacy']);
Route::get('/cookie', ['as' => 'cookie', 'uses' => 'PagesController@cookie']);
Route::get('/terms', ['as' => 'terms', 'uses' => 'PagesController@terms']);
Route::get('/videos', ['as' => 'videos', 'uses' => 'PagesController@videos']);
Route::get('/bookings', ['as' => 'bookings', 'uses' => 'PagesController@bookings']);
Route::get('/portfolio', ['as' => 'portfolio', 'uses' => 'PagesController@portfolio']);

# Tags
Route::get('tags/{tags}', 'TagsController@show');
Route::get('tags', 'TagsController@index');

# RSS
Route::get('/rss', 'RssController@generate');




