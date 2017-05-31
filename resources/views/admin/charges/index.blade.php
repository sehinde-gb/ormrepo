@extends('layouts.app')

@section('meta-title', 'Our Charges')

@section('content')

<div class="charge-container">



            <div class="featured">
                <div class="column-container">

                    @if(!$charges->isEmpty())

                        @foreach ($charges as $charge)
                            <div class="charge">
                                <img class="product-img" src="/images/charges/{{ $charge->sku }}.png"/>
                                <div class="description">
                                   <h5 class="is--centered"> <a href="{{ url('admin/charges', $charge->id) }}">
                                        {{ $charge->name }}
                                    </a></h5>
                                </div><!-- /.description -->
                                <div class="price-container">
                                    <p class="price is--centered is--padded-top-five is--black"><span style="text-decoration: line-through">£ 10.00</span>  £{{ $charge->price }}</p>
                                </div><!-- /.desc-container -->

                            </div><!-- /.charge -->
                        @endforeach

                    @else
                        <p class="offline">Sorry no charges are available today</p>
                    @endif

                </div><!-- /.column-container -->

                <div class="offers">
                    <div class="deal">
                        <h1 class="is--centered is--snow">Digital Marketing</h1>
                        <p class="is--centered is--snow">Build compelling, stunning websites</p>
                        <p class="is--centered is--snow">Social media inspired campaigns</p>

                    </div>
                    <!-- /.deal -->
                    <div class="deal">
                        <h1 class="is--centered is--snow">Special Deals</h1>
                        <p class="is--centered is--snow">Special rates for consultations</p>
                        <p class="is--centered is--snow">For further information</p>
                        <p class="is--centered is--snow">Call 07512305773</p>
                    </div>
                    <!-- /.deal -->

                    <div class="deal">
                        <h1 class="is--centered is--snow">Personal Branding</h1>
                        <p class="is--centered is--snow">Leverage your reputation</p>
                        <p class="is--centered is--snow">Build your profile</p>

                    </div>
                    <!-- /.deal -->

                </div>
                <!-- /.offers -->

            </div>
            <!-- /.featured -->







</div><!-- /.main-container -->



@endsection

