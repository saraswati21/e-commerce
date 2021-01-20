<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Session;
class ProductController extends Controller
{
    //
    function index()
    {
        //return "Welcome to Product page";
        //return Product::all();
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        //return Product::find($id) ;
        $data= Product::find($id) ;
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        //return $req->input();
        $data= Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['product'=>$data]);
    }
    function addtocart(Request $req)
    {
        if ($req->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
            //return "Hello Cart";
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
