@extends ('layouts.master')

@section('content')

<div class="homepage-container">


        <div class="proposal-container">
            <picture>
                <img srcset="/images/hero/myself-large.png 601w,
                    /images/hero/myself-small.png 600w"
                    alt="A picture of Sehinde taking a selfie on Westminster Bridge on a sunny day in February">
            </picture>

        </div><!-- /.proposal-container -->

        <div class="window-container">
            <div class="portrait-container">
                 <picture>
                <img srcset="/images/hero/my-picture-large.png 601w,
                    /images/hero/my-picture-small.png 600w"
                    alt="Sehinde is standing against a grey wall with a polkadot suit with a blue tie">
                 </picture>    
            </div><!-- /.proposal-container -->
            <div class="explain-container">
                <img srcset="/images/hero/profile-large.png 601w,
                    /images/hero/profile-small.png 600w"
                    alt="A profile explaining that problems bubble up in the supply chain and you can depend on us">
                 

                    <div class="button-container">
                        <a href="https://www.facebook.com/groups/985826211807341/?ref=bookmarks"><button type="submit" class="btn btn-large">Join The Diverse Coder Network</button></a>
                    </div><!-- /.button-container -->
            </div><!-- /.explain-container -->

        </div><!-- /.window-container -->


        <div class="hero-container">
            <h7 id="up"></h7>
                <div class="logo-header">
                    <h8>ORM</h8><h9><span class="underlined">R</span>EPO</h9>
                </div><!-- /.logo-header -->

                <div class="slogan-container">
                    <div class="what-container">
                        <h14 class="is--beige is--capitals">Logistics | Transport | Innovation</h14>
                    </div>
                    <div class="network-container">      
                        <h14 class="is--beige is--capitals">Part of the DiverseCoder Network</h14>
                    </div> 
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
                    <img srcset="/images/hero/desktop-large-one.png 601w,
                          /images/hero/desktop-small-one.png 600w"
                         alt="We build mind blowing apps to shore up your supply chain">
                </picture>
            </div><!-- /.slogan-image -->
        </div><!-- /.services-container -->


        <div class="our-container">
            <h7 id="who"></h7>
                <div class="our-heading">
                     <h20>Who</h20>   
                </div><!-- /.our-heading -->

                <div class="alert-container">
                        <div id="root">
                            <!-- Using the Alert component -->
                            <p class="fourthtext"><message body= "Our website uses cookies. By agreeing to access this site you are agreeing to their use."></message></p>
            
                        </div><!-- /#app -->
                </div><!-- /.alert-container -->


                <iframe width="560" height="315" src="https://www.youtube.com/embed/Xt9LBnXpSzQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                
        </div><!-- /.our-container -->

        <div class="services-container">
            <h7 id="services"></h7>
            <div class="services-image">
                <picture>
                    <img srcset="/images/hero/what-we-do-big.png 601w,
                          /images/hero/what-we-do-tall.png 600w"
                         alt="A picture collage containing someone with a thought bubble, a blockchain and a train at Watford Junction Station">
                </picture>
            </div><!-- /.slogan-image -->
        </div><!-- /.services-container -->


        <div class="window-container">
            <div class="guide-container">
                <img srcset="/images/hero/guide-large.png 601w,
                /images/hero/guide-small.png 600w"
                alt="Download My Free Blockchain Guide for Logistics">
                <div class="brown-button-container">
                        <a href="https://www.facebook.com/groups/985826211807341/?ref=bookmarks"><button type="submit" class="btn btn-brown">Download Now</button></a>
                </div><!-- /.brown-button-container -->
                
            </div><!-- /.guide-container -->
            <div class="red-container">
                    
                <img srcset="/images/hero/diversepane-large.png 601w,
                    /images/hero/diversepane-small.png 600w"
                    alt="The diverse coder emblem explaining how logistics and tech can save you money">

                    <div class="red-button-container">
                            <a href="https://www.youtube.com/channel/UCTZEUJh2cANK54ejYPvCEHQ"><button type="submit" class="btn btn-white">Watch Now</button></a>
                    </div><!-- /.button-container -->
                    
                    
            </div><!-- /.red-container -->

        </div><!-- /.window-container -->

    
    <div class="portfolio-container">
        <h7 id="portfolio"></h7>
        <div class="about-heading is--padded-b50 is--padded-t40">
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
                        /images/showcase/digital-medium.png 640w,
                        /images/showcase/digital-medium.png 420w">

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
            <a href="#top" style= "color: #000000;">Back to top<i class="fa fa-angle-double-up fa-4x" style= "color: #000000;" aria-hidden="true"></i></a>
        </div><!-- /.back-to-top -->
    </div><!-- /.portfolio-container -->

    <div class="feed-container">
            

        <ul class="juicer-feed" data-feed-id="thediversecoder" data-per="6"><h1 class="referral"><a href="https://www.juicer.io"></a></h1></ul>
        <div class="jump-to-top">
            <a href="#top" style= "color: #FFFFFF;">Back to top<i class="fa fa-angle-double-up fa-4x" style= "color: #FFFFFF;" aria-hidden="true"></i></a>
        </div><!-- /.jump-to-top -->
    </div><!-- /.feed-container -->

    <div class="contact-container">
        <h7 id="contact"></h7>
            <div class="about-heading is--padded-b50 is--padded-t40">
                <h12 class="is--beige">Co<h15 class="is--beige">nta</h15>ct Us</h12>
            </div><!-- /.about-heading -->

        <div class="contact-text">
            <h5 class="is--beige text-transform">Email: info@ormrepo.co.uk</h5>
            <h5 class="is--beige text-transform">Monday through to Friday</h5>
            <h5 class="is--beige text-transform">Opening Hours: 9am - 5pm</h5>
            <h5 class="is--beige text-transform">Telephone: 07512 305773</h5>
        </div><!-- /.text-container -->

        <div class="jump-to-top">
            <a href="#top" style= "color: #FFFFFF;">Back to top<i class="fa fa-angle-double-up fa-4x" style= "color: #FFFFFF;" aria-hidden="true"></i></a>
        </div><!-- /.jump-to-top -->
</div><!-- /.contact-container -->

</div><!-- /.homepage-container -->
@endsection

