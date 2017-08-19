@extends ('layouts.test')

@section('meta-title', 'Home')

@section('content')


<div class="homepage-container">
    <div class="first-container">
            <div class="logo-heading">
                <h8>ORM</h8><h9><span class="underlined">R</span>EPO</h9>
            </div><!-- /.logo-heading -->

        <div class="statement">
            <p class="myriad">We will empower you for all your customers needs</p>
        </div><!-- /.statement -->

        <div class="tertiary">
            <button type="submit" class="btn btn-tertiary">Read More</button>
        </div><!-- /.tertiary -->

        <div class="jump-to-about">
            <a href="#about"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div><!-- /.back-to-top -->

    </div><!-- /.first-container -->

    <div class="second-container">
        <h7 id="about"></h7>
        @include('partials.nav')

        <div class="about-heading">
            <h12>Ab</h12><h13>out</h13><h12> Us</h12>

        </div><!-- /.about-heading -->

        <div class="tertiary">
            <button type="submit" class="btn btn-white">Book Now</button>
        </div><!-- /.tertiary -->

        <div class="who-container">
           <div class="monitor-container">
               <img src="/images/assets/monitor.png"
                       alt="The monitor">
               <div class="title-container">
                    <h14>Responsive</h14>
               </div><!-- /.title-container -->

               <div class="para-container">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
               </div><!-- /.para-container -->
           </div><!-- /.monitor-container -->
            <div class="gear-container">
                <img src="/images/assets/gear.png"
                     alt="The gear">
                <div class="title-container">
                    <h14>Minimalist</h14>
                </div><!-- /.title-container -->
                <div class="para-container">
                    <p>Lorem ipsum dolor sit amet, <span>consectetur adipiscing elit,</span> sed do eiusmod tempor incididunt </p>
                </div><!-- /.para-container -->

            </div><!-- /.gear-container -->

            <div class="free-container">
                <img src="/images/assets/download.png"
                     alt="The download">
                <div class="title-container">
                    <h14>Freebies</h14>
                </div><!-- /.title-container -->
                <div class="para-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                </div><!-- /.para-container -->
            </div><!-- /.free-container -->
        </div><!-- /.who-container -->
    </div><!-- /.second-container -->

    <div class="third-container">

    </div><!-- /.third-container -->

    <div class="fourth-container">

        <div class="about-heading is--padded-bt50">
            <h12>Po</h12><h13>rtfo</h13><h12>lio</h12>

        </div><!-- /.about-heading -->

        <div class="portfolio-container">
            <div class="column-1">

            </div><!-- /.column-1 -->

            <div class="column-2">

            </div><!-- /.column-2 -->

            <div class="column-3">

            </div><!-- /.column-3 -->

            <div class="column-4">

            </div><!-- /.column-4 -->

            <div class="column-5">

            </div><!-- /.column-5 -->

            <div class="column-6">

            </div><!-- /.column-6 -->


        </div><!-- /.portfolio-container -->

        <div class="tertiary">
            <button type="submit" class="btn btn-off-white">Read More</button>
        </div><!-- /.tertiary -->
    </div><!-- /.fourth-container -->
<div class="fifth-container">

</div><!-- /.fifth-container -->

<div class="sixth-container">

    <div class="about-heading is--padded-bt50">
        <h12 class="is--beige">Co<h15 class="is--beige">nta</h15>ct</h12>

    </div><!-- /.about-heading -->

    <div class="message-container">
        {!! Form::open(array('route' => 'home_store')) !!}

        @include('partials.errors')


            <div class="named-container">
                <div class="test">
                    {!! Form::label('Your Name', 'Your Name:', ['class' => 'control']) !!}
                    {!! Form::text('name', null, ['class' => 'form', 'placeholder' => 'Name']) !!}
                </div><!-- /.test -->

                <div class="test">
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
                </div>
                <!-- /.mail-container -->
            </div>
            <!-- /.complete-container -->


            <div class="tertiary">
                {!! Form::submit('Send', array('class'=>'btn btn-tertiary')) !!}
            </div><!-- /.button-container -->



        {!! Form::close() !!}

    </div><!-- /.message-container -->
</div><!-- /.sixth-container -->

@include('partials.footer')
</div><!-- /.homepage-container -->
@endsection

