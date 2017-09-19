@extends ('layouts.app')

@section('meta-title', 'Latest Videos')

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('videos') !!}
</div><!-- /.breadcrumb-container -->

    <div class="main-container">
        <div class="privacy-container">


        <div class="composite-container">
            <div class="single-container">
                <h4>Social Diversity Series</h4>
                <p>A series that focuses on how some organisations have been slow to evolve around the cultural, racial and social strategies within the tech sector.</p>
                <h5 class="is--black is--capitals">Episode 1: How can tech firms fortify their brands through cultural diversity</h5>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_UHsWdhNk8c" frameborder="0" allowfullscreen></iframe>
            </div><!-- /.single-container -->

            <div class="single-container">
                <h4>Mind Body & Soul Series</h4>
                <p>We will delve in to how you can establish trust between you and your cohorts and we will showcase situations in which empathy is an important characteristic in order to form long lasting relationships.</p>
                <h5 class="is--black is--capitals">Episode 2: How can we use mindfulness in our quest for creativity</h5>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/gczfKRNHCOs" frameborder="0" allowfullscreen></iframe>
            </div><!-- /.single-container -->
        </div><!-- /.composite-container -->

            <div class="composite-container">
                <div class="single-container">
                    <h4>Scaffolding the Front End Series</h4>
                    <p>A series that showcases web development techniques using front end languages such as Javascript and Javascript frameworks such as Vuejs.</p>
                    <h5 class="is--black is--capitals">Episode 3: How can we use fonts responsively in mobile design</h5>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0jvz6l-xb-c" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.single-container -->

                <div class="single-container">
                    <h4>Social Diversity Series</h4>
                    <p>A series that focuses on how some organisations have been slow to evolve around the cultural, racial and social strategies within the tech sector.</p>
                    <h5 class="is--black is--capitals">Episode 4: How Tech firms can use social mobility can enable opportunities for everyone instead of the privileged few</h5>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/A2x8wM0vNHo" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.single-container -->

            </div><!-- /.composite-container -->

            <div class="composite-container">
                <div class="single-container">
                    <h4>Social Diversity Series</h4>
                    <h5 class="is--black is--capitals">Episode 5: How Can We Derive Value From Developer Inspired Meetup Groups?</h5>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/rTVHSNLnhzY" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.single-container -->

                <div class="single-container">
                    <h4>Social Diversity Series</h4>
                    <h5 class="is--black is--capitals">Episode 6: How does implicit bias influence the cultural fit within tech firms? </h5>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/VbsivYheqgY" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.single-container -->
            </div><!-- /.composite-container -->

            <div class="composite-container">
                <div class="single-container">
                    <h5 class="is--beige is--capitals">Episode 7: How does implicit bias affect your relationships? </h5>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/N1mSmFNuJXQ" frameborder="0" allowfullscreen></iframe>
                </div><!-- /.single-container -->


                    <div class="single-container">
                        <h5 class="is--beige is--capitals">Episode 8: How we use markdown in mailables for Laravel 5.5 </h5>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLDmukVX8QG_N4MkKfkSlyejikzjw2O5jD" frameborder="0" allowfullscreen></iframe>
                    </div><!-- /.single-container -->


            </div><!-- /.composite-container -->

        </div><!-- /.privacy-container -->
    </div><!-- /.main-container -->

@endsection

