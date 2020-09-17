<?php

use Illuminate\Database\Seeder;
use App\Site;
use App\DashboardItem;

class TblDashboardItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tblDashboardItem')->delete();
        
        \DB::table('tblDashboardItem')->insert(array (
            0 => 
            array (
                'idDashboardItem' => 1,
                'id_Site' => Site::where('SiteName', 'DEV PIC')->firstOrFail()->idtblSite,
                'loc_x' => 0,
                'loc_y' => 0,
                'width' => 8,
                'height' => 4,
                'QueryName' => '*byhour',
                'Title' => 'Calls by hour',
            ),
            1 => 
            array (
                'idDashboardItem' => 2,
                'id_Site' => Site::where('SiteName', 'DEV PIC')->firstOrFail()->idtblSite,
                'loc_x' => 8,
                'loc_y' => 0,
                'width' => 4,
                'height' => 4,
                'QueryName' => '*bymonth',
                'Title' => 'Calls by Month',
            ),
            2 => 
            array (
                'idDashboardItem' => 3,
                'id_Site' => Site::where('SiteName', 'DEV PIC')->firstOrFail()->idtblSite,
                'loc_x' => 0,
                'loc_y' => 4,
                'width' => 4,
                'height' => 4,
                'QueryName' => '*bydayofweek',
                'Title' => 'Calls by Day of Week',
            ),
            3 => 
            array (
                'idDashboardItem' => 4,
                'id_Site' => Site::where('SiteName', 'DEV PIC')->firstOrFail()->idtblSite,
                'loc_x' => 4,
                'loc_y' => 4,
                'width' => 4,
                'height' => 4,
                'QueryName' => '*byyear',
                'Title' => 'Calls by Year',
            ),
            4 => 
            array (
                'idDashboardItem' => 5,
                'id_Site' => Site::where('SiteName', 'DEV PIC')->firstOrFail()->idtblSite,
                'loc_x' => 8,
                'loc_y' => 0,
                'width' => 4,
                'height' => 4,
                'QueryName' => '*bystate',
                'Title' => 'Calls by State',
            ),
        ));
        
        
    }
}
