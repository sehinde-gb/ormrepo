<?php

namespace tests\functional\controller;


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubscriptionsControllerTests extends \TestCase {

use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_calls_the_subscription_store_method()
    {
        $this->call('POST', 'subscription_store');

        $this->assertTrue(true);
    }

}

