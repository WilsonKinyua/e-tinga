<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerReview;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerReviewsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_review_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerReviews = CustomerReview::all();

        return view('admin.customerReviews.index', compact('customerReviews'));
    }

    public function show(CustomerReview $customerReview)
    {
        abort_if(Gate::denies('customer_review_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customerReviews.show', compact('customerReview'));
    }
}
