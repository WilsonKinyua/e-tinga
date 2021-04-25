<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Aboutu;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAboutuRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('aboutu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}
public function rules()
{
    



return [
'ids' => 'required|array',
    'ids.*' => 'exists:aboutus,id',
]
    
}

}