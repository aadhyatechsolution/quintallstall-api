<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Get all role records
    public function index()
    {
        return response()->json(Role::all());
    }

    // Create a new role record
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Create and save the new record
        $role = Role::create($request->all());

        return response()->json($role, 201); // Return the created record
    }

    // Get a specific role record by ID
    public function show($id)
    {
        $role = Role::findOrFail($id);
        return response()->json($role);
    }

    // Update an apmc record
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Update the record
        $role->update($request->all());

        return response()->json($role);
    }

    // Delete an apmc record
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return response()->json(null, 204); // Return no content status
    }
}
