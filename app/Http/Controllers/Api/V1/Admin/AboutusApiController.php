<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreAboutuRequest;
use App\Http\Requests\UpdateAboutuRequest;
use App\Http\Resources\Admin\AboutuResource;
use App\Models\Aboutu;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AboutusApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('aboutu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AboutuResource(Aboutu::all());
    }

    public function store(StoreAboutuRequest $request)
    {
        $aboutu = Aboutu::create($request->all());

        if ($request->input('photo', false)) {
            $aboutu->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        return (new AboutuResource($aboutu))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Aboutu $aboutu)
    {
        abort_if(Gate::denies('aboutu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AboutuResource($aboutu);
    }

    public function update(UpdateAboutuRequest $request, Aboutu $aboutu)
    {
        $aboutu->update($request->all());

        if ($request->input('photo', false)) {
            if (!$aboutu->photo || $request->input('photo') !== $aboutu->photo->file_name) {
                if ($aboutu->photo) {
                    $aboutu->photo->delete();
                }
                $aboutu->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($aboutu->photo) {
            $aboutu->photo->delete();
        }

        return (new AboutuResource($aboutu))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Aboutu $aboutu)
    {
        abort_if(Gate::denies('aboutu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutu->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
