<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMachineryCategoryRequest;
use App\Http\Requests\StoreMachineryCategoryRequest;
use App\Http\Requests\UpdateMachineryCategoryRequest;
use App\Models\Category;
use App\Models\MachineryCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MachineryCategoriesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('machinery_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $machineryCategories = MachineryCategory::with(['category', 'media'])->get();

        return view('admin.machineryCategories.index', compact('machineryCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('machinery_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.machineryCategories.create', compact('categories'));
    }

    public function store(StoreMachineryCategoryRequest $request)
    {
        $machineryCategory = MachineryCategory::create($request->all());

        if ($request->input('main_photo', false)) {
            $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($request->input('main_photo'))))->toMediaCollection('main_photo');
        }

        foreach ($request->input('other_photos', []) as $file) {
            $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('other_photos');
        }

        foreach ($request->input('brochure', []) as $file) {
            $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('brochure');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $machineryCategory->id]);
        }

        return redirect()->route('admin.machinery-categories.index');
    }

    public function edit(MachineryCategory $machineryCategory)
    {
        abort_if(Gate::denies('machinery_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $machineryCategory->load('category');

        return view('admin.machineryCategories.edit', compact('categories', 'machineryCategory'));
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

        if (count($machineryCategory->other_photos) > 0) {
            foreach ($machineryCategory->other_photos as $media) {
                if (!in_array($media->file_name, $request->input('other_photos', []))) {
                    $media->delete();
                }
            }
        }
        $media = $machineryCategory->other_photos->pluck('file_name')->toArray();
        foreach ($request->input('other_photos', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('other_photos');
            }
        }

        if (count($machineryCategory->brochure) > 0) {
            foreach ($machineryCategory->brochure as $media) {
                if (!in_array($media->file_name, $request->input('brochure', []))) {
                    $media->delete();
                }
            }
        }
        $media = $machineryCategory->brochure->pluck('file_name')->toArray();
        foreach ($request->input('brochure', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $machineryCategory->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('brochure');
            }
        }

        return redirect()->route('admin.machinery-categories.index');
    }

    public function show(MachineryCategory $machineryCategory)
    {
        abort_if(Gate::denies('machinery_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $machineryCategory->load('category');

        return view('admin.machineryCategories.show', compact('machineryCategory'));
    }

    public function destroy(MachineryCategory $machineryCategory)
    {
        abort_if(Gate::denies('machinery_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $machineryCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyMachineryCategoryRequest $request)
    {
        MachineryCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('machinery_category_create') && Gate::denies('machinery_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MachineryCategory();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
