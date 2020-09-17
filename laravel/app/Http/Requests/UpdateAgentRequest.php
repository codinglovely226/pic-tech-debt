<?php

namespace App\Http\Requests;

use App\Agent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAgentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('agent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'agent_reference_name'   => [
                'string',
                'max:2048',
                'required',
            ],
            'agent_reference_url'    => [
                'string',
                'max:191',
                'nullable',
            ],
            'agent_reference_source' => [
                'string',
                'max:191',
                'nullable',
            ],
        ];
    }
}
