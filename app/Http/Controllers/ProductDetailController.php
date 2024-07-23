<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductDetail;

class ProductDetailController extends Controller
{
    public function show($product_code){
        $product = ProductDetail::where(["product_code" => $product_code])->first();
        if (!$product) {
            return view('product.show', ['product' => []]);
        }
        return view('product.show', compact('product'));
    }
}
