<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        //return Product::all();
		$data = Product::all();
		return view('product',['products' => $data]);
    }
    public function detail($id)
    {
        $data =  Product::find($id);
        return view('detail',['product' => $data]);
    }
    public function search(Request $req)
    {
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=> $data]);
    }
    public function addtocart(Request $req)
    {
        if ($req->session()->has('user')) /* After Logged in with correct email and password, user variable is put into session, here has('user') is checking whether that variable exists or not which means if user is logged in or not */
        {
         $cart = new Cart;
         $cart->user_id = $req->session()->get('user')['id'];
         $cart->product_id = $req->product_id;
         $cart->save(); 
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    public static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
