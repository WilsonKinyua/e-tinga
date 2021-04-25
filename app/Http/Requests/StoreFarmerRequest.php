<?php

namespace App\Http\Requests;

use App\Models\Farmer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreFarmerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('farmer_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'required',
            ],
            'id_number' => [
                'string',
                'required',
            ],
        ];
    }
}
