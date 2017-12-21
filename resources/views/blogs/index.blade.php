@extends('layouts.app')

@section('meta-title', 'Welcome to our Blog')

@section('content')

    <div class="breadcrumb-container">
        {!! Breadcrumbs::render('blogs.index') !!}
    </div><!-- /.breadcrumb-container -->
    <!-- Page Content -->
    <a name="introduction"></a>
    <div class="hero">
        <div class="first-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-slider">
                        <div class="collection">
                            <div class="logo-header">
                                <h8>ORM</h8><h9><span class="underlined">R</span>EPO</h9>
                                <div class="statement">

                                </div><!-- /.statement -->
                            </div><!-- /.logo-heading -->

                        </div><!-- /.collection -->
                    </div><!-- .intro-slider -->



                    <div class="columns is-gapless is-multiline animated rotateInDownLeft">
                        <div class="column is-one-quarter box-is-beige is-flex is-one">
                            <div class="name-column">
                                <h6 class="box--name">Sehinde Raji</h6>
                                <h6 class="box--title">Founder</h6>
                                <h6 class="box--title">Web Developer</h6>
                            </div><!-- /.name-column -->
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
                                <div class="column is-one-quarter box-is-beige is-flex is-five">
                                    <div class="name-column">
                                        <h6 class="box--name">Karan Kanuga</h6>
                                        <h6 class="box--title">(Business Collaborator) </h6>
                                        <h6 class="box--title">Project</h6>
                                        <h6 class="box--title">Management & SEO</h6>
                                    </div><!-- /.name-column -->

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
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-sixteen-->
                            @elseif($blog->id == 13)
                                <div class="column is-one-quarter is-dark-grey is-flex is-seventeen">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-seventeen-->
                            @elseif($blog->id == 14)
                                <div class="column is-one-quarter is-light-grey is-flex is-eighteen">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-eighteen-->
                            @elseif($blog->id == 15)
                                <div class="column is-one-quarter is-grey is-flex is-nineteen">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-nineteen-->

                            @elseif($blog->id == 16)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twenty">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-->

                            @elseif($blog->id == 17)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-one">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-one-->

                            @elseif($blog->id == 18)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-two">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-two-->
                            @elseif($blog->id == 19)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-three">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-three-->

                            @elseif($blog->id == 20)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twenty-four">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-four-->

                            @elseif($blog->id == 21)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-five">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-five-->
                            @elseif($blog->id == 22)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-six">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-six -->

                            @elseif($blog->id == 23)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twenty-seven">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-seven-->

                            @elseif($blog->id == 24)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-eight">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-eight-->
                            @elseif($blog->id == 25)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-nine">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-nine -->

                            @elseif($blog->id == 26)
                                <div class="column is-one-quarter is-dark-grey is-flex is-thirty">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-thirty-->

                            @elseif($blog->id == 27)
                                <div class="column is-one-quarter is-grey is-flex is-thirty-one">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-thirty-one-->

                            @elseif($blog->id == 28)
                                <div class="column is-one-quarter is-light-grey is-flex is-thirty-two">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-thirty-two-->

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
                    </div><!--End mc_embed_signup-->
                </div><!-- /.form-group -->

            </div><!-- /.subscribe -->
        </div><!-- /.newsletter-container -->






    </div><!-- /.content-section-c -->

@endsection

