@extends ('layouts.master')

@section('meta-title', 'Web Development Services')

@section('content')

<div class="homepage-container">
    @include('partials.navigation')
        <div class="hero-container">
            <h7 id="up"></h7>
                <div class="logo-header">
                    <h8>ORM</h8><h9><span class="underlined">R</span>EPO</h9>
                </div><!-- /.logo-header -->

                <div class="slogan-container">
                    <h14 class="is--beige is--capitals">Training | Digital Innovation | Digital Transport</h14>
                </div><!-- /.slogan-container -->
                <div class="read-container">
                    <a href="#services"><button type="submit" class="btn btn-secondary">Read More</button></a>
                </div><!-- /.read-container -->

                <div class="jump-to-about">
                    <a href="#services"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div><!-- /.back-to-top -->

        </div><!-- /.hero-container -->


        <div class="services-container">
            <h7 id="services"></h7>
            <div class="services-image">
                <picture>
                    <img srcset="/images/hero/desktop-big.jpg 601w,
                          /images/hero/desktop-tall.jpg 600w"
                         alt="We provide full circle, web development services & tailored virtual craftsmanship, to empower you with the right tools and systems that help cater for your customer needs.">
                </picture>
            </div><!-- /.slogan-image -->
        </div><!-- /.services-container -->


        <div class="our-container">
            <h7 id="about"></h7>
                <div class="our-heading">
                     <h20>Who</h20>   
                </div><!-- /.our-heading -->

                <iframe width="560" height="315" src="https://www.youtube.com/embed/I-mLjw-PULc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>

        <div class="services-container">
            <h7 id="services"></h7>
            <div class="services-image">
                <picture>
                    <img srcset="/images/hero/what-we-do-big.jpg 601w,
                          /images/hero/what-we-do-tall.jpg 600w"
                         alt="A picture collage containing someone with a thought bubble, a blockchain and a train at Watford Junction Station">
                </picture>
            </div><!-- /.slogan-image -->
        </div><!-- /.services-container -->


        <div class="about-container">
            <h7 id="about"></h7>
                <div class="about-heading">
                    <h12>Ab</h12><h13>out</h13><h12> Us</h12>
                </div><!-- /.about-heading -->

