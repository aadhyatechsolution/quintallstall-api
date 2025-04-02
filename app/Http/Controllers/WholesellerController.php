<?php

namespace App\Http\Controllers;

use App\Models\Wholeseller;
use Illuminate\Http\Request;

class WholesellerController extends Controller
{
   // Get all wholeseller records
   public function index()
   {
       return response()->json(Wholeseller::all());
   }

   // Create a new wholeseller record
   public function store(Request $request)
   {
       // Validate the incoming data
       $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|max:255',
       ]);

       // Create and save the new record
       $wholeseller = Wholeseller::create($request->all());

       return response()->json($wholeseller, 201); // Return the created record
   }

   // Get a specific wholeseller record by ID
   public function show($id)
   {
       $wholeseller = Wholeseller::findOrFail($id);
       return response()->json($wholeseller);
   }

   // Update an wholeseller record
   public function update(Request $request, $id)
   {
       $wholeseller = Wholeseller::findOrFail($id);

       // Validate the incoming data
       $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|max:255', 
       ]);

       // Update the record
       $wholeseller->update($request->all());

       return response()->json($wholeseller);
   }

   // Delete an wholeseller record
   public function destroy($id)
   {
       $wholeseller = Wholeseller::findOrFail($id);
       $wholeseller->delete();
       return response()->json(null, 204); // Return no content status
   }
}
