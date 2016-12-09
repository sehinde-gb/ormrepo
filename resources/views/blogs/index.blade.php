@extends('layouts.app')

@section('content')

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
                            <div class="button-blog">
                                <button class="btn-primary" type="button">Full Blog</button>
                            </div><!-- /.button-blog -->
                        </div><!-- /.collection -->
                    </div><!-- .intro-slider -->



                    <div class="columns is-gapless is-multiline animated rotateInDownLeft">
                        <div class="column is-one-quarter box-is-beige is-flex-bottom has-text-centered">
                            <h6>Sehinde Raji</h6>
                        </div>

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
                                        <h6><a href="{{ url('blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column -->
                            @elseif($blog->id == 2)
                                <div class="column is-one-quarter is-dark-grey is-flex is-four">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column -->
                                <div class="column is-one-quarter is--beige is-five is-hidden-mobile">
                                    <h6 class="box--line">Web Developer</h6>
                                </div>
                            @elseif($blog->id == 3)
                                <div class="column is-one-quarter is-light-grey is-flex is-six">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column -->
                            @elseif($blog->id == 4)
                                <div class="column is-one-quarter is-grey is-flex is-seven">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column -->
                                <div class="column is-one-quarter is--beige is-flex-bottom is-eight">
                                    <h6>Lorem Ipsum</h6>
                                </div>
                            @elseif($blog->id == 5)
                                <div class="column is-one-quarter is-grey is-flex">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column -->
                            @elseif($blog->id == 6)
                                <div class="column is-one-quarter is-dark-grey is-flex">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column -->

                            @elseif($blog->id == 7)
                                <div class="column is-one-quarter is-light-grey is-flex">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->id) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column -->
                                <div class="column is-one-quarter is--beige is-hidden-mobile">
                                    <h6 class="box-line">Sed ut perspiciatis unde omnis iste natus</h6>
                                </div>

                            @endif
                        @endforeach
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div><!-- /.hero -->

        <div class="newsletter-container animated zoomIn">
            <div class="subscribe">
                <h3 class="news--heading">Sign Up To Receive Our Updates</h3>
                <h4 class="lorem--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h4>
                <div class="form-group">
                    {!! Form::open(array('action' => 'SubscriptionsController@store', 'class' => 'form-group', 'placeholder'=>'Your email'))  !!}
                    {!! Form::text('email', null, [ 'id' => 'box', 'class' => 'form-group', 'placeholder'=>' Your email']) !!}
                    {!!  Form::submit('add', array('class' => 'btn-add')) !!}
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
                            <h1>Sehinde Raji</h1>
                            <h3>PHP (Laravel) Web Developer.</h3>
                            <hr class="intro-divider">
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
                        <h4 class="section--heading">Great Green Gooseberry<br>Ecommerce Eco Friendly Products</h4>
                        <p class="section--body is--padding-bottom">This is one stop shop Ecommerce site that is concerned with protecting our environment through Carbon offsets and LED Lessons. This application was developed using Wordpress and there was a successful implementation of E-commerce receipts using third party vendors.</p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="images/macgoose.png" alt="Ipad containing Great Green Gooseberry artefacts.">
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
                        <h4 class="section--heading">Casa Rental<br>Home Rentals Application</h4>
                        <p class="section--body is--padding-bottom">This is a Home rental app that showcases uploaded home photos so that you can showcase your home to get the best quote for your lease! This has recently been updated with new screens using FlexBox.</p>
                    </div><!-- col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 -->
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="images/maccasa.jpg" alt="Ipad containing home rental screen.">
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
                        <h4 class="section--heading">El Coche<br>Car Blog Application</h4>
                        <p class="section--body is--padding-bottom">This is an Car enthusiast blog. This has been recently updated with new screens developed using FlexBox.</p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="images/elcoche.png" alt="Ipad containing car blog app screen.">
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
                        <h4 class="section--heading">The GamesStation<br>Ecommerce Application</h4>
                        <p class="section--body is--padding-bottom">This is an E-commerce gaming web app where you can test purchase video games, view activities and participate in the Station blog.</p>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="images/macgame.jpg" alt="Mac screen containing gamesstation home screen.">
                    </div><!-- /.col-lg-5 col-sm-pull-6  col-sm- -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.content-section-b -->
    </div><!-- /.content-section-c -->

@stop