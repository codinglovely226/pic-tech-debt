<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $table = 'sites';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'site_name',
        'shortcode',
        'site_default_time_zone',
        'organisation_id',
        'country_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function siteUsers()
    {
        return $this->hasMany(User::class, 'site_id', 'id');
    }

    public function siteSpecialists()
    {
        return $this->belongsToMany(Specialist::class);
    }

    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }

    public function country()
    {
        return $this->belongsTo(IsotoCountry::class, 'country_id');
    }
}
