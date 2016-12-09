<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('meta-title', "Ormrepo's Home Page")</title>
    <!-- Bootstrap Core CSS -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/app.css">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>

@include('partials.navigation')

    @yield('content')

        @include('partials.connect')

@include('partials.footer')

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script text="text/javascript" src="js/custom.js"></script>
<script src="js/modernizr-custom.js"></script>


<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/password.js"></script>
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

<!-- Analytics script -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77927666-1', 'auto');
    ga('send', 'pageview');



</script>

</body>

</html>