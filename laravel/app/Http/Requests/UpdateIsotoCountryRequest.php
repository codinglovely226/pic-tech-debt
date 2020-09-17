<?php

namespace App\Http\Requests;

use App\IsotoCountry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIsotoCountryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('isoto_country_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'country_name' => [
                'string',
                'max:64',
                'nullable',
            ],
            'iso_alpha_2'  => [
                'string',
                'max:2',
                'required',
                'unique:isoto_countries,iso_alpha_2,' . request()->route('isoto_country')->id,
            ],
            'iso_alpha_3'  => [
                'string',
                'max:3',
                'nullable',
            ],
            'iso_un_m_49'  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
