@extends ('layouts.app')

@section('meta-title', 'Our Portfolio')

@section('content')

    <div class="breadcrumb-container">
        {!! Breadcrumbs::render('portfolio') !!}
    </div><!-- /.breadcrumb-container -->
    <a  name="services"></a>
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="is--black">Great Green Gooseberry<br>E-Commerce Eco Friendly Products</h2>
                    <p class="section--body is--padding-bottom">This is a one stop shop e-commerce site that is concerned with protecting our environment through carbon offsets and LED lessons. This application was developed using Wordpress and there was a successful implementation of e-commerce receipts using third party vendors.</p>
                    <ul class="project-links">
                        <li><a href="https://greatgreengooseberry.club/" class="is--black">Link</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="images/showcase/macgoose.png" alt="Ipad containing Great Green Gooseberry artefacts.">
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
                    <h2 class="is--black">Casa Rental<br>Property website</h2>
                    <p class="section--body is--padding-bottom">This is a property website that was built as a test so that people from Ruislip can search for properties in their local area to buy or sell.</p>
                    <ul class="project-links">
                        <li><a href="https://casarental.ormrepo.co.uk/" class="is--black">Link</a></li>
                    </ul>
                </div><!-- col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 -->
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="images/showcase/maccasa.jpg" alt="Ipad containing home rental screen.">
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
                    <h2 class="is--black">El Coche<br>Car Technology Blog</h2>
                    <p class="section--body is--padding-bottom">We are a car enthusiast blog and we will cover the latest technological news in the motor industry</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="images/showcase/elcoche.png" alt="Ipad containing car blog app screen.">
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
                    <h2 class="is--black">The GamesStation<br>Electronic Commerce</h2>
                    <p class="section--body is--padding-bottom">This is a website that was built as a test e-commerce site in which you can buy video game keys, amend your profile and create inspiring blog posts.</p>
                    <ul class="project-links">
                        <li><a href="https://games.ormrepo.co.uk/" class="is--black">Link</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="images/showcase/macgame.jpg" alt="Mac screen containing gamesstation home screen.">
                </div><!-- /.col-lg-5 col-sm-pull-6  col-sm- -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.content-section-b -->

@endsection

