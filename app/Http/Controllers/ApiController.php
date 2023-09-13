<?php

// app/Http/Controllers/ApiController.php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $apis = Api::all();
        return response()->json(['data' => $apis], 200);
    }

    public function store(Request $request)
    {
        // Validate that 'name' is a string in the request body
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        // Create a new record with the provided name
        $api = Api::create(['name' => $validatedData['name']]);
    
        return response()->json(['data' => $api], 201);
    }
    

    public function show($id)
    {
        $api = Api::find($id);

        if (!$api) {
            return response()->json(['message' => 'Name not found'], 404);
        }

        return response()->json(['data' => $api], 200);
    }
    


    public function update(Request $request, $id)
    {
        $api = Api::find($id);

        if (!$api) {
            return response()->json(['message' => 'Name not found'], 404);
        }

        // Validate that $name is a string
        $name = $request->input('name');
        if (!is_string($name)) {
            return response()->json(['message' => 'Invalid name format'], 400);
        }

        $api->update(['name' => $name]);

        return response()->json(['data' => $api, 'message' => 'Name updated successfully'], 200);
    }

    public function destroy($id)
    {
        $api = Api::find($id);
    
        if (!$api) {
            return response()->json(['message' => 'Api not found'], 404);
        }
    
        // Store the name before deleting the record
        $name = $api->name;
    
        $api->delete();
    
        return response()->json(['message' => "$name deleted successfully", 'data' => $api], 200);
    }
    
    
}

