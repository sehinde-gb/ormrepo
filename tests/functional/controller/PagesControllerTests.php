<?php

namespace tests\functional\controller;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesControllerTests extends \BrowserKitTestCase {

use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_calls_the_contact_method()
    {
        $this->call('GET', 'contact');

        $this->assertTrue(true);
    }


    /** @test */
    public function it_calls_the_contact_store_method()
    {
        $this->call('POST', 'contact_store');

        $this->assertTrue(true);
    }



}

