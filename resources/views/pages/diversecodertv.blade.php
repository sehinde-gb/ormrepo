@extends ('layouts.app')


@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('diversecodertv') !!}
</div><!-- /.breadcrumb-container -->

    <div class="main-container">
        <h7 id="up"></h7>
        <div class="video-container">
            <div class="diverse-container">
                <img srcset="/images/assets/coderlogo-desktop.png 601w,
                        /images/assets/coderlogo-tall.png 600w"
                     alt="We help you to learn web development and the blockchain">

                <div class="diverse-container">
                    <img srcset="/images/assets/ageoftrain-desktop.png 601w,
                                /images/assets/ageoftrain-tall.png 600w"
                                alt="A picture of myself at St Margarets Station">
                </div><!-- /.diverse-container -->    

                                <div class="cliche-container">
                                    <div class="opinion is--centered">
                                        <div class="align-icon">
                                            <div class="cliche">
                                                <img src="/images/assets/train.png" class="down" alt="A picture of an underground train">
                                            </div><!-- /.cliche -->
                                        </div><!-- /.align-icon -->
                                        <h17>"This is the Age Of The Train"</h17>
                                    </div><!-- /.opinion -->

                                </div><!-- /.cliche-container -->

                                <div class="composite-container">
                                        <div class="single-container">
                                            <h5 class="is--white is--capitals is--padded-b10">What Is My Manifesto ? Part One</h5>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/rt1lxcYoWxE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div><!-- /.single-container -->
    
                                        <div class="single-container">
                                             <h5 class="is--white is--capitals is--padded-b10">What Is My Manifesto ? Part Two</h5>
                                             <iframe width="560" height="315" src="https://www.youtube.com/embed/zpQQWgRD98A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div><!-- /.single-container -->
                                </div><!-- /.composite-container -->    
                        </div><!-- /.cliche-container -->

            </div><!-- /.diverse-container -->
            
        </div><!-- /.video-container -->
    </div><!-- /.main-container -->

@endsection

