<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ContactMessageResource;
use App\Models\ContactMessage;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactMessagesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_message_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactMessageResource(ContactMessage::all());
    }

    public function show(ContactMessage $contactMessage)
    {
        abort_if(Gate::denies('contact_message_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ContactMessageResource($contactMessage);
    }
}
