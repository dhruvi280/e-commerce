<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index(){

        $product = Product::all();
        return view('product', ['product'=> $product]); 
    }
    public function details($id){
        return Product::find($id);
    }
}