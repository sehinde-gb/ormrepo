@extends('layouts.app')

@section('meta-title', 'Thank you')

@section('content')

    <div class="breadcrumb-container">
        {!! Breadcrumbs::render('checkout') !!}
    </div><!-- /.breadcrumb-container -->

        <!-- Page Content -->
        <a name="introduction"></a>
           <div class="thanks-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-slider">
                            <div class="courtesy-container">
                                    <h2 class="is--padded-bottom is--padded-top-20 is--black">Thank you for purchasing our web service</h2>
                                    <h4 class="is--padded-bottom">Your receipt has been sent to your email address</h4>
                                    <h4 class="is--padded-bottom">Help us improve our checkout experience by completing a short survey</h4>
                                    <script>(function(t,e,c,n){var o,s,i;t.SMCX=t.SMCX||[],e.getElementById(n)||(o=e.getElementsByTagName(c),s=o[o.length-1],i=e.createElement(c),i.type="text/javascript",i.async=!0,i.id=n,i.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/FXrulligfmAiBW3Pj9CbL9MDcGaHc0K7IfvG_2BWGBL30fC0CDOKAg7hY_2FmtHeGxkG.js"].join(""),s.parentNode.insertBefore(i,s))})(window,document,"script","smcx-sdk");</script>

                            </div><!-- /.courtesy-container -->

                        </div><!-- .intro-slider -->
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->

        </div><!-- /.thanks-container -->


@endsection