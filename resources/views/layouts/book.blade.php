<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="@yield('meta_description', 'The ormblog.')">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <title>Ormrepo | @yield('meta-title', 'The Ormblog')</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/css/bulma.css" type="text/css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="/css/demo.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="alternate" type="application/rss+xml" title="Ormblog" href="{{ url('feed') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Start of 10 to 8 code -->
    <script src="https://d3saea0ftg7bjt.cloudfront.net/embed/js/embed.min.js"></script>
    <div id="TTE-f977d4d2-4d78-4d20-8d7c-b275ba441317"></div>
    <script>
        window.TTE.init({
            targetDivId: "TTE-f977d4d2-4d78-4d20-8d7c-b275ba441317",
            uuid: "f977d4d2-4d78-4d20-8d7c-b275ba441317"
        });
    </script>




</head>
<body>


@include('partials.status')

@yield('content')





@yield('scripts')





</body>

</html>


