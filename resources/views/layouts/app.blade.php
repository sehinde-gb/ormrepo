<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="@yield('meta_description', 'We build the next generation of applications and human web developers using blockchain infrastructure and traditional web service development with a focus on transport.')">
    <meta name="keywords" content="Web Development Service Company,Transport,Blockchain Infrastructure,Web Development For Small Business,Web Design and Development Services,Web Service Development">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <title>Ormrepo | @yield('meta-title', 'Ormrepo - Blockchain Infrastructure & Training Company')</title>
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
    <link rel="stylesheet" href="/css/slip.css">
    <link rel="stylesheet" href="/dist/css/slippry.css">

</head>
<body>

    @include('partials.navbar')

    @include('partials.status')



    @yield('content')


    @include('partials.footer')

</body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=230976277311028";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="https://d3saea0ftg7bjt.cloudfront.net/embed/js/embed.min.js"></script>
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


    <script id="dsq-count-scr" src="//games-ormrepo-co-uk.disqus.com/count.js" async></script>
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




</html>

