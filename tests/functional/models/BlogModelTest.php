<?php

namespace tests\functional\models;

use App\Category;
use App\Comment;
use Carbon\Carbon;
//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Blog;

class BlogModelTest extends \TestCase {

    //use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test
    function it_scopes_queries_to_those_retrieves_all_of_them()
    {

        factory(Blog::class)->create();

        $test = factory(Blog::class)->create([
            'title' => 'ded'
        ]);
        dd($test);
        $results = Blog::Search('ded')->get();
        dd($results);
        $this->assertEquals($results, $test->title);

        //$this->assertTrue(true);
        //$this->assertCount(1, $results);


    }
     */

    /** @test
    function it_tests_user_relationship()
    {
        $blog = factory(Blog::class)->create();

        $this->assertEquals( $blog->user_id, $blog->user->id );

    }
     */
    /** @test
    function it_tests_categories_relationship()
    {
        $blog = factory(Blog::class)->create();

        $category = factory(Category::class)->create([
            'name' => 'serom',
            'slug' => 'help'
        ]);

        $blog->categories()->save($category);

        $this->assertEquals($category->id, $category->id);


    }
    */

    /** @test
    function it_tests_comments_relationship()
    {
        $blog = factory(Blog::class)->create();

        $comment = factory(Comment::class)->create();

        $blog->comments()->save($comment);

        $this->assertEquals($blog->id, $comment->blog_id);

    }
     */





    /** @test
    function it_fetches_trending_blogs()
    {
        // Given
        factory(Blog::class, 2)->create();
        factory(Blog::class)->create(['reads' => 10]);
        $mostPopular = factory(Blog::class)->create(['reads' => 20]);

        // When
        $articles = Blog::trending();

        // Then
        $this->assertEquals($mostPopular->id, $articles->first()->id);


    }
     */

    /** @test */
    function it_fetches_latest_blogs()
    {
        // Given
        factory(Blog::class, 2)->create();
        factory(Blog::class)->create(['latest' => 10]);
        $latest = factory(Blog::class)->create(['latest' => 20]);

        //When
        $articles = Blog::Latest();


        // Then
        $this->assertEquals($latest->id, $articles->first()->id);


    }




    }