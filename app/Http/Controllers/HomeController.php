<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;
use \App\Item;
use Cart;
use \App\Order;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function who(Request $request)
    {
        //取得登入用戶
        //dd(Auth::user());

        //取得登入用戶主鍵
        //dd(Auth::id());

        //取得登入用戶
        dd($request->user());
    }

    public function authlogin()
    {

        $user = User::findOrFail(51);
        Auth::login($user);
    }

    public function authlogout()
    {
        Auth::logout();
    }

    public function storePage()
    {
        $items = Item::take(3)->get();
        //dd($items);
        return view('store', compact('items'));
    }

    public function storePage1()
    {
        return view('store1');
    }

    public function addCart(Item $item){
        $data = [
            'id' =>$item->id,
            'name' => $item->name,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => [], //額外屬性
            'associatedModel' => $item //商品模型物件
        ];
        Cart::session(Auth::user()->id)->add($data);

        return redirect('/store');
    }

    public function checkOut(){
        if (Auth::check()){
            $order = new Order;
            $user_id = Auth::user()->id;
            $order->user_id= $user_id;
            $order->subtotal = Cart::session($user_id)->getSubTotal();
            $order->total = Cart::session($user_id)->getTotal();
            
            //get info from checkout page
            //$order->pay_source = 'pay_pal';
            
            $order->save();

            $cartContent = Cart::session($user_id)->getContent();
            foreach ($cartContent as $row) {
                $order->items()->save($row->associatedModel, ['qty'=>$row->quantity]);
            }

            Cart::session($user_id)->clear();
            
        }

        return redirect('/store');
        // check if Auth

        //build order

        //clear cart

        //return shop
    }

    public function payBack(Request $request,Order $order){

        //get info from checkout page
        $order->pay_source = 'pay_pal';
        $order->status = 'payed';
        $order->save();
    }

}
