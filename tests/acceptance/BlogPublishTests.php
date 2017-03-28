<?php
namespace tests\acceptance;


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class BlogPublishTests extends \BrowserKitTestCase
{

    /** @test */
    function testPublishIsSuccessful()
    {
        $this->visit('/login')
            ->type('ormrepo@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Log In')
            ->seePageIs('/admin/blogs');

        $this->visit('admin/blogs/create')
            ->type('Ice Cakes', 'title')
            ->type('Champs Chocolate Cakes', 'excerpt')
            ->type('Champs cakes are very scrumptius', 'body')
            ->select('2016-12-07', 'published_at')
            ->select('1', 'category_list')
            ->press('Publish Post')
            ->seePageIs('/admin/blogs');
    }

    /** @test */
    function testPublishisUnSuccessful()
    {
        $this->visit('/login')
            ->type('ormrepo@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Log In')
            ->seePageIs('/admin/blogs');

        $this->visit('admin/blogs/create')
            ->type('Ice Cream', 'title')
            ->type(' ', 'excerpt')
            ->type('Champs cakes are very scrumptius', 'body')
            ->select('2016-12-07', 'published_at')
            ->select('1', 'category_list')
            ->press('Publish Post')
            ->seePageIs('admin/blogs/create');


    }

}

