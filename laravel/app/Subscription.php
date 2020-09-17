<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public $table = 'subscriptions';

    const SUBSCRIPTION_TYPE_SELECT = [
        'normal' => 'Normal',
        'hinari' => 'Hinari',
    ];

    protected $dates = [
        'subscription_start',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'organisation_id',
        'subscription_type',
        'subscription_start',
        'duration',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }

    public function getSubscriptionStartAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setSubscriptionStartAttribute($value)
    {
        $this->attributes['subscription_start'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
