<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected static $product;

    public static function insertProduct($request)
    {
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        self::$product->status = $request->status;
        self::$product->image = self::imageUpload($request, self::$product);
        self::$product->save();
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        self::$product->status = $request->status;
        self::$product->image = self::imageUpload($request, self::$product);
        self::$product->save();

    }

    public static function imageUpload($request, $product)
    {
        if ($request->image)
        {
            if ($product->image)
            {
                unlink($product->image);
            }
            $image = $request->file('image');
            $imageName = rand(100000, 999999).time().'.'.$image->getClientOriginalExtension();
            $imageDir = 'product/img/';
            $image->move($imageDir, $imageName);
            $imageUrl = $imageDir.$imageName;
        }
        else{
            $imageUrl = $product->image;
        }
        return $imageUrl;
    }

}
