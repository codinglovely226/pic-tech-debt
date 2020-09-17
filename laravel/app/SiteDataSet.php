<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteDataSet extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'site_data_sets';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    public function datasets()
    {
        return $this->belongsToMany(DataSet::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
