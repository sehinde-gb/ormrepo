@extends('layouts.app')

@section('meta-title', $blog->title)

@section('content')

    <div class="main-container">
        <div class="middle-logo">
            <img class="logo"
                 srcset="/images/logo_medium.png 1080w,
                        /images/logo_small.png 760w"
                 alt="The ormrepo thoughtful logo">
        </div><!-- /.middle-logo -->

        <div class="heading">
            <h1 class="blog--title">{!! $blog->title !!}</h1>
            <h2 class="blog--excerpt">{!! $blog->excerpt !!}</h2>
            <p class="published--at">Created on: <span><i class="fa fa-calendar" aria-hidden="true"></i></span> {!! date('F d, Y', strtotime($blog->created_at)) !!} </p>
            <p id="published--at">Written by <small>Sehinde Raji</small></p>
        </div><!-- /.heading -->

        <div class="article-container">
            <div class="left-container">
                <p class="is--beige">{!! $blog->body !!}</p>
            </div><!-- /.left-container -->

            <div class="right-container">
                <div class="social-container">
                    <h3 class="is--padded">Comments</h3>
                    @if(isset($comments['root']))
                        @include('admin.blogs.comments.list', ['collection' => $comments['root']])

                        <h3 class="is--both-sides ">Leave a Reply</h3>
                        @include('admin.blogs.comments.form')

                    @else
                        <p>No Historical Comments Today</p>
                        <h3 class="is--both-sides ">Leave a Reply</h3>
                        @include('admin.blogs.comments.form')

                    @endif

                    <div class="social-buttons">
                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_google_plus"></a>
                            <a class="a2a_button_pinterest"></a>
                            <a class="a2a_button_linkedin"></a>
                            <a class="a2a_button_reddit"></a>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
                    </div><!-- /.social-buttons -->


                    <div class="category">
                        @unless($blog->categories->isEmpty())
                            <h2 class="side-heading">Tags:</h2>
                            <ul class="tag--centre">
                                @foreach($blog->categories as $category)
                                    <a href="{{ url('/blogs', $blog->id) }}"><button class="btn-tag">{{ $category->name }}</button></a>
                                @endforeach
                            </ul>
                        @endunless
                    </div><!-- /.category -->
                </div><!-- /.social-container -->
            </div><!-- /.right-container -->
        </div><!-- /.article-container -->

        <div class="button-blog">
            <div class="previous">
                @if($previous)
                    <a href="{{ URL::to( '/admin/blogs/' . $previous->id ) }}"><i class="fa fa-long-arrow-left fa-3x" aria-hidden="true"></i></a>
                @endif
            </div><!-- /.left -->

            <div class="centre">
                <li><a href="/contact"><button class="btn-primary" type="button">Contact Us</button></a></li>
            </div><!-- /.centre -->

            <div class="next">
                @if($next)
                    <a href="{{ URL::to( '/admin/blogs/' . $next->id ) }}"><i class="fa fa-long-arrow-right fa-3x" aria-hidden="true"></i></a>
                @endif
            </div><!-- /.right -->

        </div><!-- /.button-blog -->

    </div><!-- /.main-container -->


@stop
