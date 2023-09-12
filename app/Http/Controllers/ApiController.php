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

    public function store(Request $request, $name)
    {
        // Validate that $name is a string
        if (!is_string($name)) {
            return response()->json(['message' => 'Invalid name format'], 400);
        }

        // Create a new record with the provided name
        $api = Api::create(['name' => $name]);

        return response()->json(['data' => $api], 201);
    }

    public function show($identifier)
    {
        // Check if the identifier is a numeric value (assumed as id) or a string (assumed as name)
        if (is_numeric($identifier)) {
            $api = Api::find($identifier);
        } else {
            $api = Api::where('name', $identifier)->first();
        }
    
        if (!$api) {
            return response()->json(['message' => 'Record not found'], 404);
        }
    
        return response()->json(['data' => $api], 200);
    }
    


    public function update(Request $request, $identifier)
    {
        // Check if the identifier is a numeric value (assumed as id) or a string (assumed as name)
        if (is_numeric($identifier)) {
            $api = Api::find($identifier);
        } else {
            $api = Api::where('name', $identifier)->first();
        }
    
        if (!$api) {
            return response()->json(['message' => 'Record not found'], 404);
        }
    
        // Validate that $name is a string
        $name = $request->input('name');
        if (!is_string($name)) {
            return response()->json(['message' => 'Invalid name format'], 400);
        }
    
        // Update the record with the provided data
        $api->update(['name' => $name]);
    
        return response()->json(['data' => $api], 200);
    }
    

    public function destroy($identifier)
    {
        // Check if the identifier is numeric (consider it an ID) or a string (consider it a name)
        if (is_numeric($identifier)) {
            $api = Api::find($identifier);
        } else {
            $api = Api::where('name', $identifier)->first();
        }
    
        if (!$api) {
            return response()->json(['message' => 'API not found'], 404);
        }
    
        $api->delete();
    
        return response()->json(null, 204);
    }
    
}

