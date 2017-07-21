@extends ('layouts.app')

@section('meta-title', 'Latest Videos')

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('videos') !!}
</div><!-- /.breadcrumb-container -->

    <div class="main-container">
        <div class="privacy-container">
            <div class="top-header">
                <h4>Latest Videos</h4>
            </div><!-- /.heading -->
            <div class="composite-container">
                <div class="single-container">
                    <h4>Social Diversity Series</h4>
                    <p>A series that focuses on how some organisations have been slow to evolve around the</p><p> cultural, racial and social strategies within the tech sector.</p>
                    <h5 class="is--beige is--capitals">Episode 1: How can tech firms fortify their brands through cultural diversity</h5>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uARY9dorEDw" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.single-container -->
            </div><!-- /.composite-container -->
        </div><!-- /.privacy-container -->
    </div><!-- /.main-container -->

@endsection

