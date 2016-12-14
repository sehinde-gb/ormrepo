@extends ('app')

@section('meta_description')

@section ('content')
    <div class="form-blade">
        <div class="main-container">
            <div class="header">
                <h1 class="product--title">Category Results</h1>
            </div><!-- /.header -->

            @if (count($blogs) === 0)
                <div class="section hero is-primary">
                    <div class="hero-body">
                        <div class="container">

                            <p class="offline">Sorry, no category's were found today.</p>
                        </div><!-- /.container -->
                    </div><!-- /.hero-body -->
                </div><!-- /.section hero -->


            @elseif (count($blogs) >= 1)

                @foreach($blogs as $blog)
                    <article>

                        <h2><a href="{{ url('/blogs', $blog->id) }}">{{ $blog->title }}</a></h2>
                        <div class="body">{{ $blog->body }} </div>
                    </article>
                @endforeach
            @endif

        </div>
    </div>

@stop

