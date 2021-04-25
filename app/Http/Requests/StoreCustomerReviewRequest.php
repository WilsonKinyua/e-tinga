<?php

namespace App\Http\Requests;

use App\Models\CustomerReview;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCustomerReviewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_review_create');
    }

    public function rules()
    {
        return [
            'customer_name' => [
                'string',
                'required',
            ],
            'professional'  => [
                'string',
                'required',
            ],
            'title'         => [
                'string',
                'required',
            ],
            'description'   => [
                'required',
            ],
            'stars'         => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
