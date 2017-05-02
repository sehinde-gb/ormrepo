E-commerce has moved on leaps and bounds over the past 10 years and it’s been interesting to see how the various payment methods have exploded on the scene recently. We can now use mobile phone payments to pay for public transport fares, e-commerce and parking. 

My goal has been to incorporate the latest and greatest technology in to my applications in an effort to increase efficiency and take up of these methods. 

A few months ago, I searched the web to look for ways in which I could incorporate Apple web pay in to my application and I was astonished as to how challenging it could be to follow the WWDC instructions on incorporating apple pay in to my app. 

The references to merchant certificates were cumbersome and extremely challenging. 

Thankfully Stripe has saved the day and they have come up with a wonderful solution to incorporating Apple Web pay in to your app.

As with most tutorials we have to make a number of assumptions from the outset. The reason being that setting up an E-Commerce site from scratch can take a considerable amount of time.

Later on, in the year we will summarise how to set up an ecommerce site from scratch within a future article. We will concentrate on adding Stripe Apple web pay to our existing gamesstation app.
Assumptions:
1.	Cart Controller this will handle the order process for the shopping cart if the user selects add to cart on the product show page.
2.	Checkout Controller this will handle the checkout process after stripe checkout has handed back the stripe token during the checkout process after the credit card has been charged.
3.	Products Controller this will handle the product listing, storage, amendment and the deletion of all new products.
4.	Please remember that Apple pay will not work on a local machine running homestead or valet. Apple pay requires all users to have a website and domain, running on a hosted server.

Our starter source code (i.e. it doesn’t have any references to apple pay) can be found at the link listed below:

Github starter source code

We strongly recommend that you pull down or fork, the repository before you embark on the tutorial as this will provide you with the tools to complete the job.
Prerequisites
Laravel Valet
Laravel 5.4
Laravel Forge
Javascript
Safari
Chrome
Apple Pay Developer Account
Macos Sierra
IOS10

We will start this tutorial with a listing of all the views and the controllers involved in order to provide you with an overview of the project from the start.
productscontroller.php

```

public function show($id){
  $product = Product::findOrFail($id);
  return view('admin.products.show', compact('product'));
}

```The view is illustrated within the image below:


show.blade.php

```

@extends('layouts.format')
@section('meta-title', $product->title)
@section('content')

  <div class="product-fluid">
     <div class="left-pane">
         <div class="window">
            <img class="product-img" src="/images/products/{{ $product->sku }}.png"/>
      </div>
       
       
   		<div class="product-image">
       </div>
   </div><!-- /.left-pane -->
    <div class="right-pane">
         <div class="new">
             <h4 class="is--centered">New</h4>
         </div><!-- /.new -->
         <div class="detail-panel">
         	<div class="show-heading">
             <h1>{{ $product->name }}</h1>
             <h5>£{{ $product->price }}</h5>
         	</div><!-- /.show-heading -->
         <hr/>
         <p class="--centre is--padded-bottom-ten">{{ $product->description }}</p> 
     {!! Form::open(array('url' => '/checkout')) !!}
     {!! Form::hidden('product_id', $product->id) !!}
      <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
           data-key="{{ env('STRIPE_KEY') }}"
           data-name="Gamestation Ltd"
           data-billing-address=true
           data-shipping-address=true
           data-label="Buy £{{ $product->price }}"
           data-description="{{ $product->name }}"
           data-amount="{{ $product->price * 100 }}"
           data-currency="gbp">
       </script>
              {!! Form::close() !!}
             <br>
      {!! Form::open(['url' => '/cart/store']) !!}
          <input type="hidden" name="product_id" value="{{ $product->id }}"/>
          <button type="submit" class="btn btn-cart">Add to Cart</button>
      {!! Form::close() !!}
  <h2 class="sub-heading --centre">Click to edit ?
      {!! link_to_route('admin.products.edit', $product->name, [$product->id]) !!}</h2>
       <hr/>
        </div><!-- /.detail-pane -->
    </div><!-- /.right-pane -->
 </div><!-- /.product-fluid -->
     <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      {!! Form::open(array('url' => '/checkout/charges/')) !!}
      {!! Form::hidden('product_id', $product->id) !!}
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
      {!! Form::close() !!}	<script>Stripe.setPublishableKey(“Add Stripe Key Here”);    
	</script>
@endsection

```

