<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="@yield('meta_description', 'The ormblog.')">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <title>Ormrepo | @yield('meta-title', 'The Ormblog')</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="/css/bulma.css" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="alternate" type="application/rss+xml" title="Ormblog" href="{{ url('feed') }}" />
</head>
<body>

    @include('partials.navigation')

    @include('partials.status')


    @yield('content')


    @include('partials.footer')



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            width: 150,
            focus: true,                  // set focus to editable area after initializing summernote
            insertParagraph: true,
            placeholder: 'Create your Article ...',
            callbacks: {
                onKeydown: function (e) {
                    var t = e.currentTarget.innerText;
                    if (t.trim().length >= 10000) {
                        //delete key
                        if (e.keyCode != 8)
                            e.preventDefault();
                    }
                },
                onKeyup: function (e) {
                    var t = e.currentTarget.innerText;
                    $('#maxContentPost').text(10000 - t.trim().length);
                },
                onPaste: function (e) {
                    var t = e.currentTarget.innerText;
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    var all = t + bufferText;
                    document.execCommand('insertText', false, all.trim().substring(0, 10000));
                    $('#maxContentPost').text(10000 - t.length);
                }
            }
        });
    });
    $(document).ready(function(){
        $("img").addClass("img-responsive");
    });
</script>

<script type="application/javascript" src="/js/bootstrap.js"></script>
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

    <script>
        $(function() {
            $("a[href=#menuExpand]").click(function(e) {
                $(".menu").toggleClass("menuOpen");
                e.preventDefault();
            });
        });
    </script>


</body>

</html>

