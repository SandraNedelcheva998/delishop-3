<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check()==false) {
            // The user is not logged in...
            return redirect('login');
        }
        $user=Auth::user();
        $cart=null;
        If($user->carts->count()==0){
            $newcart=new Cart();
            $newcart->isActive=true;
            $newcart->user_id=$user->id;
            $newcart->createDate=date("Y-m-d H:i:s");
            $newcart->save();
            $cart=$newcart;
        }
        else{
            foreach ($user->carts as $curr_cart){
                if($curr_cart->isActive){
                    $cart=$curr_cart;
                }
            }
            if($cart==null){
                $newcart=new Cart();
                $newcart->isActive=true;
                $newcart->user_id=$user->id;
                $newcart->createDate=date("Y-m-d H:i:s");
                $newcart->save();
                $cart=$newcart;
            }
        }
        $amount=0;
        foreach ($cart->cartitems as $cartitem)
        {
            $amount+=$cartitem->product->ProductPrice*$cartitem->quantity;
        }
        $amount*=100;
        $currency="eur";
        $description="Deli Shop Payment";
        return view('carts.index',compact('cart','amount','description','currency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (Auth::check()==false) {
            // The user is not logged in...
            return redirect('login');
        }
        $user=Auth::user();
        $cart=null;
        if($user->carts->count()==0){
            $newcart=new Cart();
            $newcart->isActive=true;
            $newcart->user_id=$user->id;
            $newcart->createDate=date("Y-m-d H:i:s");
            $newcart->save();
            $cart=$newcart;
        }
        else{
            //$cart=User::with('cart')
            foreach ($user->carts as $curr_cart){
                if($curr_cart->isActive){
                    $cart=$curr_cart;
                }
            }
        }
        $product_id=$request->input('ProductId');
        $quantity=$request->input('ItemQuantity');
        $product=Product::find($product_id);
        $found=false;
        foreach ($cart->cartitems as $cartitem){
            if($cartitem->product_id==$product_id)
            {
                $cartitem->quantity+=$quantity;
                $found=true;
                $cartitem->save();
            }
        }
        if(!$found)
        {
            $cartitem=new CartItem();
            $cartitem->cart_id=$cart->id;
            $cartitem->product_id=$product_id;
            $cartitem->quantity=$quantity;
            $cartitem->save();
        }

        //dd($cart->cartitems);
        return redirect('carts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
