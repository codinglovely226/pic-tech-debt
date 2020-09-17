<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idDashboardItem
 * @property int $id_Site
 * @property int $loc_x
 * @property int $loc_y
 * @property int $width
 * @property int $height
 * @property string $QueryName
 * @property string $Title
 * @property TblSite $tblSite
 */
class DashboardItem extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tblDashboardItem';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idDashboardItem';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['id_Site', 'loc_x', 'loc_y', 'width', 'height', 'QueryName', 'Title'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tblSite()
    {
        return $this->belongsTo('App\Site', 'id_Site', 'idtblSite');
    }
}
