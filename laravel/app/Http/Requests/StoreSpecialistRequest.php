<?php

namespace App\Http\Requests;

use App\Specialist;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSpecialistRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('specialist_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'specialist_name' => [
                'string',
                'max:191',
                'nullable',
            ],
            'specialty'       => [
                'string',
                'max:191',
                'nullable',
            ],
            'sites.*'         => [
                'integer',
            ],
            'sites'           => [
                'array',
            ],
        ];
    }
}
