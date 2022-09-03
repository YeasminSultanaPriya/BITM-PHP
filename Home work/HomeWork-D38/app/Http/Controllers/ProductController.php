<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('product.product');
    }
    public function newProduct(Request $request){
        $this->product = new Product();
        $this->product->product_name = $request->product_name;
        $this->product->category_name = $request->category_name;
        $this->product->brand_name = $request->brand_name;
        $this->product->product_price = $request->product_price;
        $this->product->product_description = $request->product_description;
        $this->product->image = $request->image;
        $this->product->save();

        return redirect()->back()->with('message', 'Blog created successfully.');
    }
}
