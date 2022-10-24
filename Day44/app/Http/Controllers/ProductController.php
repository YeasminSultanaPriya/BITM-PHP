<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product, $products;
    public function addProduct(){
        return view('admin.product.addProduct');
    }
    public function manageProduct(){
        $this->products = Product::orderBy('id','DESC')->get();
        return view('admin.product.manageProduct', ['products'=>$this->products]);
    }
    public function newProduct(Request $request){

        Product::createProduct($request);
        return redirect()->back()->with('success','Product created successfully');

    }
    public function edit($id){
        $this->product = Product::find($id);
        return view('admin.product.edit' , ['product' =>$this->product]);
    }
    public function update(Request $request){
        Product::updateProduct($request);
        return redirect('/manage-product')->with('success','Product updated successfully');
    }
    public function deleteProduct($id){
        $this->product = Product::find($id);
        if(file_exists($this->product->image)){
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect()->back()->with('success','Product deleted successfully');
    }

}
