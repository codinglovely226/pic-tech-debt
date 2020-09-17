<?php

namespace App;

use Carbon\Carbon;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Phoenix\EloquentMeta\MetaTrait;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Support\Facades\Log;

class User extends Authenticatable implements JWTSubject
{
    use SoftDeletes, Notifiable, MetaTrait, MultiTenantModelTrait;

    public $table = 'users';

    const USER_LOGGEDIN_STATE_RADIO = [

    ];

    protected $hidden = [
        'remember_token',
        'password',
    ];

    const USER_JOB_SELECT = [
        'SPI'        => 'SPI',
        'Specialist' => 'Specialist',
    ];

    protected $dates = [
        'email_verified_at',
        'user_login_time',
        'user_log_out_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'user_loggedin_state',
        'user_login_time',
        'user_login_hash',
        'user_log_out_time',
        'user_phone',
        'user_job',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

     /**
      * Get the identifier that will be stored in the subject claim of the JWT.
      *
      * @return mixed
      */
     public function getJWTIdentifier() {
		 Log::debug('in getJWTIdentifier');
          return $this->getKey();
     }

     /**
      * Return a key value array, containing any custom claims to be added to the JWT.
      *
      * @return array
      */
     public function getJWTCustomClaims() {
          return [
               'name'               => $this->name,
               'email'              => $this->email,
               //'roles'              => $this->roles->pluck('name')->toArray(),
               ////'abilities'          => $this->getAbilities()->pluck('name')->toArray(),
               //'org'                => $this->team->organisation->pluck('organisation_name')->toArray(),
               'job'                => $this->user_job,
               'phone'              => $this->user_phone,
               //'org_street'         => $this->team->organisation->pluck('organisation_street')->toArray(),
               //'org_suburb'         => $this->team->organisation->pluck('organisation_city')->toArray(),
               //'org_state'          => $this->team->organisation->pluck('organisation_state')->toArray(),
               //'org_postcode'       => $this->team->organisation->pluck('organisation_postcode')->toArray(),
               //'org_country'        => $this->team->organisation->IsotoCountry->pluck('country_name')->toArray(),
               //'site_id'            => $this->team()->pluck('id')->all(), //$this->team->id,
               //'site_shortcode'     => $this->team()->pluck('shortcode')->all(), //$this->team->shortcode,
               ////'theme'              => $this->getMeta('theme'),
               'application_key_id' => config('app.application_key_id'),
               'application_key'    => config('app.application_keys')->{config('app.application_key_id')},
               'couch_uri'          => sprintf('%s/%s', config('database.couchdb.uri'), config('database.couchdb.database')),
               'couch_roles'        => config('database.couchdb.spa_roles'),
               'couch_token'        => hash_hmac('sha1', $this->email, config('database.couchdb.secret')),
          ];
     }

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }
    
    public function getIsSiteAdminAttribute()
	{
	    // just in case we'll allow global admins to be siteadmins
	    return $this->is_admin || $this->roles()->where('id', 3)->exists();
	}

    public function userUserAlerts()
    {
        return $this->belongsToMany(UserAlert::class);
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getUserLoginTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setUserLoginTimeAttribute($value)
    {
        $this->attributes['user_login_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getUserLogOutTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setUserLogOutTimeAttribute($value)
    {
        $this->attributes['user_log_out_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
