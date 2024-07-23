<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductDetail;

class ProductDetailController extends Controller
{
    public function show($id){
        $product = ProductDetail::find($id);
        return view('product.show', compact('product'));
    }
}
