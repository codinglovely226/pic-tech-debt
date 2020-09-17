<?php

namespace App\Http\Requests;

use App\Site;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSiteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('site_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'site_name'              => [
                'string',
                'max:45',
                'required',
            ],
            'shortcode'              => [
                'string',
                'max:32',
                'required',
            ],
            'site_default_time_zone' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'country_id'             => [
                'required',
                'integer',
            ],
        ];
    }
}
