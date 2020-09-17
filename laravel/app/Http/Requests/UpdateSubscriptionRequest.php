<?php

namespace App\Http\Requests;

use App\Subscription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSubscriptionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('subscription_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'organisation_id'    => [
                'required',
                'integer',
            ],
            'subscription_type'  => [
                'required',
            ],
            'subscription_start' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'duration'           => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
