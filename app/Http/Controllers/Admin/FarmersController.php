<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFarmerRequest;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;
use App\Models\Farmer;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FarmersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('farmer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $farmers = Farmer::all();

        return view('admin.farmers.index', compact('farmers'));
    }

    public function create()
    {
        abort_if(Gate::denies('farmer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.farmers.create');
    }

    public function store(StoreFarmerRequest $request)
    {
        $farmer = Farmer::create($request->all());

        return redirect()->route('admin.farmers.index');
    }

    public function edit(Farmer $farmer)
    {
        abort_if(Gate::denies('farmer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.farmers.edit', compact('farmer'));
    }

    public function update(UpdateFarmerRequest $request, Farmer $farmer)
    {
        $farmer->update($request->all());

        return redirect()->route('admin.farmers.index');
    }

    public function show(Farmer $farmer)
    {
        abort_if(Gate::denies('farmer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.farmers.show', compact('farmer'));
    }

    public function destroy(Farmer $farmer)
    {
        abort_if(Gate::denies('farmer_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $farmer->delete();

        return back();
    }

    public function massDestroy(MassDestroyFarmerRequest $request)
    {
        Farmer::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
