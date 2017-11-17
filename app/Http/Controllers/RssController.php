<?php
namespace App\Http\Controllers;

use App\Exceptions\MethodNotFoundException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

class RssController extends Controller
{

    /**
     * Grab the latest blogs and create an RSS Atom feed.
     *
     */
    public function generate()
    {
        try {
            $blogs = Blog::latest()->published()->take(10)->get();

            if ($blogs->isEmpty()) {
                return 'no RSS feeds today';
            } else {
                $feed = \App::make('feed');
                $feed->title = 'Ormrepo';
                $feed->description = 'Powerful Minds';
                $feed->logo = asset('images/logo/logo_large.png'); //optional
                $feed->link = url('feed');
                $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
                $feed->pubdate = $blogs[0]->created_at;
                $feed->lang = 'en';
                $feed->setShortening(true); // true or false
                $feed->setTextLimit(100); // maximum length of description text


                foreach ($blogs as $blog) {
                    // set item's title, author, url, pubdate, description and content
                    $feed->add($blog->title, 'Author', url('blogs/' . $blog->id), $blog->created_at, $blog->content, $blog->content);
                }
            }
        } catch (\Exception $e) {
                throw new MethodNotFoundException($e->getMessage());
        }

                return $feed->render('rss'); // or atom
    }
}
