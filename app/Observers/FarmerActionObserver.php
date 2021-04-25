<?php

namespace App\Observers;

use App\Models\Farmer;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class FarmerActionObserver
{
    public function created(Farmer $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Farmer'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
