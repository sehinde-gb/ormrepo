@extends ('layouts.test')

@section('meta-title', 'Home')

@section('content')

<div class="homepage-container">
        <div class="hero-container">
                <div class="logo-heading">
                    <h8>ORM</h8><h9><span class="underlined">R</span>EPO</h9>
                </div><!-- /.logo-heading -->

            <div class="statement">
                <p class="myriad">We will empower you for all your customers needs</p>
            </div><!-- /.statement -->

            <div class="read-container">
                <a href="#about"><button type="submit" class="btn btn-tertiary">Read More</button></a>
            </div><!-- /.read-container -->

            <div class="jump-to-about">
                <a href="#about"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div><!-- /.back-to-top -->

        </div><!-- /.hero-container -->

        <div class="about-container">
            <h7 id="about"></h7>

            @include('partials.navigation')

            <div class="about-heading">
                <h12>Ab</h12><h13>out</h13><h12> Us</h12>
            </div><!-- /.about-heading -->

                <div class="read-container">
                    <button type="submit" class="btn btn-white">Book Now</button>
                </div><!-- /.read-container -->

                    <div class="who-container">
                       <div class="monitor-container">
                           <img src="/images/assets/monitor.png"
                                   alt="The monitor">
                           <div class="title-container">
                                <h14>Responsive</h14>
                           </div><!-- /.title-container -->

                           <div class="text-container">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                           </div><!-- /.text-container -->

                       </div><!-- /.monitor-container -->
                            <div class="gear-container">
                                <img src="/images/assets/gear.png"
                                     alt="The gear">
                                <div class="title-container">
                                    <h14>Minimalist</h14>
                                </div><!-- /.title-container -->
                                <div class="text-container">
                                    <p>Lorem ipsum dolor sit amet, <span>consectetur adipiscing elit,</span> sed do eiusmod tempor incididunt </p>
                                </div><!-- /.text-container -->

                            </div><!-- /.gear-container -->

                                <div class="free-container">
                                    <img src="/images/assets/download.png"
                                         alt="The download">
                                    <div class="title-container">
                                        <h14>Freebies</h14>
                                    </div><!-- /.title-container -->
                                    <div class="text-container">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                                    </div><!-- /.text-container -->
                                </div><!-- /.free-container -->
                    </div><!-- /.who-container -->
        </div><!-- /.about-container -->

    <div class="green-container">

    </div><!-- /.green-container -->

    <div class="portfolio-container">
        <h7 id="portfolio"></h7>
        <div class="about-heading is--padded-bt50">
            <h12>Po</h12><h13>rtfo</h13><h12>lio</h12>
        </div><!-- /.about-heading -->

            <div class="projects-container">
                <div class="column-1">
                    <img class="img-responsive" srcset="/images/showcase/goose.jpg 1280w,
                                                       /images/showcase/goose-medium.jpg 980w,
                                                       /images/showcase/goose-small.jpg 480w"
                                                       alt="Great Green Gooseberry website">
                </div><!-- /.column-1 -->

                <div class="column-2">
                    <img class="img-responsive" srcset="/images/showcase/casa-large.jpg 1280w,
                                                       /images/showcase/casa-medium.jpg 980w,
                                                        /images/showcase/casa-small.jpg 480w"
                                                        alt="Casa Rental website">
                </div><!-- /.column-2 -->

                <div class="column-3">
                    <img class="img-responsive" srcset="/images/showcase/games-large.jpg 1280w,
                                                       /images/showcase/games-medium.jpg 980w,
                                                        /images/showcase/games-small.jpg 480w"
                                                        alt="Gamesstation website">
                </div><!-- /.column-3 -->

                <div class="column-4">
                    <img class="img-respone" srcset="/images/showcase/elcoche-large.jpg">
                </div><!-- /.column-4 -->

                <div class="column-5">

                </div><!-- /.column-5 -->

                <div class="column-6">

                </div><!-- /.column-6 -->
            </div><!-- /.projects-container -->

            <div class="read-container">
                <a href="/portfolio"><button type="submit" class="btn btn-off-white">Read More</button></a>
            </div><!-- /.read-container -->

    </div><!-- /.portfolio-container -->

    <div class="grey-container">

    </div><!-- /.grey-container -->

        <div class="contact-container">
            <h7 id="contact"></h7>
            <div class="about-heading is--padded-bt50">
                <h12 class="is--beige">Co<h15 class="is--beige">nta</h15>ct</h12>

            </div><!-- /.about-heading -->

            <div class="message-container">
                {!! Form::open(array('route' => 'home_store')) !!}
                @include('partials.errors')

                    <div class="named-container">
                        <div class="description">
                            {!! Form::label('Your Name', 'Your Name:', ['class' => 'control']) !!}
                            {!! Form::text('name', null, ['class' => 'form', 'placeholder' => 'Name']) !!}
                        </div><!-- /.test -->

                        <div class="description">
                            {!! Form::label('Your Email Address', 'Email Address:', ['class' => 'control']) !!}
                            {!! Form::text('email', null, ['class' => 'form', 'placeholder' => 'Email Address']) !!}
                        </div><!-- /.test -->

                    </div><!-- /.named-container -->

                    <div class="complete-container">
                        <div class="description-container">
                            {!! Form::label('user_message', 'Message:', ['class' => 'control']) !!}
                            {!! Form::textarea('user_message', null, ['class' => 'form-control', 'placeholder' => 'Your Message']) !!}
                        </div><!-- /.description-container -->
                        <div class="mail-container">
                            <p class="is--beige">Please use the adjacent form to contact us</p>
                            <p class="is--beige">Email: info@ormrepo.co.uk</p>
                            <p class="is--beige">Telephone: 07512305773</p>
                        </div><!-- /.mail-container -->
                    </div><!-- /.complete-container -->

                    <div class="read-container">
                        {!! Form::submit('Send', array('class'=>'btn btn-tertiary')) !!}
                    </div><!-- /.read-container -->

                {!! Form::close() !!}

            </div><!-- /.message-container -->
        </div><!-- /.contact-container -->

    @include('partials.footer')
</div><!-- /.homepage-container -->
@endsection

