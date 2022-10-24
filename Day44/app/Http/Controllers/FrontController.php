<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $product;
    public function home(){
        $this->products = Product::where('status',1)->orderBy('id','DESC')->take(6)->get();
        return view('front.home.home', ['products'=>$this->products]);
    }
    public function productDetails($id){
        $this->product = Product::find($id);
        return view('front.product.details', ['product'=>$this->product]);
    }

}
