<?php

namespace App\Http\Controllers;

use App\Charge;
use App\Exceptions\ChargeNotFoundException;
use App\User;
use App\Order;
use Mail;
use App\Mail\DigitalDownload;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Stripe;

class CheckoutController extends Controller
{

    /**
     * Initialise the this user instance.
     *
     * CheckoutController constructor.
     */
    public function __construct()
    {

        parent::__construct();
    }


    /**
     * Display a listing of the orders.
     *
     * @param Request $request
     * @return mixed
     * @throws ChargeNotFoundException
     */
    public function index(Request $request)
    {

        $user = new User();

        $charges = Charge::find($request->input('charge_id'));

        $stripeEmail = $request->input('stripeEmail');

        $stripeToken = $request->input('stripeToken');


        try {

           $user->charge($charges->priceToPennies(),
                [
                    'source' => $stripeToken,
                    'receipt_email' => $stripeEmail

                ]);

                $orders = new Order();

                // Generate random orders number
                $orders->order_number = substr(md5(microtime()), rand(0, 20), 6) . time();

                $orders->charge_id = $charges->id;

                $orders->email = $request->input('stripeEmail');

                $orders->save();

                if ($orders->charge->is_downloadable) {

                    $orders->onetimeurl = md5(time() . $orders->email . $orders->order_number);

                    $orders->save();

                    $when = Carbon::now()->addMinutes(10);

                    Mail::to($orders->email)->later($when, new DigitalDownload($orders));

                    //return redirect()->route('checkout.thankyou');

                    //return view('checkout.thankyou', ['order' => 'James']);


                    return view('checkout.thankyou', compact('orders'));

                } else {

                    return redirect()->route('checkout.thankyou');

                }
        } catch (\Exception $e) {

            throw new ChargeNotFoundException($e->getMessage());

            //return response()->json(['status' => $e->getMessage()], 422);

        }

        //return redirect()->route('checkout.thankyou');

        return redirect()->route('checkout.thankyou');


    }

    /**
     * Thank the customer for purchase
     *
     * @return Response
     */
    public function thankyou()
    {
        return view('checkout.thankyou');
    }


    /**
     *  * Uses Apple Pay
     * Get the latest Product and retrieve the price for the product
     * set the stripe key and retrieve the token from the stripe server
     * use the token to create a charge for the amount.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function charges(Request $request)
    {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        Stripe::setApiKey("<?php echo env('STRIPE_KEY') ?>");


        //$charges = Charge::find($request->input('charge_id'));
        $id = $_POST['id'];

        $raw_price = $request->get('price');
        $price = ($raw_price * 100);

        $user = new User();
        $charge = Charge::findOrFail($id);


        if($user->charges($charge->priceToCents(),
            [
                'source' => $request->get('token'),
                'amount' => $price,
                'receipt_email' => $user->email
            ])
        ) {

            $orders = new Order();
            // Generate random orders number
            $orders->order_number = substr(md5(microtime()), rand(0, 20), 6) . time();

            $orders->charge_id = $charge->id;

            $user = auth()->user();

            $orders->email = $user->email;

            $orders->save();

            if ($orders->product->is_downloadable) {

                $orders->onetimeurl = md5(time() . $orders->email . $orders->order_number);

                $orders->save();

                $when = Carbon::now()->addMinutes(10);

                Mail::to($orders->email)->later($when, new DigitalDownload($orders));

            } else {

                return redirect()->route('checkout.thankyou');


            }
        }


    }

}
