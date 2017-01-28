@extends('layouts.app')

@section('meta-title', $blog->title)

@section('content')

    <div class="main-container">

        <div class="heading">
            <div id="featured-image">
                <img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="featured" alt="A mug of beer">
            </div><!-- /.featured-image -->
            <h1 class="blog--title is--padded-top-10">{!! $blog->title !!}</h1>
            <h2 class="blog--excerpt">{!! $blog->excerpt !!}</h2>
            <p id="published--at">Created on: <span><i class="fa fa-calendar" aria-hidden="true"></i></span> {!! date('F d, Y', strtotime($blog->created_at)) !!} </p>
            <p id="published--at">Written by <small>Sehinde Raji</small></p>
        </div><!-- /.heading -->

        <div class="article-container">
            <div class="left-container">
                <p class="is--beige">{!! $blog->body !!}</p>
            </div><!-- /.left-container -->

            <div class="right-container">
                <div class="social-container">
                    <h3>Comments</h3>
                    @if(isset($comments['root']))
                        @include('blogs.comments.list', ['collection' => $comments['root']])


                        @include('blogs.comments.form')

                    @else
                        <p>No historical comments today</p>
                        <h3 class="is--both-sides ">Leave a Reply</h3>
                        @include('blogs.comments.form')

                    @endif

                    <div class="social-buttons is--margin-top-50">
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
                    <ul>
                        <li>
                            <a href="{{ URL::to( '/blogs/' . $previous->id ) }}"><i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>

                @endif
            </div><!-- /.left -->

            <div class="centre">
                <ul>
                    <li><a href="/contact"><button class="btn-primary" type="button">Contact Us</button></a></li>
                </ul>

            </div><!-- /.centre -->

            <div class="next">
                @if($next)
                    <ul>
                        <li>
                            <a href="{{ URL::to( '/blogs/' . $next->id ) }}"><i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i></a>
                        </li>
                    </ul>

                @endif
            </div><!-- /.right -->

        </div><!-- /.button-blog -->

    </div><!-- /.main-container -->


@stop
