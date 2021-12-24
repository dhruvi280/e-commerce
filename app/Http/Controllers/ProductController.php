<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
class ProductController extends Controller
{
    //
    public function index(){

        $product = Product::all();
        return view('product', ['product'=> $product]); 
    }
    public function details($id){
        $product= Product::find($id);
        return view('detail',['products'=>$product]);
    }
    public function search(Request $request){
        $product = Product::where('name', 'like', '%').$request->input('query')->get();
        return view('search', ['products'=>$product]);
    }
    public function addToCart(Request $request){
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
            
        } else{
            return redirect('/login');
        }
        
    }

    public function cartItems(){
        $user_id=Session::get('user')['id'];
    }
}