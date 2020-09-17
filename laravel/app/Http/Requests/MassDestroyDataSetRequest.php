<?php

namespace App\Http\Requests;

use App\DataSet;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyDataSetRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('data_set_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:data_sets,id',
        ];
    }
}
