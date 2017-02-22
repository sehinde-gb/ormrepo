
@extends ('layouts.app')

@section('meta-title', 'About Us')

@section('content')

    <div class="main-container">
        <!-- Page Content -->
        <a name="introduction"></a>
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-slider">
                            <div class="collection">
                                <img class="logo"
                                     srcset="/images/slider@1,5x.png 980w,
                                            /images/slider@1x.png 480w"
                                     alt="The ormrepo thoughtful logo">
                            </div><!-- /.collection -->
                        </div><!-- .intro-slider -->
                    </div>
             </div>
          </div>
        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                            <div class="clearfix"></div>
                            <h4>Sehinde Raji is a Web Developer specialising in PHP</h4>
                                <p class="section--title">Sehinde is a self taught Web Developer and an established outsider who is always on the lookout for exciting Development opportunities.
                                </p>
                                <br>
                                <p class="section--title">Sehinde has a particular focus on Laravel, Wordpress and Craft CMS
                                    and has worked with a number of small businesses. He has produced a portfolio of containing previous work as part of efforts to further his career.
                                </p>
                            <br>
                            <p class="section--title">Sehinde has worked as a 3rd Level Technical Support Engineer and he has been a class teacher at an International School overseas.
                                </p>
                                <br>
                                <p class="section--title">Sehinde has the unique ability to breakdown complex subject areas in to easily consumable byte sized chunks.</p>
                                <!-- /.section--title -->
                                <br>
                                <p class="section--title"> Sehinde lives in London (UK) and is immediately available.
                                </p>
                    </div><!-- col-lg-5 col-sm-6 -->
                        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                            <img class="img-responsive" src="images/mypic.png" alt="">
                        </div><!-- .col-lg-5 col-lg-offset-2 col-sm-6 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .content-section a -->
    </div><!-- .hero -->
</div><!-- /.main-container -->
@endsection




