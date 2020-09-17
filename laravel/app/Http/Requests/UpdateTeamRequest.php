<?php

namespace App\Http\Requests;

use App\Team;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTeamRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('team_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'            => [
                'string',
                'required',
            ],
            'shortcode'       => [
                'string',
                'min:6',
                'max:32',
                'required',
            ],
            'timezone'        => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'organisation_id' => [
                'required',
                'integer',
            ],
            'country_id'      => [
                'required',
                'integer',
            ],
            'region'          => [
                'string',
                'nullable',
            ],
        ];
    }
}
