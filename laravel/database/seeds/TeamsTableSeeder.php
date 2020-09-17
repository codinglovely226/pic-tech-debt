<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'country_id' => 14,
                'created_at' => '2020-08-04 08:15:37',
                'deleted_at' => NULL,
                'id' => 1,
                'name' => 'Dev PIC',
                'organisation_id' => 1,
                'shortcode' => 'DEVPIC',
                'timezone' => 8,
                'updated_at' => '2020-08-04 08:15:37',
            ),
        ));
        
        
    }
}