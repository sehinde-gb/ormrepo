<?php

namespace tests\acceptance;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class BlogLinkTests extends \BrowserKitTestCase
{
    /** @test */
    public function testLoremLink()
    {
        $this->visit('/');

        $this->click('LOREM IPSUM TEXTURE');

        $this->seePageIs('http://ormblog/blogs/1');
    }

    /** @test */
    public function testHelloLink()
    {
        $this->visit('/');

        $this->click('HELLO');

        $this->seePageIs('http://ormblog/blogs/2');
    }
}
