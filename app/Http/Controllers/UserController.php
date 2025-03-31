<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Get all users records
    public function index()
    {
        return response()->json(User::all());
    }

    // Create a new user record
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phoneno' => 'required|string|max:255',
        ]);

        // Create and save the new record
        $user = User::create($request->all());

        return response()->json($user, 201); // Return the created record
    }

    // Get a specific user record by ID
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    // Update an user record
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'area' => 'required|string|max:255',
        ]);

        // Update the record
        $user->update($request->all()); 
        return response()->json($user);
    }

    // Delete an user record
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(null, 204); // Return no content status
    }
}
