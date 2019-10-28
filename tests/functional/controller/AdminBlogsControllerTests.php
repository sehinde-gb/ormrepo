<?php

namespace tests\functional\controller;

use App\Blog;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AdminBlogsControllerTests extends \BrowserKitTestCase
{
    use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_successfully_posts_to_the_store()
    {
        $blog = factory(Blog::class, 1)->create();

        $user = factory(User::class, 1)->create();

        $blog = $blog->toArray();

        $this->actingAs($user)
            ->post('admin/blogs', $blog);

        $response = $this->call('POST', '/admin/blogs');

        $this->assertEquals(302, $response->status());
    }

    /** @test */
    public function it_fails_to_post_to_the_store()
    {
        $blog = factory(Blog::class, 1)->create();

        $user = factory(User::class, 1)->create();

        $blog = $blog->toArray();

        $this->actingAs($user)
            ->post('admin/blog', $blog);

        $response = $this->call('POST', '/admin/blog');

        $this->assertEquals(500, $response->status());
    }

    /** @test */
    public function it_calls_the_index_method()
    {
        $blog = factory(Blog::class, 1)->create();

        $user = factory(User::class, 1)->create();

        $blog = $blog->toArray();

        $this->actingAs($user)
            ->get('admin/blogs', $blog);

        $response = $this->call('GET', '/admin/blogs');

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function it_fails_to_call_the_index_method()
    {
        $blog = factory(Blog::class, 1)->create();

        $user = factory(User::class, 1)->create();

        $blog = $blog->toArray();

        $this->actingAs($user)
            ->get('admin/blog', $blog);

        $response = $this->call('GET', '/admin/blog');

        $this->assertEquals(500, $response->status());
    }

    /** @test */
    public function it_calls_the_show_method()
    {
        $user = factory(User::class, 1)->create();

        $this->actingAs($user)
            ->get('admin/blogs');

        $response = $this->call('GET', 'admin/blogs', ['id' => 2]);

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function it_fails_to_call_the_show_method()
    {
        $user = factory(User::class, 1)->create();

        $this->actingAs($user)
            ->get('admin/blog');

        $response = $this->call('GET', 'admin/blog', ['id' => 2]);

        $this->assertEquals(500, $response->status());
    }

    /** @test */
    public function it_calls_the_update_method()
    {
        $user = factory(User::class)->create();

        $data = [
            'title' => 'This is Lorem',
            'excerpt' => 'This is Lorem Lepley',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,',

        ];

        $response = $this->actingAs($user)
            ->call('POST', 'admin/blogs', $data);

        $this->assertEquals(302, $response->status());
    }

    /** @test */
    public function it_calls_the_delete_method()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->call('DELETE', 'admin/blogs', ['id' => 1]);
        $this->assertEquals(405, $response->status());
    }
}
