<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IsotoCountry extends Model
{
    public $table = 'isoto_countries';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'country_name',
        'iso_alpha_2',
        'iso_alpha_3',
        'iso_un_m_49',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function isoAlpha2Organisations()
    {
        return $this->hasMany(Organisation::class, 'iso_alpha_2_id', 'id');
    }

    public function countryTeams()
    {
        return $this->hasMany(Team::class, 'country_id', 'id');
    }
}
