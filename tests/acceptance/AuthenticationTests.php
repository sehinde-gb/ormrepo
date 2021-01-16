<?php

namespace tests\acceptance;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AuthenticationTests extends \BrowserKitTestCase
{
    /** @test */
    public function testLoginIsSuccessful()
    {
        $this->visit('/login')
             ->type('ormrepo@gmail.com', 'email')
             ->type('password', 'password')
             ->press('Log In')
             ->seePageIs('/admin/blogs');
    }

    /** @test */
    public function testLoginIsAFailure()
    {
        $this->visit('/login')
        ->type('tom@gmail.com', 'email')
        ->type('password', 'password')
        ->press('Log In')
        ->seePageIs('/login');
    }

    /** @test */
    public function testRegistrationIsSuccessful()
    {
        $this->visit('/register')
        ->type('Jon', 'username')
        ->type('Jon', 'name')
        ->type('jon@gmail.com', 'email')
        ->type('password', 'password')
        ->type('password', 'password_confirmation')
        ->press('Register')
        ->seePageIs('/admin/blogs');
    }

    /** @test */
    public function testRegistrationHasFailed()
    {
        $this->visit('/register')
            ->type('Michael', 'username')
            ->type('l', 'name')
            ->type('michael@gmail.com', 'email')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/admin/blogs');
    }
}
