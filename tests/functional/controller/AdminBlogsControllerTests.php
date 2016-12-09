<?php

namespace tests\functional\controller;

use App\Blog;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdminBlogsControllerTests extends \TestCase
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

        $user = array('user_id' => '', 'name' => 'James', 'username' => 'James', 'email' => 'james@gmail.com', 'password' => '');

        $response = $this->call('POST', '/admin/blogs', $user);

        $this->assertEquals(302, $response->status());


    }

    /** @test */
    public function it_fails_to_call_the_index_method()
    {

        $user = factory(User::class, 1)->create();

        $this->actingAs($user)
            ->get('admin/blogs');

        $response = $this->call('GET', 'admin\blogs');

        $this->assertEquals(500, $response->status());

    }


    /** @test */
    public function it_calls_the_admin_index_method()
    {
        $user = factory(User::class, 1)->create();

        $this->actingAs($user)
            ->withSession(['user_id' => '1'])
            ->call('GET', 'admin\blogs');
            //->assertResponseOk();
    }



    /** @test */
    public function it_fails_to_call_the_admin_index_method()
    {
        $user = factory(User::class, 1)->create();

        $this->actingAs($user)
            ->withSession(['user_id' => '']);
            $this->call('GET', 'admin\blogs');


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

        $response = $this->call('GET', 'admin\blogs', ['id' => 1]);

        $this->assertEquals(500, $response->status());

    }




}