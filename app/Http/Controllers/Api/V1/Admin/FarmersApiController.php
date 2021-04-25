<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;
use App\Http\Resources\Admin\FarmerResource;
use App\Models\Farmer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FarmersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('farmer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FarmerResource(Farmer::all());
    }

    public function store(StoreFarmerRequest $request)
    {
        $farmer = Farmer::create($request->all());

        return (new FarmerResource($farmer))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Farmer $farmer)
    {
        abort_if(Gate::denies('farmer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FarmerResource($farmer);
    }

    public function update(UpdateFarmerRequest $request, Farmer $farmer)
    {
        $farmer->update($request->all());

        return (new FarmerResource($farmer))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Farmer $farmer)
    {
        abort_if(Gate::denies('farmer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $farmer->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
