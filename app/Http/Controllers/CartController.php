<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {


        // All orders of the auth user
        $orders = Cart::where('user_id','=', auth()->user()->id)->paginate(30);

                return view('cart')->with('orders',$orders);


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

        // update cart quantity and create new cart

       if(Cart::where('user_id','=',$request->user_id)->where('item_id', '=', $request->item_id)->count() > 0)
       {

           $cart = Cart::where('user_id','=',$request->user_id)->where('item_id', '=', $request->item_id)->first();

           $itemPrice = Product::find($request->item_id)->price;

            if($cart->quantity < 6)
            {
                $cart->quantity = $cart->quantity + 1;
                $cart->price = $itemPrice * $cart->quantity;
                $cart->save();
            }

            return redirect()->back();

       }

       else
       {

        $cart = new Cart;
        $itemPrice = Product::find($request->item_id)->price;
        // Store in DB
        $cart->item_id = $request->item_id;
        $cart->user_id = $request->user_id;
        $cart->price = $itemPrice;
        $cart->save();

        return redirect()->back();
       }


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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Cart::find($id);
        $order->delete();
        return redirect('/cart');


    }

    public function updateqty(Request $request)
    {
        $id = $request->id;
        $cart = Cart::find($id);
        $cart->quantity = $request->quantity;
        $cart->price = $cart->price * $request->quantity;
        $cart->save();

        return redirect('/cart');

    }

}
