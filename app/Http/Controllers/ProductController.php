<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('products.list', [
            "title"         => "Product",
            'product'       => $product,
            "main"          => "Jakmall"
        ]);
    }

    public function show($id)
    {
        $product = Product::with('review')
            ->findOrFail($id);
        return view('products.detail', [
            "title"         => "Product",
            "product"       => $product,
            "main"          => "Jakmall"
        ]);
    }
}
