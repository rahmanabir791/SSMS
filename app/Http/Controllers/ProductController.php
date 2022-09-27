<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    public function addProduct()
    {
        return view('admin.product.add');
    }

    public function manageProduct()
    {
//        Product::orderBy('id', 'DESC')->get()
        return view('admin.product.manage', ['products' => Product::orderBy('id', 'DESC')->get()]);
    }

    public function newProduct(Request $request)
    {
        Product::insertProduct($request);
        return back()->with('message', 'Product Saved Successfully');
    }

    public function editProduct($id)
    {
        return view('admin.product.edit', [ 'product' => Product::find($id)]);
    }

    public function updateProduct(Request $request, $id){
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Product Updated Successfully');
    }

    public function deleteProduct($id){
        $this->product = Product::find($id);
        if ($this->product->image)
        {
            unlink($this->product->image);
        }
        $this->product->delete();
        return redirect('/manage-product')->with('message', 'Product Deleted Successfully');
    }
}
