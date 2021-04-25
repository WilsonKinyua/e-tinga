<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\CustomerReviewResource;
use App\Models\CustomerReview;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerReviewsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_review_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomerReviewResource(CustomerReview::all());
    }

    public function show(CustomerReview $customerReview)
    {
        abort_if(Gate::denies('customer_review_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CustomerReviewResource($customerReview);
    }
}
