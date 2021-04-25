<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\MachineryCategory;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMachineryCategoryRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('machinery_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}
public function rules()
{
    



return [
'ids' => 'required|array',
    'ids.*' => 'exists:machinery_categories,id',
]
    
}

}