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

            <div class="read-container">
                <a href="#slogan"><button type="submit" class="btn btn-secondary">Read More</button></a>
            </div><!-- /.read-container -->

            <div class="jump-to-about">
                <a href="#slogan"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div><!-- /.back-to-top -->

        </div><!-- /.hero-container -->


        <div class="slogan-container">
            <h7 id="slogan"></h7>
            <div class="slogan-image">
                <picture>
                    <img srcset="/images/hero/desktop-big.jpg 601w,
                          /images/hero/desktop-tall.jpg 600w"
                         alt="We provide full circle, web development services & tailored virtual craftsmanship, to empower you with the right tools and systems that help cater for your customer needs.">
                </picture>
            </div><!-- /.slogan-image -->
        </div><!-- /.slogan-container -->

        <div class="about-container">
            <h7 id="about"></h7>
                <div class="about-heading">
                    <h12>Ab</h12><h13>out</h13><h12> Us</h12>
                </div><!-- /.about-heading -->

                <div class="memes-container">
                    <div class="opinion-picture">
                        <img src="/images/assets/task.png" class="reduce" alt="Task accomplished picture">
                    </div><!-- /.opinion-container -->

                    <div class="opinion">
                        <h16><span style="color:#F0955F">"</span> We take pride in our candid<span style="color:#F0955F"> replies "</span></h16>
                    </div><!-- /.opinion -->

                    <div class="opinion">
                        <h16><span style="color:#F0955F">"</span> We have a no nonsense approach to getting things <span style="color:#F0955F"> done "</span></h16>
                    </div><!-- /.opinion -->
                </div><!-- /.memes-container -->

                <div class="memes-container">
                    <div class="opinion-picture">
                        <img src="/images/assets/diversity.png" class="reduce" alt="Diversity is in our DNA">
                    </div><!-- /.opinion-container -->

                    <div class="opinion">

                        <h16><span style="color:#F0955F">"</span> We take diversity very seriously, that’s why it is hardwired in to our <span style="color:#F0955F"> DNA "</span></h16>
                    </div><!-- /.opinion -->

                    <div class="opinion">
                        <h16><span style="color:#F0955F">"</span> We offer one on one compassionate and helpful advice that is <span style="color:#F0955F"> dependable "</span></h16>
                    </div><!-- /.opinion -->
                </div><!-- /.memes-container -->

                    <div class="who-container">

                       <div class="monitor-container">
                          <div class="icon-container">
                              <img src="/images/assets/tailor.png"
                                   class="reduce" alt="The tailor's pin">
                          </div><!-- /.icon-container -->

                           <div class="title-container">
                                <h14>Tailor Made</h14>
                           </div><!-- /.title-container -->

                           <div class="text-container">
                            <p class="aligned">If you want tailor made features and options for your website. We use open source back-end systems and we can tweak our services to your taste and specifics.
                            </p>
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
                                    <p class="aligned">If you don’t feel like liaising with many heads to culminate the project, we do provide a full <span>360*</span> project management service, taking your project from stages of conception through to delivery, setting milestones along the way.
                                    </p>
                                </div><!-- /.text-container -->

                            </div><!-- /.gear-container -->

                                <div class="free-container">
                                    <div class="icon-container">
                                        <img src="/images/assets/search.png"
                                             alt="The search icon">
                                    </div><!-- /.icon-container -->

                                    <div class="title-container">
                                        <h14>Higher Search Results</h14>
                                    </div><!-- /.title-container -->
                                    <div class="text-container">
                                        <p class="aligned">You don’t have to pay big money to be visible on the biggest search engines. It’s called Search Engine Optimisation. It’s legit and we’ll be happy to tell you more, just ask.</p>
                                    </div><!-- /.text-container -->
                                </div><!-- /.free-container -->
                    </div><!-- /.who-container -->

                    <div class="memes-container">
                        <div class="opinion-picture">
                            <img src="/images/assets/understanding.png"
                                 alt="Our understanding icon">
                        </div><!-- /.opinion-picture -->
                        <div class="opinion">
                            <h16><span style="color:#F0955F">"</span> Our advice is broken down in to easily digestible chunks to improve <span style="color:#F0955F">understanding "</span></h16>
                        </div><!-- /.opinion -->


                    </div><!-- /.memes-container -->

                    <div class="memes-container">
                        <div class="opinion-picture">
                            <img src="/images/assets/accessibility.png"
                                 alt="Our accessibility icon">
                        </div><!-- /.opinion-picture -->
                        <div class="opinion">
                            <h16><span style="color:#F0955F">"</span> Our websites are tailored to be inclusive and accessible from <span style="color:#F0955F">inception "</span></h16>
                        </div><!-- /.opinion -->
                        <div class="opinion">
                            <h16><span style="color:#F0955F">"</span> We pride ourselves on offering localised customer  <span style="color:#F0955F">support "</span></h16>
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
                            <h3>The Gamesstation E-Commerce Purchase Game Keys</h3>
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
                            <h3>Gillian Mckeith Wellness and Weight Loss Club Website</h3>
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

            <div class="jump-to-top">
                <a href="#top" style= "color: #f9f1dc;">Back to top<i class="fa fa-angle-double-up fa-4x" style= "color: #f9f1dc ;" aria-hidden="true"></i></a>
            </div><!-- /.jump-to-top -->
        </div><!-- /.contact-container -->

    @include('partials.footer')
</div><!-- /.homepage-container -->
@endsection

