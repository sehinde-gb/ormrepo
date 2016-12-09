var elixir = require('laravel-elixir');
require('laravel-elixir-vue');
require('laravel-elixir-vueify');
require('laravel-elixir-webpack-official');
require('laravel-elixir-webpack');
require('laravel-elixir-browserify-official');
require('jquery');
require('vue');
//require('vue-resource');
require('lodash');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
        .webpack('app.js');
});
