@extends ('layouts.master')

@section('meta-title', 'Web Development Services')

@section('content')

<div class="homepage-container">
        <div class="hero-container">
                <div class="logo-header">
                    <h8>ORM</h8><h9><span class="underlined">R</span>EPO</h9>
                </div><!-- /.logo-heading -->

            <div class="statement">
                <p class="tagline">We provide full circle, web development services & tailored virtual craftsmanship, to empower you with the right tools and systems that help cater for your customer needs.</p>

            </div><!-- /.statement -->

            <div class="read-container">
                <a href="#about"><button type="submit" class="btn btn-secondary">Read More</button></a>
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

                <div class="book-container">

                    <a href="/bookings"><button type="submit" class="btn btn-white">Book Now</button></a>


                </div><!-- /.read-container -->

                <div class="quote-container">
                    <a href="/quotes"><button type="submit" class="btn btn-white">Get a Quote</button></a>
                </div><!-- /.quote-container -->

                    <div class="who-container">
                       <div class="monitor-container">
                           <img src="/images/assets/monitor.png"
                                   alt="The monitor">
                           <div class="title-container">
                                <h14>Custom Fitted</h14>
                           </div><!-- /.title-container -->

                           <div class="text-container">
                            <p class="aligned">We use open source back-end systems. This accurately allows us to give your business the exact features and options you expect from your web development services; tweaking it to your taste and specifics.
                            </p>
                           </div><!-- /.text-container -->

                       </div><!-- /.monitor-container -->
                            <div class="gear-container">
                                <img src="/images/assets/gear.png"
                                     alt="The gear">
                                <div class="title-container">
                                    <h14> Autopilot</h14>
                                </div><!-- /.title-container -->
                                <div class="text-container">
                                    <p class="aligned">If you don’t feel like liaising with many heads to culminate the project, we do provide a full <span>360*</span> project management service, taking your project from stages of conception through to delivery, setting milestones along the way.
                                    </p>
                                </div><!-- /.text-container -->

                            </div><!-- /.gear-container -->

                                <div class="free-container">
                                    <img src="/images/assets/download.png"
                                         alt="The download">
                                    <div class="title-container">
                                        <h14>Online Presence</h14>
                                    </div><!-- /.title-container -->
                                    <div class="text-container">
                                        <p class="aligned">You don’t have to pay big money to be visible on the biggest search engines. It’s called Search Engine Optimisation. It’s legit and we’ll be happy to tell you more, just ask.</p>
                                    </div><!-- /.text-container -->
                                </div><!-- /.free-container -->
                    </div><!-- /.who-container -->
        </div><!-- /.about-container -->

    <div class="green-container">

    </div><!-- /.green-container -->

    <div class="portfolio-container">
        <h7 id="portfolio"></h7>
        <div class="about-heading is--padded-b50">
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
                    <img class="img-responsive" srcset="/images/showcase/games-large.jpg 1280w,
                                                       /images/showcase/games-medium.jpg 980w,
                                                        /images/showcase/games-small.jpg 480w"
                         alt="Gamesstation website">

                </div><!-- /.column-2 -->



                <div class="column-3">
                    <img class="img-responsive" srcset="/images/showcase/coutier-large.jpg 1280w,
                                                       /images/showcase/coutier-medium.jpg 980w,
                                                        /images/showcase/coutier-small.jpg 480w"
                         alt="The Nina Naustadt website">

                </div><!-- /.column-3 -->

                <div class="column-4">
                    <img class="img-responsive" srcset="/images/showcase/goldsmith-large.jpg 1280w,
                                                        /images/showcase/goldsmith-medium.jpg 980w"
                         alt="The Oliver Goldsmith website">
                </div><!-- /.column-4 -->

                <div class="column-5">
                    <img class="img-responsive" srcset="/images/showcase/zep-large.jpg 1280w,
                                                        /images/showcase/zep-medium.jpg 980w,
                                                        /images/showcase/zep-small.jpg 480w"
                         alt="The Led Zeppellin Tribute website">
                </div><!-- /.column-5 -->

                <div class="column-6">
                    <img class="img-responsive" srcset="/images/showcase/digital-large.jpg 1280w,
                                                        /images/showcase/digital-medium.jpg 980w,
                                                        /images/showcase/digital-small.jpg 480w"
                         alt="The Seven Digital website">
                </div><!-- /.column-6 -->

                <div class="column-7">
                    <img class="img-responsive" srcset="/images/showcase/gillian-large.jpg 1280w,
                                                         /images/showcase/gillian-medium.jpg 980w,
                                                         /images/showcase/gillian-small.jpg 480w"
                         alt="The Gillian McKeith website">
                </div><!-- /.column-7 -->

                <div class="column-8">
                    <img class="img-responsive" srcset="/images/showcase/casa-large.jpg 1280w,
                                                         /images/showcase/casa-medium.jpg 980w,
                                                         /images/showcase/casa-small.jpg 480w"
                         alt="The Casa Rentals website">
                </div><!-- /.column-8 -->

                <div class="column-9">
                    <img class="img-responsive" srcset="/images/showcase/coche-large.jpg 1280w,
                                                         /images/showcase/coche-medium.jpg 980w,
                                                         /images/showcase/coche-small.jpg 480w"
                         alt="The El Coche website">
                </div><!-- /.column-9 -->
            </div><!-- /.projects-container -->

            <div class="read-container">
                <a href="/portfolio"><button type="submit" class="btn btn-off-white">Read More</button></a>
            </div><!-- /.read-container -->

    </div><!-- /.portfolio-container -->

    <div class="grey-container">
        <div class="alert-container">
            <div id="root">
                <!-- Using the Alert component -->
                <p class="fourthtext"><message body= "Our website uses cookies. By agreeing to access this site you are agreeing to their use."></message></p>

            </div><!-- /#app -->
        </div><!-- /.alert-container -->
    </div><!-- /.grey-container -->

        <div class="contact-container">
            <h7 id="contact"></h7>
                <div class="about-heading is--padded-b50">
                    <h12 class="is--beige">Co<h15 class="is--beige">nta</h15>ct Us</h12>
                </div><!-- /.about-heading -->

            <div class="contact-text">
                <h5 class="is--beige text-transform">Email: info@ormrepo.co.uk</h5>
                <h5 class="is--beige text-transform">Opening Hours: 9am - 5pm</h5>
                <h5 class="is--beige text-transform">Telephone: 07379 829189</h5>
            </div><!-- /.text-container -->


        </div><!-- /.contact-container -->

    @include('partials.footer')
</div><!-- /.homepage-container -->
@endsection

