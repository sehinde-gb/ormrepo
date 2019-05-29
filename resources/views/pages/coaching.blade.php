@extends ('layouts.master')

@section('meta-title', 'London UK | Logistics |  Transport  | One To One Coaching ')

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('coaching') !!}
</div><!-- /.breadcrumb-container -->

<div class="central-container">
    <div class="greetings-container">
        <picture>
            <img srcset="/images/hero/cowelcome-large.png 601w,
                /images/hero/cowelcome-small.png 600w"
                alt="A description of what can go wrong when you have a cascade in your supply chain">
        </picture> 
    </div><!-- /.greetings-container -->

    <div class="sofa-container">
        <picture>
            <img srcset="/images/hero/sofasogood-large.png 601w,
                /images/hero/sofasogood-small.png 600w"
                alt="A picture of Sehinde sitting on a grey sofa with a yellow background">
        </picture>
    </div><!-- /.sofa-container -->

</div><!-- /.coaching-container -->

<div class="test-container">
    <div class="colleague-container">
        <picture>
            <img srcset="/images/hero/markhorne-large.png 601w,
                /images/hero/markhorne-larger.png 600w"
                alt="A picture of Mark Horne and his testimonial">
        </picture> 
    </div>

    <div class="writing-container">
        <p class="is--white">"He has demonstrated  an ability to troubleshoot complex issues effectively with a sense of urgency."</p>
        <p class="is--white">"He thinks outside of the box and he is very articulate."</p>
        <p class="is--white">"He explains difficult concepts very simply."</p>
        <p class="is--white">"I can always count on him to deliver desirable results presented to customers in a diplomatic manner."</p>

        <h4 class="is--white">Mark Horne - Infrastructure Engineer (@markhorne15)</h4>
        
    </div>


</div>

<div class="central-container">
    <div class="defense-container">
        <picture>
            <img srcset="/images/hero/arch-large.png 601w,
                /images/hero/arch-small.png 600w"
                alt="A picture of Sehinde standing underneath an arch at La Defense Paris">
        </picture> 
    </div>

    <div class="detext-container">
        <picture>
            <img srcset="/images/hero/defence-large.png 601w,
                /images/hero/defence-small.png 600w"
                alt="A description of how we feel like we are in a pressure cooker and how to counter it">
        </picture> 
    </div>

</div>


<div class="central-container">
    <div class="defense-container">
        <picture>
            <img srcset="/images/hero/frustrations-large.png 601w,
                /images/hero/frustrations-small.png 600w"
                alt="A description of the fruststrations that surround customer dissatisfaction">
        </picture> 
    </div>

    <div class="detext-container">
        <picture>
            <img srcset="/images/hero/woodside-large.png 601w,
                /images/hero/woodside-small.png 600w"
                alt="A picture of Sehinde standing in Woodside Industrial Park in Dunstable">
        </picture> 
    </div>

</div>

<div class="test-container">
    <div class="colleague-container">
        <picture>
            <img srcset="/images/hero/boxescompany-large.png 601w,
                /images/hero/boxescompany-small.png 600w"
                alt="A picture of a fork lift truck driver within a warehouse carrying goods">
        </picture> 
    </div>

    <div class="writing-container">
        <p class="is--white">"We are not sure about the price."</p>
        <p class="is--white">"I'm okay with the way things work right now."</p>
        <p class="is--white">"I don't want to change the way we've been doing things for 15 years. Too much can go wrong.""</p>
        <p class="is--white">"I told my brother's friend's wife I'd use her company for my next project."</p>
        <p class="is--white">It's too much for me to take on right now; I'm too busy; Call me again in 6 months."</p>

        
        
    </div>


</div>


<div class="central-container">
    <div class="greetings-container">
        <picture>
            <img srcset="/images/hero/metropolitan-large.png 601w,
                /images/hero/metropolitan-small.png 600w"
                alt="A picture of Sehinde within a North East Suburb in Paris">
        </picture> 
    </div><!-- /.greetings-container -->

    <div class="sofa-container">
        <picture>
            <img srcset="/images/hero/wakeup-large.png 601w,
                /images/hero/wakeup-small.png 600w"
                alt="A description of all the problems that occur if you dont decentralise your supply chain">
        </picture> 

        <div class="button-container">
            <a href="https://calendly.com/sehinde/30min"><button type="submit" class="btn btn-large">One To One Coaching Is Open</button></a>
        </div><!-- /.button-container -->
    </div><!-- /.sofa-container -->

</div><!-- /.coaching-container -->


<div class="central-container">
   

    <div class="sofa-container">
        <picture>
            <img srcset="/images/hero/final-large.png 601w,
                /images/hero/final-small.png 600w"
                alt="A description of all the services we offer our clients">
        </picture> 

        <div class="button-container">
            <a href="https://calendly.com/sehinde/30min"><button type="submit" class="btn btn-large">One To One Coaching Is Open</button></a>
        </div><!-- /.button-container -->
    </div><!-- /.sofa-container -->

    <div class="greetings-container">
        <picture>
            <img srcset="/images/hero/parisstreet-large.png 601w,
                /images/hero/parisstreet-small.png 600w"
                alt="A picture of Sehinde standing in a street near Gare De Lyon in Paris">
        </picture> 
    </div><!-- /.greetings-container -->

</div><!-- /.coaching-container -->

<div class="feed-container">
            

    <ul class="juicer-feed" data-feed-id="thediversecoder" data-per="6"><h1 class="referral"><a href="https://www.juicer.io"></a></h1></ul>
    <div class="jump-to-top">
        <a href="#top" style= "color: #FFFFFF;">Back to top<i class="fa fa-angle-double-up fa-4x" style= "color: #FFFFFF;" aria-hidden="true"></i></a>
    </div><!-- /.jump-to-top -->
</div><!-- /.feed-container -->

@endsection