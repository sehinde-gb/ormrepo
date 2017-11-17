<?php

namespace tests\functional\controller;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BlogsControllerTests extends \BrowserKitTestCase
{
    use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;



    /** @test */
    public function it_calls_the_index_method()
    {

        $response = $this->call('GET', 'blogs');

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function it_fails_to_call_the_index_method()
    {

        $response = $this->call('GET', 'blame');

        $this->assertEquals(500, $response->status());
    }



    /** @test */
    public function it_calls_the_show_method()
    {

        $response = $this->call('GET', 'blogs', ['id' => 1]);

        $this->assertEquals(200, $response->status());
    }

    /** @test */
    public function it_fails_to_call_the_show_method()
    {

        $response = $this->call('GET', 'blogs', ['id' => -2]);

        $this->assertEquals(200, $response->status());
    }




    /** @test */
    public function it_fails_to_the_store_method()
    {

        $response = $this->call('POST', '/blogs');

        $this->assertEquals(500, $response->status());
    }
}
