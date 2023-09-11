<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return Api::all();
    }

    public function store(Request $request)
    {
        return Api::create($request->all());
    }

    public function show(Api $api)
    {
        return $api;
    }

    public function update(Request $request, Api $api)
    {
        $api->update($request->all());
        return $api;
    }

    public function destroy(Api $api)
    {
        $api->delete();
        return response()->json(null, 204);
    }
}

