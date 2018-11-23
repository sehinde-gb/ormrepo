@extends ('layouts.master')

@section('meta-title', 'HomePage | London UK | Blockchain Infrastructure, Transport | Ormrepo ')

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
                         alt="We build the next generation of applications using blockchain infrastructure and traditional web applications with a focus on transport">
                </picture>
            </div><!-- /.slogan-image -->
        </div><!-- /.services-container -->


        <div class="our-container">
            <h7 id="about"></h7>
                <div class="our-heading">
                     <h20>Who</h20>   
                </div><!-- /.our-heading -->

                <iframe width="560" height="315" src="https://www.youtube.com/embed/Xt9LBnXpSzQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="services-container">
            <h7 id="services"></h7>
            <div class="services-image">
                <picture>
                    <img srcset="/images/hero/what-we-do-big.jpg 601w,
                          /images/hero/what-we-do-tall.jpg 600w"
                         alt="Transport A picture collage containing someone with a thought bubble, a blockchain and a train at Watford Junction Station">
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
                        <img src="/images/assets/track.png" class="reduce" alt="Transport A picture of a bent track">
                    </div><!-- /.opinion-container -->

                    <div class="opinion">
                        <h16>"My model Hornby 125 train set didn't stay on the track because it had power supply issues!"</span></h16>
                    </div><!-- /.opinion -->

                   
                </div><!-- /.memes-container -->

                <div class="memes-container">
                    <div class="opinion-picture">
                        <img src="/images/assets/siri.png" class="reduce" alt="Blockchain Infrastructure and a picture of an iphone">
                    </div><!-- /.opinion-container -->

                    <div class="opinion">

                        <h16> "Question: Hey Siri who is your girlfriend ? "</h16>
                    
                    </div><!-- /.opinion -->

                    <div class="opinion">

                        <h16> "Answer: I will leave the relations to the databases"</h16>
                    
                    </div><!-- /.opinion -->

                    
                </div><!-- /.memes-container -->

                    <div class="who-container">

                       <div class="monitor-container">
                          <div class="icon-container">
                              <img src="/images/assets/tailor.png"
                                   class="reduce" alt="Web Development Services and the tailor's pin">
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
                                    <img src="/images/assets/blockchain.png"
                                         alt="Blockchain Infrastructure and a picture of the blockchain">
                                </div><!-- /.icon-container -->

                                <div class="title-container">
                                    <h14> New Tech</h14>
                                </div><!-- /.title-container -->
                                <div class="text-container">
                                    <h18 class="aligned">We build the next generation of applications using blockchain infrastructure so that your apps have enhanced security, improved traceability & greater transparency resulting in reduced costs to you and your business.
                                    </h18>
                                </div><!-- /.text-container -->

                            </div><!-- /.gear-container -->

                                <div class="free-container">
                                    <div class="icon-container">
                                        <img src="/images/assets/online.png"
                                             alt="Training and a laptop that has a press play button this is an online training course">
                                    </div><!-- /.icon-container -->

                                    <div class="title-container">
                                        <h14>Online Courses</h14>
                                    </div><!-- /.title-container -->
                                    <div class="text-container">
                                        <h18 class="aligned">We deliver a suite of online and offline courses where we will cultivate your passion for understanding new technology. Within a holistic and humanistic way so that your light can shine brightly throughout your career.  </h18>
                                    </div><!-- /.text-container -->
                                </div><!-- /.free-container -->
                    </div><!-- /.who-container -->

                    <div class="memes-container">
                        <div class="opinion-picture">
                            <img src="/images/assets/training.png"
                                 alt="Blockchain Infrastructure and a picture of a classroom that is full of students">
                        </div><!-- /.opinion-picture -->
                        <div class="opinion">
                            <h16>"TechNation report states that there is a 50% shortage of technical skills"</h16>
                            
                        </div><!-- /.opinion -->

                        <div class="opinion">
                            <h16>"Our courses will help tackle this growing inequity"</h16>
                            
                        </div><!-- /.opinion -->



                    </div><!-- /.memes-container -->

                    <div class="memes-container">
                        <div class="opinion-picture">
                            <img src="/images/assets/plane.png"
                                 alt="Transport and a picture of a passenger plane">
                        </div><!-- /.opinion-picture -->
                        <div class="opinion">
                            <h16>"Question: How do you convert a closed centralised baggage system in to an open decentralised baggage system?"</h16>
                        </div><!-- /.opinion -->

                        <div class="opinion">
                            <h16>"Answer: A blockchain based baggage system with waypoints can help improve passenger trust in baggage systems."</h16>
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
                        <img alt="Web Development Services and the Great Green Gooseberry website" srcset="/images/showcase/goose-large.png 900w,
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
                        <img alt="Web Development Services and the Gamestation website" srcset="/images/showcase/games-large.png 900w,
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
                        <img alt="Web Development Services and the Nina Naustdal Couture Fashion website" srcset="/images/showcase/couture-large.png 1280w,
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
                        <img alt="Web Development Services and the Oliver Goldsmith Fashionable Sunglasses website" srcset="/images/showcase/goldsmith-large.png 1280w,
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
                        <img alt="Web Development Services and the Led Zeppelin Tribute Concert Website" srcset="/images/showcase/zep-large.png 1280w,
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
                        <img alt="Web Development Services and the 7 Digital Official Music Download Website" srcset="/images/showcase/digital-large.png 1280w,
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
                        <img alt="Web Development Services and the Gillian Mckeith Wellness and Weight Loss Club Website" srcset="/images/showcase/gillian-large.png 1280w,
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
                <h5 class="is--beige text-transform">Monday through to Friday</h5>
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

