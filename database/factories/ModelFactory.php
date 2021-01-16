<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Carbon\Carbon;
use Illuminate\Support\Str;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => Str::random(10),
        ];
});

    $factory->define(App\Blog::class, function (Faker\Generator $faker) {
        return [
            'title' => $faker->name,
            'excerpt' => $faker->paragraph,
            'body' => $faker->sentence,
            'slug' => $faker->name,
            'feat_image' => $faker->imageUrl($width = 640, $height = 480),
            'user_id' => factory(\App\User::class)->create()->id,

        ];
    });

    $factory->define(App\Category::class, function (Faker\Generator $faker) {
        return [
            'name' => $faker->unique()->word,
            'slug' => $faker->unique()->word,
        ];
    });

    $factory->define(App\Comment::class, function (Faker\Generator $faker) {
        return [
            'user_id' => factory(\App\User::class)->create()->id,
            'blog_id' => factory(\App\Blog::class)->create()->id,
            'parent_id' => '2',
            'body' => $faker->paragraph,

        ];
    });
