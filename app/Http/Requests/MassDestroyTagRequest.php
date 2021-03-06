<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Tag;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTagRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}
public function rules()
{
    



return [
'ids' => 'required|array',
    'ids.*' => 'exists:tags,id',
]
    
}

}