<?php

namespace tests\functional\controller;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RssControllerTests extends \TestCase
{

    use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_calls_the_rss_method()
    {
        $this->call('GET', 'rss');

        $this->assertTrue(true);
    }

}



