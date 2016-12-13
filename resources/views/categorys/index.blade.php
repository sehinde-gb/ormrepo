@extends ('layouts.app')

@section('meta_description')

@section ('content')
<div class="section hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">Tags</h1>
            <p class="subtitle">
                Every tag on the site
            </p>

        </div><!-- /.container -->
    </div><!-- /.hero-body -->
</div><!-- /.section hero -->

<div class="section">
    <div class="container">
        <ul class="has-columns">
            @foreach($categorys as $letter => $categoryCollection)
                <div class="letter-group">
                    <h3 class="title is-1 letter">
                        {{ $letter }}
                    </h3><!-- /.title is-1 letter -->

                    <ul>
                        @foreach($categoryCollection as $category)
                            <li class="title is-5">
                                <a href="/categorys/{{ $category->name }}">{{ $category->name }}</a>
                            </li><!-- /.title is-5 -->
                        @endforeach
                    </ul>
                </div><!-- /.letter-group -->
            @endforeach

        </ul>
    </div><!-- /.container -->
</div><!-- /.section -->





@stop


