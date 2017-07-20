@extends ('layouts.app')

@section('meta-title', 'Search Results')

@section ('content')

    <div class="main-container">

            <div class="search-container">
                <div class="top-heading">
                    <h4 class="is--beige">Search Results</h4>
                </div><!-- /.heading -->

                <div class="left-container">
                   @if (count($blogs) === 0)
                       <p>Sorry your search didn't return any articles.</p>
                   @elseif (count($blogs) >= 1)
                        @foreach($blogs as $blog)
                           <article>
                               <h2><a class="is--beige" href="{{ url('blogs', $blog->id) }}">{!!  $blog->title !!}</a></h2>
                               <h3 class="is--mar-top">{!! str_limit($blog->body, $limit = 300, $end = '')!!}</h3>

                           </article>
                       @endforeach
                   @endif
               </div><!-- /.left-container -->

               <div class="right-container">

               </div><!-- /.right-container -->
        </div><!-- /.article-container -->
    </div><!-- /.main-container -->

@stop
