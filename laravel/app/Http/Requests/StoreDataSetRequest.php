<?php

namespace App\Http\Requests;

use App\DataSet;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreDataSetRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('data_set_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name'   => [
                'string',
                'min:5',
                'required',
            ],
            'source' => [
                'string',
                'nullable',
            ],
        ];
    }
}