checkoutcontroller.php

```     
 namespace App\Http\Controllers;
   use Illuminate\Http\Request;
   use  App\Events\CheckoutWasCompleted;
   use App\Events\CheckoutWasIncomplete;
   use App\Mail\DigitalDownload;
   use App\Order;
   use App\Product;
   use App\User;
   use Carbon\Carbon;
   use Mail;  
     
class CheckoutController extends Controller {
     
   public function __construct()
     {
         parent::__construct();
     }
     
   public function index(Request $request)
     {
         $user = new User();
         $products = Product::find($request->input('product_id'));                  	       $stripeEmail = $request->input('stripeEmail');
         $stripeToken = $request->input('stripeToken');
         if($user->charge($products->priceToCents(),
         [
         'source' =>  $stripeToken,
         'receipt_email' => $stripeEmail
         ])
         ) {
         $orders = new Order();
         // Generate random orders number
         $orders->order_number = substr(md5(microtime()), rand(0,            20), 6) . time();
         $orders->product_id = $products->id;
         $orders->email = $request->input('stripeEmail');
        $orders->billing_name = $request->input('stripeBillingName');         $orders->billing_address =
        $request ->input('stripeBillingAddressLine1');
        $orders->billing_city =
        $request->input('stripeBillingAddressCity');
        $orders->billing_zip =
        $request->input('stripeBillingAddressZip');
        $orders->billing_country =
        $request->input('stripeBillingAddressCountry');
        $orders->shipping_name =
        $request->input('stripeShippingName');
        $orders->shipping_address =
        $request->input('stripeShippingAddressLine1');
        $orders->shipping_city =
        $request->input('stripeShippingAddressCity');
        $orders->shipping_zip =
        $request->input('stripeShippingAddressZip');
        $orders->shipping_country =
       $request->input('stripeShippingAddressCountry');
       $orders->save();
             
       if ($orders->product->is_downloadable) {
            $orders->onetimeurl = md5(time() .
            $orders->email . $orders->order_number);
            $orders->save();
            $when = Carbon::now()->addMinutes(10);
            Mail::to($orders->email)->
                later($when, 
                new DigitalDownload($orders));
             } } else {
             event(new CheckoutWasIncomplete($user));
             return redirect()->route('products.show', [$products->id]);
             }
             
             $user = User::first();
             event(new CheckoutWasCompleted($user));
             
         return redirect()->route('checkout.thankyou');
             }
             
         public function thankyou() {
             return view('checkout.thankyou');
         } 
 }
         
```         
Styling
The first step in implementing Stripe Apple Web pay is to add the styling for the button that will be used on our show.blade.php.
Here is the style tag we will use:  
        
  <style>                            
            #apple-pay-button {                                
                width: 280px;                                
                height: 64px;                                
                display: inline-block;                                
                box-sizing: border-box;                                
                background-image:   url(/images/ApplePayBTN_32pt__white_logo_@2x.png);                                 	     background-size: 100%;                                                 
	     background-repeat: no-repeat;                            
                }                        
 </style>

In our case this will be placed just underneath the tag underneath the cart declaration as shown in the snippet below:

     {!! Form::open(['url' => '/cart/store']) !!}
     	<input type="hidden" name="product_id"
        value="{{ $product->id }}"/>
    	<button type="submit" class="btn btn-cart">
    	Add to Cart</button>
    {!! Form::close() !!}
    <h2 class="sub-heading --centre">Click to edit ?
       {!! link_to_route('admin.products.edit', $product->name, [$product->id]) !!}
    </h2>
    <style>
     	#apple-pay-button {
         	width: 280px;
         	height: 64px;
         	display: inline-block;
         	box-sizing: border-box;
         	background-image: url(/images/ApplePayBTN_32pt__white_logo_@2x.png);         			background-size: 100%;
        	background-repeat: no-repeat;
         }
     </style>
