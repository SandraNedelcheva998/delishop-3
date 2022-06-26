<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    //
    public function charge(Request $request)
    {
        //dd($request->all());
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $request->input('amount'),
                'currency' => $request->input('currency')
            ));

            //Naoganje na shopping kart za koja se plaka
            $cart=Cart::find($request->input('cart_id'));

            //Kreiranje na order vo databaza
            $neworder=new Order();
//            $neworder->cart_id=$cart->id;
            $neworder->user_id=$cart->user->id;
            $neworder->currency=$request->input('currency');
            $neworder->amount=(int)$request->input('amount')/100;
            $neworder->save();

            //Zapishuvanje na order i deaktiviranje na cart
            $cart->isActive=false;
            $cart->order_id=$neworder->id;
            $cart->purchaseDate=date("Y-m-d H:i:s");
            $cart->save();

            //Sozdavanje na nova cart za korisnikot
            $newcart=new Cart();
            $newcart->isActive=true;
            $newcart->user_id=$cart->user_id;
            $newcart->createDate=date("Y-m-d H:i:s");
            $newcart->save();
            //Namaluvanje na kolichinata na produktite vo baza
            foreach($cart->cartitems as $cartitem){
                $diff=$cartitem->product->ProductStock-$cartitem->quantity;
                //Otstranuvanje na produkt od drugi kolichki ako celosno e potroshen produktot
                if($diff<=0)
                {
                    $cartitem->product->ProductStock=0;

                    $allcarts=Cart::all();
                    foreach ($allcarts as $curr_cart)
                    {
                        if($curr_cart->isActive)
                        {
                            foreach ($curr_cart->cartitems as $curr_cartitem)
                            {
                                if($curr_cartitem->product->id==$cartitem->product->id)
                                {
//                                $curr_cartitem->delete();
                                    $curr_cartitem->quantity=0;
                                    $curr_cartitem->save();
                                }
                            }
                        }
                    }
                }
                else
                {
                    $cartitem->product->ProductStock=$diff;
                }
                $cartitem->product->save();
            }
            //foreach($cart->cartitems as cartitem)

//            return 'Successful payment, thank you for shopping!';
            return view('charge.index');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function index(Request $request)
    {
        return view('charge.index');
    }

}
