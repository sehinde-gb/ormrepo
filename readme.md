Synopsis

This is a blog that enables users to blog about tech and non tech related issues in society.

Motivation

The blog is to openly engage users to blog and comment about technical and non technical issues that occur within the tech world.

Installation

Create your own vm for example install Virtual Box Install Laravel Homestead http://laravel.com/docs/5.4/homestead git clone https://github.com/ormrepo/ormblog.git projectname cd projectname composer install php artisan key:generate Create a database Copy .env.example file and rename it to your own .env file php artisan migrate --seed to create and populate tables

Features

Home page, Login and Registration Pages and About Page.

Packages included

algolia search,  eloquent sluggable, laravel dusk, adam wathan eloquent l5, laravel scout, laravel phone, pusher php server and roumen feed.

Tests All included within the tests directory. Remember to use BrowserTestKit if you are running your tests with Laravel 5.3 and below

Contributors

Any feature requests / pull requests should include details of what you are trying to achieve (use case) to explain why your request should be implemented.

If you want to submit a bug fix, please make your changes in a new branch, then open a pull request. License

Copyright © 2013-2015 Sehinde Raji

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.



