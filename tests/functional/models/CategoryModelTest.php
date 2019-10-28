<?php

namespace tests\functional\models;

use App\Blog;
use App\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CategoryModelTest extends \BrowserKitTestCase
{
    use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_tests_blog_relationship()
    {
        $blog = factory(Blog::class)->create();

        $category = factory(Category::class)->create([
            'name' => 'serom',
            'slug' => 'help',
        ]);

        $category->blogs()->save($blog);

        $this->assertEquals($blog->id, $blog->id);
    }
}
