<?php

use Illuminate\Database\Seeder;

class OrganisationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organisations')->delete();
        
        \DB::table('organisations')->insert(array (
            0 => 
            array (
                'created_at' => '2020-08-04 08:14:43',
                'deleted_at' => NULL,
                'id' => 1,
                'iso_alpha_2_id' => 14,
                'organisation_city' => NULL,
                'organisation_name' => 'Test Org',
                'organisation_postcode' => NULL,
                'organisation_state' => NULL,
                'organisation_street' => NULL,
                'organisation_street_2' => NULL,
                'updated_at' => '2020-08-04 08:14:43',
            ),
        ));
        
        
    }
}