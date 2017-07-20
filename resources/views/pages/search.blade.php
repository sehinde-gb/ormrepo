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
                               <h3><a class="is--white is--reset" href="{{ url('blogs', $blog->id) }}">{!!  $blog->title !!}</a></h3>
                               <p>{!! str_limit($blog->body, $limit = 300, $end = '')!!}</p>

                           </article>
                       @endforeach
                   @endif
               </div><!-- /.search-container -->

               <div class="right-container">

               </div><!-- /.right-container -->
        </div><!-- /.article-container -->
    </div><!-- /.main-container -->

@stop
