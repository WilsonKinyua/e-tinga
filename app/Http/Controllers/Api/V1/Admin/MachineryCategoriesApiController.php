<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreMachineryCategoryRequest;
use App\Http\Requests\UpdateMachineryCategoryRequest;
use App\Http\Resources\Admin\MachineryCategoryResource;
use App\Models\MachineryCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MachineryCategoriesApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('machinery_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MachineryCategoryResource(MachineryCategory::with(['category'])->get());
    }

    public function store(StoreMachineryCategoryRequest $request)
    {
        $machineryCategory = MachineryCategory::create($request->all());

        if ($request->input('main_photo', false)) {
            $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('main_photo'))))->toMediaCollection('main_photo');
        }

        if ($request->input('other_photos', false)) {
            $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('other_photos'))))->toMediaCollection('other_photos');
        }

        if ($request->input('brochure', false)) {
            $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('brochure'))))->toMediaCollection('brochure');
        }

        return (new MachineryCategoryResource($machineryCategory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MachineryCategory $machineryCategory)
    {
        abort_if(Gate::denies('machinery_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MachineryCategoryResource($machineryCategory->load(['category']));
    }

    public function update(UpdateMachineryCategoryRequest $request, MachineryCategory $machineryCategory)
    {
        $machineryCategory->update($request->all());

        if ($request->input('main_photo', false)) {
            if (!$machineryCategory->main_photo || $request->input('main_photo') !== $machineryCategory->main_photo->file_name) {
                if ($machineryCategory->main_photo) {
                    $machineryCategory->main_photo->delete();
                }
                $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('main_photo'))))->toMediaCollection('main_photo');
            }
        } elseif ($machineryCategory->main_photo) {
            $machineryCategory->main_photo->delete();
        }

        if ($request->input('other_photos', false)) {
            if (!$machineryCategory->other_photos || $request->input('other_photos') !== $machineryCategory->other_photos->file_name) {
                if ($machineryCategory->other_photos) {
                    $machineryCategory->other_photos->delete();
                }
                $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('other_photos'))))->toMediaCollection('other_photos');
            }
        } elseif ($machineryCategory->other_photos) {
            $machineryCategory->other_photos->delete();
        }

        if ($request->input('brochure', false)) {
            if (!$machineryCategory->brochure || $request->input('brochure') !== $machineryCategory->brochure->file_name) {
                if ($machineryCategory->brochure) {
                    $machineryCategory->brochure->delete();
                }
                $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('brochure'))))->toMediaCollection('brochure');
            }
        } elseif ($machineryCategory->brochure) {
            $machineryCategory->brochure->delete();
        }

        return (new MachineryCategoryResource($machineryCategory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MachineryCategory $machineryCategory)
    {
        abort_if(Gate::denies('machinery_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $machineryCategory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
