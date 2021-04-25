<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactMessagesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_message_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactMessages = ContactMessage::all();

        return view('admin.contactMessages.index', compact('contactMessages'));
    }

    public function show(ContactMessage $contactMessage)
    {
        abort_if(Gate::denies('contact_message_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactMessages.show', compact('contactMessage'));
    }
}
