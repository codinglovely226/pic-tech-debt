<?php

namespace App\Http\Requests;

use App\Organisation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrganisationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('organisation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'organisation_name'     => [
                'string',
                'max:128',
                'required',
            ],
            'organisation_street'   => [
                'string',
                'max:128',
                'nullable',
            ],
            'organisation_street_2' => [
                'string',
                'max:128',
                'nullable',
            ],
            'organisation_city'     => [
                'string',
                'max:45',
                'nullable',
            ],
            'organisation_postcode' => [
                'string',
                'max:12',
                'nullable',
            ],
            'organisation_state'    => [
                'string',
                'max:45',
                'nullable',
            ],
        ];
    }
}