<div class="alert-container">
            <div id="root">
                <!-- Using the Alert component -->
                <p class="fourthtext"><message body= "Our website uses cookies. By agreeing to access this site you are agreeing to their use."></message></p>

            </div><!-- /#app -->
        </div><!-- /.alert-container -->
                <div class="memes-container">
                    <div class="opinion-picture">
                        <img src="/images/assets/chain.png" class="reduce" alt="A picture of a chain">
                    </div><!-- /.opinion-container -->

                    <div class="opinion">
                        <h16><span style="color:#f0955f">"</span> We build the next generation of blockchain & traditional<span style="color:#f0955f"> apps "</span></h16>
                    </div><!-- /.opinion -->

                   
                </div><!-- /.memes-container -->

                <div class="memes-container">
                    <div class="opinion-picture">
                        <img src="/images/assets/training.png" class="reduce" alt="A picture of students in a classroom">
                    </div><!-- /.opinion-container -->

                    <div class="opinion">

                        <h16><span style="color:#f0955f">"</span> We train people to learn web technology and the  <span style="color:#f0955f;"> blockchain "</span></h16>
                    </div><!-- /.opinion -->

                    
                </div><!-- /.memes-container -->

                    <div class="who-container">

                       <div class="monitor-container">
                          <div class="icon-container">
                              <img src="/images/assets/tailor.png"
                                   class="reduce" alt="The tailor's pin">
                          </div><!-- /.icon-container -->

                           <div class="title-container">
                                <h14>Custom Fitted</h14>
                           </div><!-- /.title-container -->

                           <div class="text-container">
                            <h18 class="aligned">We use open source back-end systems. This accurately allows us to give your business the exact features and options you expect from your web development services; tweaking it to your taste and specifics.
                            </h18>
                           </div><!-- /.text-container -->

                       </div><!-- /.monitor-container -->
                            <div class="gear-container">
                                <div class="icon-container">
                                    <img src="/images/assets/steering.png"
                                         alt="The steering wheel">
                                </div><!-- /.icon-container -->

                                <div class="title-container">
                                    <h14> Autopilot</h14>
                                </div><!-- /.title-container -->
                                <div class="text-container">
                                    <h18 class="aligned">If you don’t feel like liaising with many heads to culminate the project, we do provide a full 360 project management service, taking your project from stages of conception through to delivery, setting milestones along the way.
                                    </h18>
                                </div><!-- /.text-container -->

                            </div><!-- /.gear-container -->

                                <div class="free-container">
                                    <div class="icon-container">
                                        <img src="/images/assets/search.png"
                                             alt="The search icon">
                                    </div><!-- /.icon-container -->

                                    <div class="title-container">
                                        <h14>Search Results</h14>
                                    </div><!-- /.title-container -->
                                    <div class="text-container">
                                        <h18 class="aligned">You don’t have to pay big money to be visible on the biggest search engines. It’s called Search Engine Optimisation. It’s legit and we’ll be happy to tell you more, just ask.</h18>
                                    </div><!-- /.text-container -->
                                </div><!-- /.free-container -->
                    </div><!-- /.who-container -->

                    <div class="memes-container">
                        <div class="opinion-picture">
                            <img src="/images/assets/train.png"
                                 alt="A picture of an underground train">
                        </div><!-- /.opinion-picture -->
                        <div class="opinion">
                            <h16><span style="color:#f0955f">"</span> Our applications have a focus on <span style="color:#f0955f;">transport "</span></h16>
                        </div><!-- /.opinion -->


                    </div><!-- /.memes-container -->

                    <div class="memes-container">
                        <div class="opinion-picture">
                            <img src="/images/assets/plane.png"
                                 alt="A picture of a passenger plane">
                        </div><!-- /.opinion-picture -->
                        <div class="opinion">
                            <h16><span style="color:#f0955f;">"</span> Our courses have a transport <span style="color:#f0955f;">focus "</span></h16>
                        </div><!-- /.opinion -->
                        
                    </div><!-- /.memes-container -->

                    <div class="quote-container">
                        <a href="/quotes"><button type="submit" class="btn btn-white">Get a Quote</button></a>
                    </div><!-- /.quote-container -->


                    <div class="jump-to-top">
                        <a href="#top">Back to top<i class="fa fa-angle-double-up fa-4x" aria-hidden="true"></i></a>
                    </div><!-- /.jump-to-top -->
        </div><!-- /.about-container -->

    <div class="green-container">

    </div><!-- /.green-container -->

    <div class="portfolio-container">
        <h7 id="portfolio"></h7>
        <div class="about-heading is--padded-b50">
            <h12>Po</h12><h13>rtfo</h13><h12>lio</h12>
        </div><!-- /.about-heading -->

            <div class="projects-container">

                <div class="top-portfolio">
                    <figure>
                        <img alt="Great Green Gooseberry website" srcset="/images/showcase/goose-large.png 900w,
                        /images/showcase/goose-medium.png 640w,
                        /images/showcase/goose-medium.png 420w">

                        <figcaption>
                            <h3>Great Green Gooseberry E-Commerce Eco Friendly Products</h3>
                            <p>This is a one stop shop e-commerce site that is concerned with our environment. There was a successful implementation of e-commerce receipts using third party vendors.</p>
                            <p><a href="https://greatgreengooseberry.club/">View Website</a></p>
                        </figcaption>
                    </figure>
                </div><!-- /.top-portfolio -->


                <div class="top-portfolio">
                    <figure>
                        <img alt="Gamestation website" srcset="/images/showcase/games-large.png 900w,
                        /images/showcase/games-medium.png 640w,
                        /images/showcase/games-medium.png 420w">

                        <figcaption>
                            <h3>Game Station E-Commerce (purchase game keys) </h3>
                            <p>This is a website that was built by Sehinde as a test e-commerce site in which you can buy video game keys, amend your profile and create inspiring gaming blog posts.</p>
                            <p><a href="https://games.ormrepo.co.uk">View Website</a></p>
                        </figcaption>
                    </figure>
                </div><!-- /.top-portfolio-->


                <div class="lower-portfolio">
                    <figure>
                        <img alt="Nina Naustdal Couture Fashion website" srcset="/images/showcase/couture-large.png 1280w,
                        /images/showcase/couture-medium.png 640w,
                        /images/showcase/couture-medium.png 420w">

                        <figcaption>
                            <h3>Nina Naustdal Couture Fashion Website</h3>
                            <p>A couture fashion website catering to high end design buyers. Karan’s work includes managing the project and creative copy provided for the website home/landing page, as well as the “About Nina” section and proof reading the entire website.</p>
                            <p><a href="http://www.nina-naustdal.com">View Website</a></p>
                        </figcaption>
                    </figure>
                </div><!-- /.lower-portfolio -->

                <div class="lower-portfolio">
                    <figure>
                        <img alt="Oliver Goldsmith Fashionable Sunglasses website" srcset="/images/showcase/goldsmith-large.png 1280w,
                        /images/showcase/goldsmith-medium.png 640w,
                        /images/showcase/goldsmith-medium.png 420w">

                        <figcaption>
                            <h3>Oliver Goldsmith Sunglasses Website</h3>
                            <p>Originators of fashion eye-wear in the 50’s, Oliver Goldsmith via DB gave Karan the opportunity to pen down creative copy for their “About” section and the entire website proof-reading.</p>
                            <p><a href="http://www.olivergoldsmith.com/">View Website</a></p>
                        </figcaption>
                    </figure>

                </div><!-- /.lower-portfolio -->


                <div class="lower-portfolio">
                    <figure>
                        <img alt="Led Zeppelin Tribute Concert Website" srcset="/images/showcase/zep-large.png 1280w,
                        /images/showcase/zep-medium.png 640w,
                        /images/showcase/zep-medium.png 420w">

                        <figcaption>
                            <h3>Led Zeppelin Tribute Concert Website</h3>
                            <p>A couple of members from Led Zeppelin performed as the lead act at a tribute to late Atlantic Records co-founder Ahmet Ertegun. Karan was awarded the task of managing the entire project and writing the entire copy for the website.</p>

                        </figcaption>
                    </figure>
                </div><!-- /.lower-portfolio -->

                <div class="lower-portfolio">
                    <figure>
                        <img alt="7 Digital Official Music Download Website" srcset="/images/showcase/digital-large.png 1280w,
                        /images/showcase/digital-medium.jpg 640w,
                        /images/showcase/digital-medium.jpg 420w">

                        <figcaption>
                            <h3>7 Digital Official Music Download Website</h3>
                            <p>One of the top official music download sites in the UK, Karan’s role was project manager and arranging the FAQ’s copy in the “Help” section of the website.</p>
                            <p><a href="https://www.7digital.com/">View Website</a></p>
                        </figcaption>
                    </figure>
                </div><!-- /.lower-portfolio -->

                <div class="lower-portfolio">
                    <figure>
                        <img alt="Gillian Mckeith Wellness and Weight Loss Club Website" srcset="/images/showcase/gillian-large.png 1280w,
                        /images/showcase/gillian-medium.png 640w,
                        /images/showcase/gillian-medium.png 420w">

                        <figcaption>
                            <h3>Gillian McKeith Wellness and Weight Loss Club Website</h3>
                            <p>A pioneering dietician from the United States, she wanted to make an entry into the UK market with a new and revamped website.</p>
                            <p><a href="http://gillianmckeith.com/">View Website</a></p>
                        </figcaption>
                    </figure>

                </div><!-- /.lower-portfolio -->




            </div><!-- /.projects-container -->


        <div class="jump-to-top">
            <a href="#top">Back to top<i class="fa fa-angle-double-up fa-4x" aria-hidden="true"></i></a>
        </div><!-- /.back-to-top -->
    </div><!-- /.portfolio-container -->

    <div class="grey-container">
        
    </div><!-- /.grey-container -->


    <div class="contact-container">
            <h7 id="contact"></h7>
                <div class="about-heading is--padded-b50">
                    <h12 class="is--beige">Co<h15 class="is--beige">nta</h15>ct Us</h12>
                </div><!-- /.about-heading -->

            <div class="contact-text">
                <h5 class="is--beige text-transform">Email: info@ormrepo.co.uk</h5>
                <h5 class="is--beige text-transform">Opening Hours: 9am - 5pm</h5>
                <h5 class="is--beige text-transform">Telephone: 07512 305773</h5>
            </div><!-- /.text-container -->

            <div class="jump-to-top">
                <a href="#top" style= "color: #f9f1dc;">Back to top<i class="fa fa-angle-double-up fa-4x" style= "color: #f9f1dc ;" aria-hidden="true"></i></a>
            </div><!-- /.jump-to-top -->
        </div><!-- /.contact-container -->

    @include('partials.footer')
</div><!-- /.homepage-container -->
@endsection

