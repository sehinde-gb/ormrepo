@extends('layouts.app')

@section('meta-title', 'Thank you')

@section('content')

    <!-- Page Content -->
    <a name="introduction"></a>
    <div class="hero">
        <div class="first-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-slider">
                        <div class="courtesy-container">
                            <div class="receipt-container">
                                <h1 class="is--centered is--padded-bottom is--padded-top-20">Thank you for purchasing our web service</h1>
                                <p class="is--padded-bottom">Your receipt has been sent to your email address</p>
                                <p class="is--padded-bottom">Help us improve our checkout experience by completing a short survey</p>
                                <script>(function(t,e,c,n){var o,s,i;t.SMCX=t.SMCX||[],e.getElementById(n)||(o=e.getElementsByTagName(c),s=o[o.length-1],i=e.createElement(c),i.type="text/javascript",i.async=!0,i.id=n,i.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/FXrulligfmAiBW3Pj9CbL9MDcGaHc0K7IfvG_2BWGBL30fC0CDOKAg7hY_2FmtHeGxkG.js"].join(""),s.parentNode.insertBefore(i,s))})(window,document,"script","smcx-sdk");</script>
                            </div>
                            <!-- /.receipt-container -->










                        </div><!-- /.courtesy-container -->
                        <div class="collection">
                            <div class="newsletter-container">
                                <div class="subscribe">
                                    <h1 class="news--heading">Sign Up To Receive Our Updates</h1>
                                    <h4 class="lorem--text is--lorem-padding">You consent to receiving bi-annual email updates we wont burden you with spam.</h4>
                                    <div class="form-group">
                                        <!-- Begin MailChimp Signup Form -->
                                        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                                        <style type="text/css">
                                            #mc_embed_signup{background:#003434; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
                                            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                                               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                                        </style>
                                        <div id="mc_embed_signup">
                                            <form action="//twitter.us9.list-manage.com/subscribe/post?u=1e496727dce7860147071555a&amp;id=1c16b906b8" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll">

                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1e496727dce7860147071555a_1c16b906b8" tabindex="-1" value=""></div>
                                                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                                </div>
                                            </form>
                                        </div>

                                        <!--End mc_embed_signup-->
                                    </div><!-- /.form-group -->

                                </div><!-- /.subscribe -->
                            </div><!-- /.newsletter-container -->

                        </div><!-- /.collection -->
                    </div><!-- .intro-slider -->
                </div>
            </div>
        </div>

    </div>






   @endsection