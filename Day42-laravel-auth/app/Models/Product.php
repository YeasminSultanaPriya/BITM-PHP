<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    private static $product, $productImage, $imageName, $imageDirectory, $imageUrl;
    use HasFactory;

    public static function saveImage($request){
        self::$productImage = $request->file('image');
        self::$imageName = time().'.'.self::$productImage->getClientOriginalExtension();
        self::$imageDirectory = 'admin/images/product/';
        self::$productImage->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;
        return self::$imageUrl;
    }

    public static function createProduct($request){
        self::$product                      = new Product();
        self::$product->product_name        = $request->product_name;
        self::$product->category_name       = $request->category_name;
        self::$product->brand_name          = $request->brand_name;
        self::$product->description         = $request->description;
        self::$product->image               = self::saveImage($request);
        self::$product->product_price       = $request->product_price;
        self::$product->status              = $request->status;
        self::$product->save();
    }

}
