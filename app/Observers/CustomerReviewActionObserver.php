<?php

namespace App\Observers;

use App\Models\CustomerReview;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class CustomerReviewActionObserver
{
    public function created(CustomerReview $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'CustomerReview'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
