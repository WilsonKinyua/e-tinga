<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAboutuRequest;
use App\Http\Requests\StoreAboutuRequest;
use App\Http\Requests\UpdateAboutuRequest;
use App\Models\Aboutu;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AboutusController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('aboutu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutus = Aboutu::with(['media'])->get();

        return view('admin.aboutus.index', compact('aboutus'));
    }

    public function create()
    {
        abort_if(Gate::denies('aboutu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutus.create');
    }

    public function store(StoreAboutuRequest $request)
    {
        $aboutu = Aboutu::create($request->all());

        foreach ($request->input('photo', []) as $file) {
            $aboutu->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $aboutu->id]);
        }

        return redirect()->route('admin.aboutus.index');
    }

    public function edit(Aboutu $aboutu)
    {
        abort_if(Gate::denies('aboutu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutus.edit', compact('aboutu'));
    }

    public function update(UpdateAboutuRequest $request, Aboutu $aboutu)
    {
        $aboutu->update($request->all());

        if (count($aboutu->photo) > 0) {
            foreach ($aboutu->photo as $media) {
                if (!in_array($media->file_name, $request->input('photo', []))) {
                    $media->delete();
                }
            }
        }
        $media = $aboutu->photo->pluck('file_name')->toArray();
        foreach ($request->input('photo', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $aboutu->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('photo');
            }
        }

        return redirect()->route('admin.aboutus.index');
    }

    public function show(Aboutu $aboutu)
    {
        abort_if(Gate::denies('aboutu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutus.show', compact('aboutu'));
    }

    public function destroy(Aboutu $aboutu)
    {
        abort_if(Gate::denies('aboutu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutu->delete();

        return back();
    }

    public function massDestroy(MassDestroyAboutuRequest $request)
    {
        Aboutu::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('aboutu_create') && Gate::denies('aboutu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Aboutu();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
