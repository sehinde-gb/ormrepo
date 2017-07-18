@extends('layouts.app')

@section('meta-title', 'Welcome to our Blog')

@section('content')

    <!-- Page Content -->
    <a name="introduction"></a>
    <div class="hero">
        <div class="first-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-slider">
                        <div class="collection">
                            <img class="logo"
                                 srcset="/images/hero/slider@1,5x.png 980w,
                                        /images/hero/slider@1x.png 480w"
                                 alt="The ormrepo thoughtful logo">

                        </div><!-- /.collection -->
                    </div><!-- .intro-slider -->

                    <div class="alert-container">
                        <div id="root">
                            <!-- Using the Alert component -->
                            <message body="Our website uses cookies. By agreeing to access this site you are agreeing to their use."></message>

                        </div><!-- /#app -->
                    </div><!-- /.alert-container -->


                    <div class="columns is-gapless is-multiline animated rotateInDownLeft">
                        <div class="column is-one-quarter box-is-beige is-flex-bottom is-one">
                            <h6 class="column-name">Sehinde Raji</h6>
                        </div><!-- /.column is-one-quarter box-is-beige is-flex-bottom is-one-->

                        <div class="column is-one-quarter is-grey is-flex is-two has-text-centered">
                            <div class="arrow">
                                <span><i class="fa fa-minus fa-1x" aria-hidden="true"></i>
                                <a href="https://twitter.com/ormrepo" class="twitter"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                                <i class="fa fa-minus fa-1x" aria-hidden="true"></i></span>
                                <h6 class="social--text">Follow @ormrepo
                                    for more information</h6>
                            </div><!-- /.arrow -->
                        </div><!-- /.column is-one-quarter is-grey is-flex is-two has-text-centered-->

                        @foreach ($blogs as $blog)
                            @if($blog->id == 1)
                                <div class="column is-one-quarter is-light-grey is-flex is-three">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-three-->

                            @elseif($blog->id == 2)
                                <div class="column is-one-quarter is-dark-grey is-flex is-four">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-four-->

                            @elseif($blog->id == 3)
                                <div class="column is-one-quarter box-is-beige is-flex is-five is-hidden-tablet-only is-hidden-mobile">
                                    <h6 class="box--line">Web Developer</h6>
                                </div><!-- /.column is-one-quarter box-is-beige is-flex is-five is-hidden-mobile-->
                                <div class="column is-one-quarter is-dark-grey is-flex is-six">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-six-->
                            @elseif($blog->id == 4)
                                <div class="column is-one-quarter is-grey is-flex is-seven has-text-centered">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-seven has-text-centered -->

                            @elseif($blog->id == 5)
                                <div class="column is-one-quarter is-light-grey is-flex is-ten">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-ten-->

                            @elseif($blog->id == 6)
                                <div class="column is-one-quarter is-light-grey is-flex is-ten">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-ten-->
                            @elseif($blog->id == 7)
                                <div class="column is-one-quarter is-grey is-flex is-eleven">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-eleven-->
                            @elseif($blog->id == 8)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twelve">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twelve-->

                            @elseif($blog->id == 9)
                                <div class="column is-one-quarter is-grey is-flex is-thirteen">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-thirteen-->

                            @elseif($blog->id == 10)
                                <div class="column is-one-quarter is-dark-grey is-flex is-fourteen">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fourteen-->
                            @elseif($blog->id == 11)
                                <div class="column is-one-quarter is-light-grey is-flex is-fifteen">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifteen-->
                            @elseif($blog->id == 12)
                                <div class="column is-one-quarter is-grey is-flex is-sixteen">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->id) }}">{{ $blog->slug }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-sixteen-->


                            @endif

                        @endforeach
                    </div><!-- /.columns is-gapless is-multiline animated rotateInDownLeft -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div><!-- /.hero -->


        <div class="newsletter-container animated zoomIn">
            <div class="subscribe">
                <h3 class="news--heading">Sign Up To Receive Our Updates</h3>
                <h4 class="lorem--text is--lorem-padding">You consent to receiving bi-annual email updates we wont burden you with spam.</h4>
                <div class="form-group">
                    <!-- Begin MailChimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup{background:#003434; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
                        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                        <form action="//twitter.us9.list-manage.com/subscribe/post?u=1e496727dce7860147071555a&amp;id=1c16b906b8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">

                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1e496727dce7860147071555a_1c16b906b8" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                    </div>

                    <!--End mc_embed_signup-->
                </div><!-- /.form-group -->

            </div><!-- /.subscribe -->
        </div><!-- /.newsletter-container -->


        <!-- Header -->
        <a name="about"></a>
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-message">
                            <h1 class="is--white">Sehinde Raji</h1>
                            <h2 class="is--white-bottom">PHP (Laravel) Web Developer.</h2>

                            <ul class="list-inline intro-social-buttons">
                                <li>
                                    <a href="https://twitter.com/ormrepo" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw is-aligned"></i> <span class="network-name">Twitter</span></a>
                                </li>
                                <li>
                                    <a href="https://github.com/ormrepo" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw is-aligned"></i> <span class="network-name">Github</span></a>
                                </li>


                                <li>
                                    <a href="https://uk.linkedin.com/in/sehinde-raji-319457b" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw is-aligned"></i> <span class="network-name">Linkedin</span></a>
                                </li>
                            </ul>
                        </div><!-- /.intro-message -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.intro-header -->

        <a  name="services"></a>
        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h4 class="is--black">Great Green Gooseberry<br>E-Commerce Eco Friendly Products</h4>
                        <p class="section--body is--padding-bottom">This is a one stop shop e-commerce site that is concerned with protecting our environment through carbon offsets and LED lessons. This application was developed using Wordpress and there was a successful implementation of e-commerce receipts using third party vendors.</p>
                        <ul class="project-links">
                            <li><a href="https://greatgreengooseberry.club/" class="is--black">Link</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="images/showcase/macgoose.png" alt="Ipad containing Great Green Gooseberry artefacts.">
                    </div><!-- /.col-lg-5 col-lg-offset-2 col-sm-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.intro-header -->

        <div class="content-section-c">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h4 class="is--black">Casa Rental<br>Property website</h4>
                        <p class="section--body is--padding-bottom">This is a property website that was built as a test so that users from Ruislip can search for properties in their local area to buy or sell.</p>
                        <ul class="project-links">
                            <li><a href="https://casarental.ormrepo.co.uk/" class="is--black">Link</a></li>
                        </ul>
                    </div><!-- col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 -->
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="images/showcase/maccasa.jpg" alt="Ipad containing home rental screen.">
                    </div><!-- /.col-lg-5 col-sm-pull-6  col-sm- -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.content-section-c -->


        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h4 class="is--black">El Coche<br>Car Blog</h4>
                        <p class="section--body is--padding-bottom">This is an car enthusiast blog. This website is currently being updated..</p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="images/showcase/elcoche.png" alt="Ipad containing car blog app screen.">
                    </div><!-- /.col-lg-5 col-sm-pull-6  col-sm- -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.intro-header -->

        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h4 class="is--black">The GamesStation<br>Purchase game keys</h4>
                        <p class="section--body is--padding-bottom">This is a website that was built as a test e-commerce site in which you can buy video game keys, amend your profile and create inspiring blog posts.</p>
                        <ul class="project-links">
                            <li><a href="https://games.ormrepo.co.uk/" class="is--black">Link</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="images/showcase/macgame.jpg" alt="Mac screen containing gamesstation home screen.">
                    </div><!-- /.col-lg-5 col-sm-pull-6  col-sm- -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.content-section-b -->

        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>

                        <h4 class="is--black">Book Now For<br>Initial Consultation</h4>
                        <p class="section--body ">You may not have to pay a fee if an agreement has been arranged in advance.</p>

                        <div id="TTE-booknow-BT4WHhtNGM8JE-_RxI4zJQBQO21C2yOukJweeuVG" ></div>
                        <script src="//d3saea0ftg7bjt.cloudfront.net/bn/js/bn.min.js" type="text/javascript"></script>
                        <script type="text/javascript">
                            TTEBOOKNOW.init({
                                "targetDivId": "TTE-booknow-BT4WHhtNGM8JE-_RxI4zJQBQO21C2yOukJweeuVG",
                                "cpgn": "BT4WHhtNGM8JE-_RxI4zJQBQO21C2yOukJweeuVG"
                            });
                        </script>

                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="images/showcase/geek.jpg" alt="Mac screen containing gamesstation home screen.">

                    </div><!-- /.col-lg-5 col-sm-pull-6  col-sm- -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.content-section-b -->
    </div><!-- /.content-section-c -->

@endsection

