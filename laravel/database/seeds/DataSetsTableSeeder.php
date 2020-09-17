<?php

use Illuminate\Database\Seeder;

class DataSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_sets')->delete();
        
        \DB::table('data_sets')->insert(array (
            0 => 
            array (
                'created_at' => '2020-08-04 08:31:37',
                'deleted_at' => NULL,
                'id' => 1,
                'name' => 'Dev Agent Set',
                'source' => 'dev',
                'updated_at' => '2020-08-06 03:04:30',
            ),
        ));
        
        
    }
}