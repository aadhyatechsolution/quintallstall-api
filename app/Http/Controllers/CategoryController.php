<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Get all categories records
    public function index()
    {
        return response()->json(Category::all());
    }

    // Create a new product record
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'addedby' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Create and save the new record
        $category = Category::create($request->all());

        return response()->json($category, 201); // Return the created record
    }

    // Get a specific product record by ID
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    // Update an product record
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'addedby' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Update the record
        $category->update($request->all());

        return response()->json($category);
    }

    // Delete an product record
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(null, 204); // Return no content status
    }
}
