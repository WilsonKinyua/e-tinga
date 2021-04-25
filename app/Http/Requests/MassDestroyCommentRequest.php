<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Comment;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCommentRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('comment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}
public function rules()
{
    



return [
'ids' => 'required|array',
    'ids.*' => 'exists:comments,id',
]
    
}

}