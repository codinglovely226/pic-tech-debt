<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataSet extends Model
{
    use SoftDeletes;

    public $table = 'data_sets';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'source',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
