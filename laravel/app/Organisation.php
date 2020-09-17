<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Organisation extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    public $table = 'organisations';

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'organisation_name',
        'organisation_street',
        'organisation_street_2',
        'organisation_city',
        'organisation_postcode',
        'organisation_state',
        'iso_alpha_2_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function organisationSubscriptions()
    {
        return $this->hasMany(Subscription::class, 'organisation_id', 'id');
    }

    public function organisationTeams()
    {
        return $this->hasMany(Team::class, 'organisation_id', 'id');
    }

    public function iso_alpha_2()
    {
        return $this->belongsTo(IsotoCountry::class, 'iso_alpha_2_id');
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
}
