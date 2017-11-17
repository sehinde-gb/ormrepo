<?php

namespace tests\functional\models;

use App\Category;
use App\Comment;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Blog;

class BlogModelTest extends \BrowserKitTestCase
{

    use   WithoutMiddleware,  DatabaseTransactions;

     /** @test */
    function it_tests_user_relationship()
    {
        $blog = factory(Blog::class)->create();

        $this->assertEquals($blog->user_id, $blog->user->id);
    }

    /** @test */
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


    /** @test */
    function it_tests_comments_relationship()
    {
        $blog = factory(Blog::class)->create();

        $comment = factory(Comment::class)->create();

        $blog->comments()->save($comment);

        $this->assertEquals($blog->id, $blog->id);
    }


    /** @test */
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
}
