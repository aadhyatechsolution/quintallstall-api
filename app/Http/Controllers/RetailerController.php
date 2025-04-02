<?php

namespace App\Http\Controllers;

use App\Models\Retailer;
use Illuminate\Http\Request;

class RetailerController extends Controller
{
      // Get all retailer records
      public function index()
      {
          return response()->json(Retailer::all());
      }
  
      // Create a new retailer record
      public function store(Request $request)
      {
          // Validate the incoming data
          $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|string|max:255',
          ]);
  
          // Create and save the new record
          $retailer = Retailer::create($request->all());
  
          return response()->json($retailer, 201); // Return the created record
      }
  
      // Get a specific retailer record by ID
      public function show($id)
      {
          $retailer = Retailer::findOrFail($id);
          return response()->json($retailer);
      }
  
      // Update an retailer record
      public function update(Request $request, $id)
      {
          $retailer = Retailer::findOrFail($id);
  
          // Validate the incoming data
          $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'required|string|max:255', 
          ]);
  
          // Update the record
          $retailer->update($request->all());
  
          return response()->json($retailer);
      }
  
      // Delete an retailer record
      public function destroy($id)
      {
          $retailer = Retailer::findOrFail($id);
          $retailer->delete();
          return response()->json(null, 204); // Return no content status
      }
}
