<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public $table = 'agents';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'agent_reference_name',
        'agent_reference_url',
        'agent_reference_source',
        'dataset_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function dataset()
    {
        return $this->belongsTo(DataSet::class, 'dataset_id');
    }
}
