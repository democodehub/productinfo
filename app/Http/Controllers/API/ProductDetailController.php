<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProductDetail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductDetail::all();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_code' => 'required|string|max:50',
            'product_name' => 'required|string|max:100',
            'length' => 'required|integer',
            'height' => 'required|integer',
            'depth' => 'required|integer',
            'customer_id' => 'required|integer',
            'customer_name' => 'required|string|max:100',
            'project_id' => 'required|integer',
            'project_name' => 'required|string|max:100',
            'address' => 'required|string|max:250',
            'production_date' => 'required|date',
            'delivery_date' => 'required|date',
            'description' => 'required|string',
        ]);

        $product = ProductDetail::create($validated);

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = ProductDetail::where(["product_code" => $id])->first();
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product_code' => 'sometimes|string|max:50',
            'product_name' => 'sometimes|string|max:100',
            'length' => 'sometimes|integer',
            'height' => 'sometimes|integer',
            'depth' => 'sometimes|integer',
            'customer_id' => 'sometimes|integer',
            'customer_name' => 'sometimes|string|max:100',
            'project_id' => 'sometimes|integer',
            'project_name' => 'sometimes|string|max:100',
            'address' => 'sometimes|string|max:250',
            'production_date' => 'sometimes|date',
            'delivery_date' => 'sometimes|date',
            'description' => 'sometimes|string',
        ]);

        $product = ProductDetail::where(["product_code" => $id])->first();
        $product->update($validated);
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = ProductDetail::where(["product_code" => $id])->first();
        $product->delete();

        return response()->json(null, 204);
    }
}
