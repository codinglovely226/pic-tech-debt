<?php

namespace App\Http\Requests;

use App\SiteDataSet;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySiteDataSetRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('site_data_set_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:site_data_sets,id',
        ];
    }
}
