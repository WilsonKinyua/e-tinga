<?php

namespace App\Observers;

use App\Models\Subscriber;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class SubscriberActionObserver
{
    public function created(Subscriber $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Subscriber'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
