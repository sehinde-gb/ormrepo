<?php

namespace tests\functional\models;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Blog;
use App\Category;


class CategoryModelTest extends \TestCase
{

    use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test */
    function it_tests_blog_relationship()
    {
        $blog = factory(Blog::class)->create();

        $category = factory(Category::class)->create([
            'name' => 'serom',
            'slug' => 'help'
        ]);

        $category->blogs()->save($blog);

        $this->assertEquals($blog->id, $blog->id);

    }


}