<?php

namespace App\Http\Requests;

use App\Models\MachineryCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMachineryCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('machinery_category_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'main_photo' => [
                'required',
            ],
            'cost_per_hour' => [
                'required',
            ],
            'cost_per_day' => [
                'required',
            ],
            'cost_per_week' => [
                'required',
            ],
            'cost_per_month' => [
                'required',
            ],
            'two_way_delivery' => [
                'required',
            ],
            'total_rental_price_incl_taxes_before' => [
                'required',
            ],
            'total_rental_price_incl_taxes_after' => [
                'required',
            ],
            'brand' => [
                'string',
                'required',
            ],
            'manufacturer' => [
                'string',
                'nullable',
            ],
            'model' => [
                'string',
                'nullable',
            ],
            'manufacture_year' => [
                'string',
                'nullable',
            ],
            'digging_depth' => [
                'string',
                'nullable',
            ],
            'maximum_digging_force' => [
                'string',
                'nullable',
            ],
            'weight' => [
                'string',
                'nullable',
            ],
            'rated_power' => [
                'string',
                'nullable',
            ],
            'standard_bucket_capacity' => [
                'string',
                'nullable',
            ],
            'standard_bucket_width' => [
                'string',
                'nullable',
            ],
            'operation_hydraulic_pressure' => [
                'string',
                'nullable',
            ],
            'gradeadility' => [
                'string',
                'nullable',
            ],
            'pressure_to_the_ground' => [
                'string',
                'nullable',
            ],
            'status' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
