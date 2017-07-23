@extends('layouts.app')

@section('meta-title', 'Our Services')

@section('content')

<div class="payment-container">
    <div class="top-heading">
        <h4 class="is--centered is--beige">Our Services</h4>
    </div><!-- /.top-heading -->

        <div class="news-container is--padded-top-20">
            <section id="news-demo">
                <article>
                    <div class="text-content">
                        <h2 class="is--black">Starter Package For Individuals</h2>
                        <p class="is--black">This summer there were, surprise surprise, boats on the bay! Often the sun will shine and when it's partially cloudy we get the 'God' or 'Holy Light' effect. It's pretty cool huh? I wonder what it's pointing to... treasure? Bitcoins?</p>
                        <a href="/admin/charges/1" class="button-link read-more">read more</a>
                    </div>
                    <div class="image-content"><img src="/images/assets/image-1.jpg" alt="demo1_1"></div>
                </article>
                <article>
                    <div class="text-content">
                        <h2 class="is--black">Professional Package for Businesses</h2>
                        <p class="is--black">And isn't it pretty? It's strange, people who live through heavy winters seem to want to get out of it as soon as possible, yet those who live in more temperate climates see snow and a 'real' winter as an amazing thing that must be experienced.</p>
                        <a href="/admin/charges/2" class="button-link read-more">read more</a>
                    </div>
                    <div class="image-content"><img src="/images/assets/image-2.jpg" alt="demo1_1"></div>
                </article>
                <article>
                    <div class="text-content">
                        <h2 class="is--black">Advanced Package for Businesses</h2>
                        <p class="is--black">The Palace of Versailles is pretty amazing, not just inside, but also the outside garden, where you'll find gardens like these sporting amazing ranges of flora.</p>
                        <a href="/admin/charges/3" class="button-link read-more">read more</a>
                    </div>
                    <div class="image-content"><img src="/images/assets/image-3.jpg" alt="demo1_1"></div>
                </article>
            </section><!-- /.news-demo -->
        </div>
        <!-- /.news-container -->


            <div class="featured">
                <div class="column-container">

                    @if(!$charges->isEmpty())
                        @foreach ($charges as $charge)
                            <div class="charge">
                                <img class="product-img" src="/images/charges/{{ $charge->sku }}.png"/>
                                <div class="description">
                                   <h5 class="is--centered is--black"><a href="{{ url('admin/charges', $charge->id) }}">
                                        {{ $charge->name }}
                                    </a></h5>
                                </div><!-- /.description -->
                                <div class="price-container">
                                    <p class="price is--centered is--padded-top-five is--black">£{{ $charge->price }}</p>
                                </div><!-- /.desc-container -->

                            </div><!-- /.charge -->
                        @endforeach

                    @else
                        <div class="minus-container">
                            <p class="offline">Sorry no charges are available today</p>
                        </div><!-- /.minus-container -->

                    @endif
                </div><!-- /.column-container -->
            </div><!-- /.featured -->
        </div><!-- /.news-demo -->
</div><!-- /.main-container -->

@endsection

@section('slip')
    <script src="/dist/js/slippry.min.js"></script>

    <script>
        jQuery('#news-demo').slippry({
            // general elements & wrapper
            slippryWrapper: '<div class="sy-box news-slider" />', // wrapper to wrap everything, including pager
            elements: 'article', // elments cointaining slide content

            // options
            adaptiveHeight: false, // height of the sliders adapts to current
            captions: false,

            // pager
            pagerClass: 'news-pager',

            // transitions
            transition: 'horizontal', // fade, horizontal, kenburns, false
            speed: 1200,
            pause: 8000,

            // slideshow
            autoDirection: 'prev'
        });

    </script>


@stop

