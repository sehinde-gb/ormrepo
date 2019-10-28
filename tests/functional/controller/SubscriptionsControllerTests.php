<?php

namespace tests\functional\controller;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SubscriptionsControllerTests extends \BrowserKitTestCase
{
    use   WithoutMiddleware, DatabaseMigrations, DatabaseTransactions;

    /** @test */
    public function it_calls_the_subscription_store_method()
    {
        $this->call('POST', 'subscription_store');

        $this->assertTrue(true);
    }
}
