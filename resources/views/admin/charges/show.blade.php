@extends('layouts.app')

@section('meta-title', $charge->name)

@section('content')


<div class="product-container">

    <div class="single-container">

        <div class="left-container">

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
                    <div class="col-sm-6">
                        <h1 class="is--black">Item</h1>
                        <p class="is--dark-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>

                    </div>
                </div>

            </div><!-- /.container -->
        </div><!-- /.left-container -->


        <div class="right-container">
            <div class="detail">
                <h1 class="is--black">{{ $charge->name }}</h1>
                <hr class="is--black"/>
                <p class="is--black">£{{ $charge->price }} GBP</p>



                <form id="checkout-form" action="/checkout" method="POST">
                    {!! Form::hidden('charge_id', $charge->id) !!}
                    <input type="hidden" name="stripeToken" id="stripeToken">
                    <input type="hidden" name="stripeEmail" id="stripeEmail">


                    <script src="https://checkout.stripe.com/checkout.js"></script>

                    <button id="customButton" class="btn-buy">Buy</button>



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
                        <li>Digital Marketing as standard</li>
                        <li>New customers welcome</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                    </ul>
                </div><!-- /.featured-list -->

                <div class="apple-pay">
                    <style>
                        #apple-pay-button {
                            width: 280px;
                            height: 64px;
                            display: inline-block;
                            box-sizing: border-box;
                            background-image: url(/images/ApplePayBTN_32pt__white_logo_@2x.png);
                            background-size: 100%;
                            background-repeat: no-repeat;
                        }
                    </style>

                    <button id="apple-pay-button" style="display:none"></button>
                    <p style="display:none" id="notgot">ApplePay is not available with this browser</p>
                    <p style="display:none" id="success">Test transaction completed, thanks. <a href="https://ormrepo.co.uk/admin/charges">reset</a></p>

                    <div id="apple-link" style="display:none">
                        <li><a href="http://www.apple.com/uk/privacy/" class="terms-link">Apple Pay Terms and Conditions</a></li>
                    </div><!-- /.apple-link -->
                </div><!-- /.apple-pay -->

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1"><i class="glyphicon glyphicon-minus"></i>Panel 1</a>
                            </h4>

                        </div>
                        <div id="panel1" class="panel-collapse collapse in">
                            <div class="panel-body">Contents panel 1</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2"><i class="glyphicon glyphicon-plus"></i>Panel 2</a>
                            </h4>

                        </div>
                        <div id="panel2" class="panel-collapse collapse">
                            <div class="panel-body">Contents panel 2</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3"><i class="glyphicon glyphicon-plus"></i>Panel 3</a>
                            </h4>

                        </div>
                        <div id="panel3" class="panel-collapse collapse">
                            <div class="panel-body">Contents panel 3</div>
                        </div>
                    </div>
                </div>

            </div><!-- /.detail -->

        </div><!-- /.right-container -->

    </div><!-- /.single-container -->



</div><!-- /.charge-container -->

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
            document.getElementById('apple-link').style.display = 'block';
            console.log('hi, I can do ApplePay');
        } else {
            document.getElementById("notgot").style.display = "block";
            console.log('ApplePay is possible on this browser, but not currently activated.');
        }

    });

    document.getElementById('apple-pay-button').addEventListener('click', beginApplePay);


    var price ="{{ ($charge->price) }}";
    var id ="{{($charge->id) }}";


    function beginApplePay() {
        var paymentRequest = {
            requiredBillingContactFields: ['postalAddress'],
            requiredShippingContactFields: ['phone'],
            countryCode: 'GB',
            currencyCode: 'GBP',
            total: {
                label: 'Ormrepo',
                amount: price
            }
        };



        var session = Stripe.applePay.buildSession(paymentRequest,
            function(result, completion) {
                //console.log(result.token.card.address_line1);
                $.post('/checkout/charges/{id}', { token: result.token.id, price: "{{ ($charge->price) }}", id: "{{$charge->id}}" }).done(function() {

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

