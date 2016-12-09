<?php

    use Illuminate\Foundation\Testing\WithoutMiddleware;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Illuminate\Foundation\Testing\DatabaseTransactions;

    class BlogLinkTests extends TestCase
    {

        /** @test */
        function testLoremLink()
        {
            $this->visit('/');

            $this->click('LOREM IPSUM TEXTURE');

            $this->seePageIs('http://ormblog/blogs/1');

        }


        /** @test */
        function testHelloLink()
        {
            $this->visit('/');

            $this->click('HELLO');

            $this->seePageIs('http://ormblog/blogs/2');

        }

    }
