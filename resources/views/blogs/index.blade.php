@extends('layouts.app')

@section('meta-title', 'Tech Transport Blog | London UK | Blockchain Explained | Public Transport | Inclusion and Diversity ')

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
                                            <div class="indexed-image">
                                                <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                            </div><!-- /.indexed-image -->
                                                <i class="fa fa-long-arrow-left fa-2x"></i>
                                                <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                        </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-three-->

                            @elseif($blog->id == 2)
                                <div class="column is-one-quarter is-dark-grey is-flex is-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-four-->

                            @elseif($blog->id == 3)
                                <div class="column is-one-quarter box-is-beige is-flex is-five">
                                    <div class="name-column">
                                        
                                    </div><!-- /.name-column -->

                                </div><!-- /.column is-one-quarter box-is-beige is-flex is-five is-hidden-mobile-->
                                <div class="column is-one-quarter is-dark-grey is-flex is-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-six-->
                            @elseif($blog->id == 4)
                                <div class="column is-one-quarter is-grey is-flex is-seven has-text-centered">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-seven has-text-centered -->

                            @elseif($blog->id == 5)
                                <div class="column is-one-quarter is-light-grey is-flex is-ten">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-ten-->

                            @elseif($blog->id == 6)
                                <div class="column is-one-quarter is-light-grey is-flex is-ten">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-ten-->
                            @elseif($blog->id == 7)
                                <div class="column is-one-quarter is-grey is-flex is-eleven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-eleven-->
                            @elseif($blog->id == 8)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twelve">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twelve-->

                            @elseif($blog->id == 9)
                                <div class="column is-one-quarter is-grey is-flex is-thirteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-thirteen-->

                            @elseif($blog->id == 10)
                                <div class="column is-one-quarter is-dark-grey is-flex is-fourteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fourteen-->
                            @elseif($blog->id == 11)
                                <div class="column is-one-quarter is-light-grey is-flex is-fifteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifteen-->
                            @elseif($blog->id == 12)
                                <div class="column is-one-quarter is-grey is-flex is-sixteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-sixteen-->
                            @elseif($blog->id == 13)
                                <div class="column is-one-quarter is-dark-grey is-flex is-seventeen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-seventeen-->
                            @elseif($blog->id == 14)
                                <div class="column is-one-quarter is-light-grey is-flex is-eighteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-eighteen-->
                            @elseif($blog->id == 15)
                                <div class="column is-one-quarter is-grey is-flex is-nineteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-nineteen-->

                            @elseif($blog->id == 16)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twenty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <i class="fa fa-long-arrow-left fa-2x"></i>
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-->

                            @elseif($blog->id == 17)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-one">
                                    <div class="arrow">
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                            <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-one-->

                            @elseif($blog->id == 18)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-two-->
                            @elseif($blog->id == 19)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-three-->

                            @elseif($blog->id == 20)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twenty-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-four-->

                            @elseif($blog->id == 21)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-five-->
                            @elseif($blog->id == 22)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-six -->

                            @elseif($blog->id == 23)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twenty-seven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-seven-->

                            @elseif($blog->id == 24)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-eight-->
                            @elseif($blog->id == 25)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-nine -->

                            @elseif($blog->id == 26)
                                <div class="column is-one-quarter is-dark-grey is-flex is-thirty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-thirty-->

                            @elseif($blog->id == 27)
                                <div class="column is-one-quarter is-grey is-flex is-thirty-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-thirty-one-->

                            @elseif($blog->id == 28)
                                <div class="column is-one-quarter is-light-grey is-flex is-thirty-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-thirty-two-->

                            @elseif($blog->id == 29)
                                <div class="column is-one-quarter is-grey is-flex is-thirty-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-thirty-three-->

                            @elseif($blog->id == 30)
                                <div class="column is-one-quarter is-dark-grey is-flex is-thirty-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-thirty-four-->
                            @elseif($blog->id == 31)
                                <div class="column is-one-quarter is-light-grey is-flex is-thirty-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-thirty-five-->
                            @elseif($blog->id == 32)
                                <div class="column is-one-quarter is-dark-grey is-flex is-thirty-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-thirty-six-->
                            @elseif($blog->id == 33)
                                <div class="column is-one-quarter is-grey is-flex is-thirty-seven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-thirty-seven-->
                            @elseif($blog->id == 34)
                                <div class="column is-one-quarter is-light-grey is-flex is-thirty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-thirty-eight-->
                            @elseif($blog->id == 35)
                                <div class="column is-one-quarter is-grey is-flex is-thirty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-thirty-nine-->
                            @elseif($blog->id == 36)
                                <div class="column is-one-quarter is-dark-grey is-flex is-forty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-forty-->
                            @elseif($blog->id == 37)
                                <div class="column is-one-quarter is-grey is-flex is-forty-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-forty-one-->
                            @elseif($blog->id == 38)
                                <div class="column is-one-quarter is-dark-grey is-flex is-forty-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-forty-two-->
                            @elseif($blog->id == 39)
                                <div class="column is-one-quarter is-grey is-flex is-forty-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-forty-three-->
                            @elseif($blog->id == 40)
                                <div class="column is-one-quarter is-light-grey is-flex is-forty-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-forty-four-->
                            @elseif($blog->id == 41)
                                <div class="column is-one-quarter is-dark-grey is-flex is-forty-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-forty-four-->
                            @elseif($blog->id == 42)
                                <div class="column is-one-quarter is-grey is-flex is-forty-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-forty-six-->
                            @elseif($blog->id == 43)
                                <div class="column is-one-quarter is-light-grey is-flex is-forty-seven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-forty-seven-->
                            @elseif($blog->id == 44)
                                <div class="column is-one-quarter is-dark-grey is-flex is-forty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="The uploaded featured image"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-forty-eight-->
                                
                            @elseif($blog->id == 45)
                                <div class="column is-one-quarter is-grey is-flex is-forty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-forty-nine-->
                                
                            @elseif($blog->id == 46)
                                <div class="column is-one-quarter is-light-grey is-flex is-fifty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifty-->
                            @elseif($blog->id == 47)
                                <div class="column is-one-quarter is-grey is-flex is-fifty-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifty-one-->

                            @elseif($blog->id == 48)
                                <div class="column is-one-quarter is-dark-grey is-flex is-fifty-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fifty-one--> 

                            @elseif($blog->id == 49)
                                <div class="column is-one-quarter is-grey is-flex is-fifty-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-fifty-three-->
                            @elseif($blog->id == 50)
                                <div class="column is-one-quarter is-light-grey is-flex is-fifty-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifty-four-->
                            @elseif($blog->id == 51)
                                <div class="column is-one-quarter is-dark-grey is-flex is-fifty-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fifty-five-->
                            @elseif($blog->id == 52)
                                <div class="column is-one-quarter is-grey is-flex is-fifty-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by Quintin Gellar from Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-fifty-six-->    
                            @elseif($blog->id == 53)
                                <div class="column is-one-quarter is-dark-grey is-flex is-fifty-seven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained: Photo by  Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-fifty-seven-->
                            @elseif($blog->id == 54)
                                <div class="column is-one-quarter is-grey is-flex is-fifty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by  Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-fifty-eight--> 
                            @elseif($blog->id == 55)
                                <div class="column is-one-quarter is-light-grey is-flex is-fifty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained: Photo by Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-fifty-nine-->
                            
                            @elseif($blog->id == 56)
                                <div class="column is-one-quarter is-grey is-flex is-sixty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-sixty--> 

                            @elseif($blog->id == 57)
                                <div class="column is-one-quarter is-dark-grey is-flex is-sixty-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained: Photo by Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-sixty-one-->                                                                                                                                               
                            @endif

                        @endforeach
                    </div><!-- /.columns is-gapless is-multiline animated rotateInDownLeft -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div><!-- /.hero -->

    </div><!-- /.content-section-c -->

@endsection

