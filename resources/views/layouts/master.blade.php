<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="@yield('meta_description', 'Learn and Commission new Technology in every day Transportation and Logistics.')">
    <meta name="keywords" content="Logistics & Transport">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <meta name="google-site-verification" content="eC0Ug40OeDQDrQrfbHIoqp7U-mHbHclTjiuAsMvv1t8" />
    <title>@yield('meta-title', ' Logistics | Transport | London UK')</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/css/bulma.css" type="text/css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="/css/demo.css" type="text/css">
    <link rel="stylesheet" href="/dist/css/sweetalert.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="alternate" type="application/rss+xml" title="Ormblog" href="{{ url('feed') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/slip.css">
    <link rel="stylesheet" href="/dist/css/slippry.css">
    <!-- Calendly badge widget begin -->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <link rel="preload (or prerender)" href="//disqus.com">
    <link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">Calendly.initBadgeWidget({url: 'https://calendly.com/sehinde', text: 'Schedule time with me', color: '#8f5c3a', branding: true});</script>
<!-- Calendly badge widget end -->
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '317385228941834');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=317385228941834&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>


@include('partials.status')

@include('partials.navigation')

@yield('content')

@include('partials.footer')

<script src="https://assets.juicer.io/embed.js" type="text/javascript"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=230976277311028";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
    var simplemde = new SimpleMDE({ element: document.getElementById("summernote") });
</script>



<script type="application/javascript" src="/js/bootstrap.js"></script>

<script type="application/javascript" src="/dist/js/sweetalert.min.js"></script>
@include('flash')


{{-- Show password--}}
<script src="/js/password.js"></script>
<script>
    $(function() {
        $('#password').password().on('show.bs.password', function(e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function(e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function() {
            $('#password').password('toggle');
        });
    });
</script>
<script>
    $(function() {
        $('#password_confirmation').password().on('show.bs.password', function(e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function(e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function() {
            $('#password_confirmation').password('toggle');
        });
    });
</script>
{{--Mobile menu--}}
<script>
    $(function() {
        $("a[href=#menuExpand]").click(function(e) {
            $(".menu").toggleClass("menuOpen");
            e.preventDefault();
        });
    });
</script>

<script>
    var selectIds = $('#panel1,#panel2,#panel3');
    $(function ($) {
        selectIds.on('show.bs.collapse hidden.bs.collapse', function () {
            $(this).prev().find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
        })
    });
</script>
<script src="/dist/js/jquery.gridder.min.js"></script>
<script>
    $(function() {

        // Call Gridder
        $('.gridder').gridderExpander({
            scroll: true,
            scrollOffset: 30,
            scrollTo: "panel",                  // panel or listitem
            animationSpeed: 400,
            animationEasing: "easeInOutExpo",
            showNav: true,                      // Show Navigation
            nextText: "Next",                   // Next button text
            prevText: "Previous",               // Previous button text
            closeText: "Close",                 // Close button text
            onStart: function(){
                //Gridder Inititialized
            },
            onContent: function(){
                //Gridder Content Loaded
            },
            onClosed: function(){
                //Gridder Closed
            }
        });

    });
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
    $('select').select2();
</script>



@yield('slip')

@yield('scripts')



<script id="dsq-count-scr" src="//www-ormrepo-co-uk.disqus.com/count.js" async></script>
<script>
    // Google Analytics
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93137682-1', 'auto');
    ga('send', 'pageview');

</script>

<script type="application/javascript" src="{{ mix('/js/app.js') }}" data-turbolinks-suppress-warning></script>

{{-- Mailchimp signalling ebook script 
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"3c9ca0fce5f540adb6eefe51a","lid":"5fafe83b2c","uniqueMethods":true}) })</script>
--}}

</body>


</html>


