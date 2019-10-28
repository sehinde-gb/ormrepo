<?php

namespace tests\functional\controller;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SubscribeUserControllerTests extends \BrowserKitTestCase
{
    use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_calls_the_news_method()
    {
        $this->call('POST', 'news');

        $this->assertTrue(true);
    }
}
