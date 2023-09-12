<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApiRequest;
use App\Http\Resources\ApiResource;
use App\Models\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $apis = Api::all();
        return ApiResource::collection($apis);
    }

  /*  public function store(StoreApiRequest $request)
    {
        $api = Api::create($request->all());
        return new ApiResource($api);
    }*/
    public function store(Request $request, $name)
    {
        // Validate and create a new record with the provided name
        $api = Api::create([
            'name' => $name,
        ]);

        return new ApiResource($api);
    }

    public function show(Api $api)
    {
        return new ApiResource($api);
    }

    public function update(StoreApiRequest $request, Api $api)
    {
        $api->update($request->all());
        return new ApiResource($api);
    }

    public function destroy(Api $api)
    {
        $api->delete();
        return response(null, 204);
    }
}
