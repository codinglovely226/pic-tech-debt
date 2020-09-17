<?php

namespace App\Http\Requests;

use App\SiteDataSet;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSiteDataSetRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('site_data_set_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'datasets.*' => [
                'integer',
            ],
            'datasets'   => [
                'required',
                'array',
            ],
            'team_id'    => [
                'required',
                'integer',
            ],
        ];
    }
}
