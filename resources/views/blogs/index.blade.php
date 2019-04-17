@extends('layouts.app')

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
                                    <h8>CHAIN</h8><h9><span class="underlined">B</span>LOG</h9>                
                            </div><!-- /.logo-header -->  
                        </div><!-- /.collection -->
                                            
                    </div><!-- .intro-slider -->
       

                    <div class="columns is-gapless is-multiline animated rotateInDownLeft">
                        <div class="column is-one-quarter box-is-beige is-flex is-one">
                            <div class="name-column">
                                <h6 class="box--name">Sehinde Raji</h6>
                                <h6 class="box--title">Founder</h6>
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
                                <div class="column is-one-quarter is-dark-grey is-flex is-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Aeroplanes at the hanger waiting for passengers to board"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-three-->
                                
                            @elseif($blog->id == 2)
                                <div class="column is-one-quarter is-grey is-flex is-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-four-->
                                
                            @elseif($blog->id == 3)
                                <div class="column is-one-quarter is-light-grey is-flex is-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-five-->
                            @elseif($blog->id == 4)
                                <div class="column is-one-quarter is-dark-grey is-flex is-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Infrastructure "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-six-->

                            @elseif($blog->id == 5)
                                <div class="column is-one-quarter is-grey is-flex is-seven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-seven--> 

                            @elseif($blog->id == 6)
                                <div class="column is-one-quarter is-light-grey is-flex is-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-eight-->
                            @elseif($blog->id == 7)
                                <div class="column is-one-quarter is-dark-grey is-flex is-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-nine-->
                            @elseif($blog->id == 8)
                                <div class="column is-one-quarter is-grey is-flex is-ten">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-ten-->
                            @elseif($blog->id == 9)
                                <div class="column is-one-quarter is-grey is-flex is-eleven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by Quintin Gellar from Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-eleven-->    
                            @elseif($blog->id == 10)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twelve">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Blockchain Explained: Photo by  Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twelve-->
                            @elseif($blog->id == 11)
                                <div class="column is-one-quarter is-grey is-flex is-thirteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by  Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-thirteen--> 
                            @elseif($blog->id == 12)
                            <div class="column is-one-quarter box-is-beige is-flex is-fourteen">
                                    <div class="name-column">
                                        <h6 class="box--name">Railways</h6>
                                        <h6 class="box--title">Metro Systems</h6>
                                    </div><!-- /.name-column -->
                            </div><!-- /.column is-one-quarter box-is-beige is-flex-bottom is-one-->
                            
                            @elseif($blog->id == 13)
                                <div class="column is-one-quarter is-grey is-flex is-fifteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Photo by Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-fifteen-->
                            
                            @elseif($blog->id == 14)
                                <div class="column is-one-quarter is-dark-grey is-flex is-sixteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Legacy Airline Photo by Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-sixteen--> 
                            
                            @elseif($blog->id == 15)
                                <div class="column is-one-quarter is-light-grey is-flex is-seventeen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Legacy Airline Photo by Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-seventeen -->  
                            
                            @elseif($blog->id == 16)
                                <div class="column is-one-quarter is-grey is-flex is-eighteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Electricity Pylon Photo by Pexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-eighteen-->  

                            @elseif($blog->id == 17)
                                <div class="column is-one-quarter is-dark-grey is-flex is-nineteen">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Northern Line Train Courtesy Of TFL @ Edgware Station"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-nineteen-->
                                
                            @elseif($blog->id == 18)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: A photo of a man with his luggage courtesy of Plexels "></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-twenty-->  

                            @elseif($blog->id == 19)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Public Transport: Northern Line Train Courtesy Of TFL @ Edgware Station"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-one-->
                                
                            @elseif($blog->id == 20)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: A photo of an aircraft engine Courtesy of Plexels"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-two-->
                            
                            @elseif($blog->id == 21)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: A photo of a Quantas Plane"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-three-->
                            
                            @elseif($blog->id == 22)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twenty-four">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="xxxx"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-four-->
                            @elseif($blog->id == 23)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-five">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="xxxx"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-five-->
                            
                            @elseif($blog->id == 24)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-six">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="XXXXX"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-six-->
                            
                            @elseif($blog->id == 25)
                                <div class="column is-one-quarter is-dark-grey is-flex is-twenty-seven">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="XXX"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-twenty-seven-->  
                            @elseif($blog->id == 26)
                                <div class="column is-one-quarter is-light-grey is-flex is-twenty-eight">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="Learn Blockchain: Energy Bulb By Plexels"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-twenty-eight--> 
                            @elseif($blog->id == 27)
                                <div class="column is-one-quarter is-grey is-flex is-twenty-nine">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="XXX"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-twenty-nine-->
                            @elseif($blog->id == 28)
                                <div class="column is-one-quarter is-dark-grey is-flex is-thirty">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="XXX"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-thirty-->  

                            @elseif($blog->id == 29)
                                <div class="column is-one-quarter is-light-grey is-flex is-thirty-one">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="XXX"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-light-grey is-flex is-thirty-one-->

                            @elseif($blog->id == 30)
                                <div class="column is-one-quarter is-grey is-flex is-thirty-two">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="XXX"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-grey is-flex is-seventy-five--> 

                            @elseif($blog->id == 31)
                                <div class="column is-one-quarter is-dark-grey is-flex is-thirty-three">
                                    <div class="arrow">
                                        <div class="indexed-image">
                                            <a href="{{ url('blogs', $blog->id) }}"><img src="{{ asset('featured/images/' . $blog->id. '.png') }}" class="reduction" alt="XXX"></a>
                                        </div><!-- /.indexed-image -->
                                        <i class="fa fa-long-arrow-left fa-2x"></i>
                                        <h6><a href="{{ url('blogs', $blog->slug) }}">{{ $blog->title }}</a></h6>
                                    </div><!-- /.arrow -->
                                </div><!-- /.column is-one-quarter is-dark-grey is-flex is-thirty-three-->                                                                                                       
                            @endif

                        @endforeach
                    </div><!-- /.columns is-gapless is-multiline animated rotateInDownLeft -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div><!-- /.hero -->

    </div><!-- /.content-section-c -->

@endsection

