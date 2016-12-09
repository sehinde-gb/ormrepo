@extends ('layouts.app')

@section('meta_description', strip_tags($index))

@section ('content')
    <h1>Category Results</h1>
    <hr/>

    @foreach($blogs as $blog)
        <article>
            <h2><a href="{{ url('blogs', $blog->id) }}">{{ $blog->title }}</a></h2>
            <div class="body">{{ $blog->body }} </div>
        </article>
    @endforeach

@stop


