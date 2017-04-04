@extends ('layouts.app')

@section('meta_description')

@section ('content')
    <div class="form-blade">
        <div class="main-container">
            <div class="section hero">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">Tag Results</h1>
                        <p class="subtitle">
                            Every tag on the site
                        </p>

                    </div><!-- /.container -->
                </div><!-- /.hero-body -->
            </div><!-- /.section hero -->




            <div class="container">
                @if (count($blogs) === 0)

                        <div class="hero-body">
                            <div class="search-container">
                                 <p class="offline">Sorry, no categories were found today.</p>
                            </div><!-- /.search-container -->
                        </div><!-- /.hero-body -->


                @elseif (count($blogs) >= 1)
                    @foreach($blogs as $blog)
                        <div class="hero-body">
                            <article>
                                <h2><a href="{{ url('/blogs', $blog->id) }}">{{ $blog->title }}</a></h2>
                                <div class="body">{{ $blog->body }} </div>
                            </article>

                        </div><!-- /.hero-body -->
                    @endforeach
                @endif
            </div><!-- /.container -->
        </div><!-- /.main-container -->
    </div><!-- /.form-blade -->

@stop

