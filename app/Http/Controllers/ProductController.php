<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('updated_at', 'desc')->paginate(9);
        return view('pages.product.product', ['product' => $product]);
    }

    public function create()
    {
        return view('pages.product.create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        if ($files = $request->file('image')) {
            $destinationPath = 'images'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $product->image = $profileImage;
        }
        $product->url = $request->url;
        $product->price = $request->price;
        $product->delivery = $request->delivery;
        $product->save();
        return redirect('admin/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('pages.product.edit', ['product' => $product]);
    }

    public function update($id,Request $request)
    {
        $product =  Product::find($id);
        $product->name = $request->name;
        if ($files = $request->file('image')) {
            $destinationPath = 'images'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $product->image = $profileImage;
        }
        $product->url = $request->url;
        $product->price = $request->price;
        $product->delivery = $request->delivery;
        $product->save();
        return redirect('admin/product');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product');
    }

}
