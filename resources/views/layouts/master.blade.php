<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="@yield('meta_description', 'We build the next generation of applications and human web developers using blockchain infrastructure and traditional web service development with a focus on transport.')">
    <meta name="keywords" content="Web Development Service Company,Transport,Blockchain Infrastructure,Web Development For Small Business,Web Design and Development Services,Web Service Development">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <meta name="google-site-verification" content="eC0Ug40OeDQDrQrfbHIoqp7U-mHbHclTjiuAsMvv1t8" />
    <title>Blockchain Infrastructure | Transport | @yield('meta-title', 'London UK | Ormrepo | Blockchain Infrastructure, Transport')</title>
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


    <!-- Start of Async Drift Code -->
    <script>
        !function() {
            var t;
            if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
                t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                t.factory = function(e) {
                    return function() {
                        var n;
                        return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
            }), t.load = function(t) {
                var e, n, o, i;
                e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
                    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
            });
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('nkuwzpnu23tp');
    </script>
    <!-- End of Async Drift Code -->


</head>
<body>


@include('partials.status')



@yield('content')


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



</body>


</html>


