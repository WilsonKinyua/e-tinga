<?php

namespace App\Http\Requests;

use App\Models\Aboutu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutuRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('aboutu_edit');
    }

    public function rules()
    {
        return [
            'description' => [
                'required',
            ],
        ];
    }
}
