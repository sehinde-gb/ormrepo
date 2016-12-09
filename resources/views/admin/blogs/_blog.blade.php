<article class="col-md-8">
    <h1><a href="{{ url('/blogs', $blog->id) }}">{{ $blog->title }}</a></h1>
    <div class="body"> 
        <h2>{!! $blog->body !!}</h2>  
        {!! date('d F, Y', strtotime($blog->created_at)) !!} 
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="mdash"></span>        <a href="{{ url('/users', $user->name) }}">{!! $user->name !!}</a> 
        <span class="mdash">—</span>  
        @include('partials/favourite-button')

    </div>


</article>
