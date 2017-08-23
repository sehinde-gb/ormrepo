@extends('layouts.app')

@section('meta-title', $charge->name)

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('admin.charges.show', $charge) !!}
</div><!-- /.breadcrumb-container -->

    <div class="product-container">
        <div class="carousel-container">
            <div class="container">
                <!-- FAKE AJAX CONTENT -->
                <div class="row">
                    <div class="col-sm-6">
                        <div id="carousel-1246" class="carousel slide">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-1246" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-1246" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="/images/charges/{{ $charge->sku }}.png"  class="img-responsive"/>
                                    <div class="carousel-caption">
                                        Starter Package
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/600x600" class="img-responsive" />
                                    <div class="carousel-caption">
                                        Item 1
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-1246" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-1246" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-6 is--padded-top-20">
                        <p class="is--black-grey">{!! $charge->description !!}</p>
                    </div>
                </div>
            </div><!-- /.container -->
        </div><!-- /.carousel-container -->


            <div class="charge-container">
                <div class="detail">
                    <h1 class="is--black-grey">{{ $charge->name }}</h1>
                    <hr class="is--black-grey"/>
                    <p class="is--black-grey">£{{ $charge->price }} GBP</p>

                    <form id="checkout-form" action="/checkout" method="POST">
                        {!! Form::hidden('charge_id', $charge->id) !!}
                        <input type="hidden" name="stripeToken" id="stripeToken">
                        <input type="hidden" name="stripeEmail" id="stripeEmail">


                        <script src="https://checkout.stripe.com/checkout.js"></script>

                        <button id="customButton" class="btn-primary">Buy</button>



                        <script>
                            var key = "{{ getenv('STRIPE_KEY') }}"
                            var handler = StripeCheckout.configure({
                                key: key,
                                image: 'https://s3.amazonaws.com/stripe-uploads/acct_15WqPhKxil0n0VnYmerchant-icon-1489237642452-Ormrepo%20receipt.png',
                                locale: 'auto',
                                token: function(token) {
                                    // You can access the token ID with `token.id`.
                                    // Get the token ID to your server-side code for use.
                                    document.querySelector('#stripeToken').value = token.id;
                                    document.querySelector('#stripeEmail').value = token.email;



                                    document.querySelector('#checkout-form').submit();
                                }

                            });



                            document.getElementById('customButton').addEventListener('click', function(e) {

                                var amount = "{{ $charge->price * 100 }}";
                                var description = "{{ $charge->description }}";

                                // Open Checkout with further options:
                                handler.open({
                                    name: 'Ormrepo',
                                    description: description,
                                    zipCode: true,
                                    currency: 'gbp',
                                    amount: amount

                                });
                                e.preventDefault();
                            });

                            // Close Checkout on page navigation:
                            window.addEventListener('popstate', function() {
                                handler.close();
                            });
                        </script>
                    </form>

                    <div class="featured-list">
                        <ul class="list is--padded-top-20">
                            <li class="is--black-grey"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                            Website content writing</li>
                            <li class="is--black-grey"><i class="fa fa-plus-circle" aria-hidden="true"></i> Online Booking</li>
                            <li class="is--black-grey"><i class="fa fa-plus-circle" aria-hidden="true"></i> E-Commerce</li>
                            <li class="is--black-grey"><i class="fa fa-plus-circle" aria-hidden="true"></i> Digital Marketing Campaigns</li>
                            <li class="is--black-grey"><i class="fa fa-plus-circle" aria-hidden="true"></i> Live Chat Features</li>
                        </ul>
                    </div><!-- /.featured-list -->

                    <div class="apple-pay">
                        <style>
                            #apple-pay-button {
                                width: 280px;
                                height: 64px;
                                display: inline-block;
                                box-sizing: border-box;
                                background-image: url(/images/apple/ApplePayBTN_32pt__black_logo_@2x.png);
                                background-size: 100%;
                                background-repeat: no-repeat;
                            }
                        </style>

                        <button id="apple-pay-button"></button>

                        <p style="display:none;" id="notgot" class="is--black-grey is--centered is--without">Sorry, ApplePay is not available with this browser</p>
                        <p style="display:none" id="success">Test transaction completed, thanks. <a href="https://games.ormrepo.co.uk/admin/products">reset</a></p>
                    </div><!-- /.apple-pay -->

                    <div id="got" class="notification">
                        <p id="got" class="is--black-grey">Purchase with Apple Pay simply by using Touch ID on your iPhone.</p>

                    </div><!-- /.notification -->

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1"><i class="glyphicon glyphicon-minus"></i>Type of Website</a>
                                </h4>

                            </div>
                            <div id="panel1" class="panel-collapse collapse in">
                                <div class="panel-body">{!! $charge->type !!}</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2"><i class="glyphicon glyphicon-plus"></i>SEO</a>
                                </h4>

                            </div>
                            <div id="panel2" class="panel-collapse collapse">
                                <div class="panel-body">{!!  $charge->seo !!}</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3"><i class="glyphicon glyphicon-plus"></i>Features</a>
                                </h4>

                            </div>
                            <div id="panel3" class="panel-collapse collapse">
                                <div class="panel-body">{!!  $charge->features !!}</div>
                            </div>
                        </div>
                    </div><!-- /.panel-group -->
                </div><!-- /.detail -->
            </div><!-- /.charge-container -->
    </div><!--.product-container -->

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    {!! Form::open(array('url' => '/checkout/charges/')) !!}
    {!! Form::hidden('charge_id', $charge->id) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    {!! Form::close() !!}

    <script>
        Stripe.setPublishableKey("<?php echo env('STRIPE_KEY') ?>");

        Stripe.applePay.checkAvailability(function(available) {
            if (available) {
                document.getElementById('apple-pay-button').style.display = 'block';
                console.log('hi, I can do ApplePay');
            } else {
                document.getElementById("apple-pay-button").style.display = "none";
                document.getElementById("notgot").style.display = "block";
                document.getElementById("got").style.display= "none";

                console.log('ApplePay is possible on this browser, but not currently activated.');
            }

        });

        document.getElementById('apple-pay-button').addEventListener('click', beginApplePay);

        var id ="{{ ($charge->id) }}";
        var price ="{{ ($charge->price) }}";
        var subtotal ="{{ $charge->price - $charge->price * 0.2 }}";
        var vat = "{{ ($charge->price * 0.2) }}";


        function beginApplePay() {
            var paymentRequest = {
                countryCode: 'GB',
                currencyCode: 'GBP',
                lineItems: [
                    {
                        type: 'final',
                        label: 'VAT',
                        amount: vat
                    },
                    {
                        type: 'final',
                        label: 'subtotal',
                        amount: subtotal
                    }

                ],

                total: {
                    label: 'Ormrepo',
                    amount: price
                }
            };



            var session = Stripe.applePay.buildSession(paymentRequest,
                function(result, completion) {
                    //console.log(result.token.card.address_line1);
                    $.post('/checkout/charges/{id}', { token: result.token.id, price: "{{ ($charge->price) }}", id: "{{($charge->id) }}" }).done(function() {

                        completion(ApplePaySession.STATUS_SUCCESS);
                        // Prevent the form from submitting with the default action
                        return false;
                        // You can now redirect the user to a receipt page, etc.
                        window.location.href = '/success.html';


                    }).fail(function() {
                        completion(ApplePaySession.STATUS_FAILURE);

                    });

                }, function(error) {

                    console.log(error.message);
                });

            session.begin();
        }
    </script>
@endsection

