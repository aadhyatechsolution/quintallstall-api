<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Get all product records
    public function index()
    {
        return response()->json(Product::all());
    }

    // Create a new product record
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Create and save the new record
        $product = Product::create($request->all());

        return response()->json($product, 201); // Return the created record
    }

    // Get a specific product record by ID
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    // Update an product record
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Update the record
        $product->update($request->all());

        return response()->json($product);
    }

    // Delete an product record
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204); // Return no content status
    }
}
