<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('about'));
});

// Home > Portfolio
Breadcrumbs::register('portfolio', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Portfolio', route('portfolio'));
});

// Home > Videos
Breadcrumbs::register('videos', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Videos', route('videos'));
});

// Home > Terms
Breadcrumbs::register('terms', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Terms', route('terms'));
});

// Home > Privacy
Breadcrumbs::register('privacy', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Privacy', route('privacy'));
});

// Home > Cookie
Breadcrumbs::register('cookie', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Cookie', route('cookie'));
});

// Home > Contact
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('contact'));
});

// Home > Blogs Index
Breadcrumbs::register('blogs.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blogs', route('blogs.index'));
});

// Home > Blog Show
Breadcrumbs::register('blogs.show', function($breadcrumbs, $blog)
{

    $breadcrumbs->parent('blogs.index');
    $breadcrumbs->push($blog->title, route('blogs.show', $blog->id));
});

// Home > Admin Blog
Breadcrumbs::register('admin', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > Admin Blogs Index
Breadcrumbs::register('admin.blogs.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Blogs', route('admin.blogs.index'));
});

// Home > Admin Blog Show
Breadcrumbs::register('admin.blogs.show', function($breadcrumbs, $blog)
{
    $breadcrumbs->parent('admin.blogs.index');
    $breadcrumbs->push($blog->title, route('admin.blogs.show', $blog->id));
});

// Blogs > Admin Blog Create
Breadcrumbs::register('admin.blogs.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.blogs.index');
    $breadcrumbs->push('Publish Blog', route('admin.blogs.create'));
});

// Home > Admin Blog Edit
Breadcrumbs::register('admin.blogs.edit', function($breadcrumbs, $blog)
{
    $breadcrumbs->parent('admin.blogs.show', $blog);
    $breadcrumbs->push('Edit Blog', route('admin.blogs.edit', $blog->id));
});

// Charges Index
Breadcrumbs::register('admin.charges.index', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Charges', route('admin.charges.index'));
});

// Home > Charge Show
Breadcrumbs::register('admin.charges.show', function($breadcrumbs, $charge)
{
    $breadcrumbs->parent('admin.charges.index');
    $breadcrumbs->push($charge->name, route('admin.charges.show', $charge->id));
});

// Home > Charge Edit
Breadcrumbs::register('admin.charges.edit', function($breadcrumbs, $charge)
{
    $breadcrumbs->parent('admin.charges.show', $charge);
    $breadcrumbs->push('Edit Blog', route('admin.charges.edit', $charge->id));
});

// Charges > Publish Charge
Breadcrumbs::register('admin.charges.create', function($breadcrumbs)
{
    $breadcrumbs->parent('admin.charges.index');
    $breadcrumbs->push('Publish Charge', route('admin.charges.create'));
});

// Home > Checkout
Breadcrumbs::register('checkout', function($breadcrumbs)
{
    $breadcrumbs->parent('admin');
    $breadcrumbs->push('Charges', route('admin.charges.index'));
    $breadcrumbs->push('Checkout', route('checkout.thankyou'));
});

