<?php

namespace App\Http\Requests;

use App\Models\ContactMessage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyContactMessageRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_message_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:contact_messages,id',
        ];
    }
}
