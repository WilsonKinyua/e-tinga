<?php

namespace App\Observers;

use App\Models\ContactMessage;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class ContactMessageActionObserver
{
    public function created(ContactMessage $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'ContactMessage'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
