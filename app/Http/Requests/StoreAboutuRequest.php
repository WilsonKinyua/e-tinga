<?php

namespace App\Http\Requests;

use App\Models\Aboutu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAboutuRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('aboutu_create');
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
