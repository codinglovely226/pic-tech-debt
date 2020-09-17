<?php

use Illuminate\Database\Seeder;

class AgentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agents')->delete();
        
        \DB::table('agents')->insert(array (
            0 => 
            array (
                'agent_reference_name' => 'test agent',
                'agent_reference_source' => 'where did we get it - obsolete actually',
                'agent_reference_url' => 'https://the.url',
                'created_at' => '2020-08-04 08:59:29',
                'dataset_id' => 1,
                'id' => 1,
                'updated_at' => '2020-08-04 08:59:29',
            ),
            1 => 
            array (
                'agent_reference_name' => '1,1,1-Trichloroethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=76',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'agent_reference_name' => '1,1,2,2-Tetrachloroethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=156',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 3,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'agent_reference_name' => '1,1,2-Trichloroethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=155',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 4,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'agent_reference_name' => '1,1-Dichloroethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=129',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 5,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'agent_reference_name' => '1,1-Dichloroethene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=130',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 6,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'agent_reference_name' => '1,2,3 Trichloropropane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=186',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 7,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'agent_reference_name' => '1,2-Dibromo-3-Chloropropane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=166',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 8,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'agent_reference_name' => '1,2-Dibromoethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=131',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 9,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'agent_reference_name' => '1,2-Dichloroethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=110',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 10,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'agent_reference_name' => '1,2-Dichloroethene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=82',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 11,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'agent_reference_name' => '1,2-Dichloropropane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=162',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 12,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'agent_reference_name' => '1,2-Diphenylhydrazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=198',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 13,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'agent_reference_name' => '1,3 Dinitrobenzene & 1,3,5 Trinitrobenzene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=164',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 14,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'agent_reference_name' => '1,3,5 Trinitrobenzene & 1,3 Dinitrobenzene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=241',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 15,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'agent_reference_name' => '1,3-Butadiene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=81',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 16,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'agent_reference_name' => '1,4-Dioxane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=199',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 17,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'agent_reference_name' => '1-Bromopropane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=285',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 18,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'agent_reference_name' => '2,3-Benzofuran',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=187',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 19,
                'updated_at' => NULL,
            ),
            19 => 
            array (
            'agent_reference_name' => '2,4,6-Trinitrotoluene (TNT)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=125',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 20,
                'updated_at' => NULL,
            ),
            20 => 
            array (
            'agent_reference_name' => '2,4-Dichlorophenoxyacetic Acid (2,4-D)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=288',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 21,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'agent_reference_name' => '2-Butanone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=60',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 22,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'agent_reference_name' => '2-Butoxyethanol and 2-Butoxyethanol Acetate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=61',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 23,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'agent_reference_name' => '2-Hexanone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=134',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 24,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'agent_reference_name' => 'Acarbose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 25,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'agent_reference_name' => 'ACE-inhibitors',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/ace-inhibitors/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 26,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'agent_reference_name' => 'Acepromazine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 27,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'agent_reference_name' => 'Acetaldehyde',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 28,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'agent_reference_name' => 'Acetaminophen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/acetaminophen/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 29,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'agent_reference_name' => 'Acetazolamide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/acetazol.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 30,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'agent_reference_name' => 'Acetic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 31,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'agent_reference_name' => 'Acetone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=1',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 32,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'agent_reference_name' => 'Acetylcysteine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 33,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'agent_reference_name' => 'Acetylene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 34,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'agent_reference_name' => 'Acetylsalicylic acid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/aspirin.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 35,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'agent_reference_name' => 'Aciclovir',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 36,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'agent_reference_name' => 'Acids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 37,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'agent_reference_name' => 'Acitretin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 38,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'agent_reference_name' => 'Acohols-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 39,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'agent_reference_name' => 'Aconitum napellus spp. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/aconitum.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 40,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'agent_reference_name' => 'Acriflavinium chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 41,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'agent_reference_name' => 'Acrolein',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=102',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 42,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'agent_reference_name' => 'Acrylamide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim652.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 43,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'agent_reference_name' => 'Acrylates',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 44,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'agent_reference_name' => 'Acrylonitrile',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=78',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 45,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'agent_reference_name' => 'ACTH',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 46,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'agent_reference_name' => 'Adalimumab',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 47,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'agent_reference_name' => 'Adenia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 48,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'agent_reference_name' => 'Adenosine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 49,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'agent_reference_name' => 'Adhesive-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 50,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'agent_reference_name' => 'Adrenaline ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 51,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'agent_reference_name' => 'African Evergreen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/african-evergreen/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 52,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'agent_reference_name' => 'African Wonder Tree',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/african-wonder-tree/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 53,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'agent_reference_name' => 'Agalsidase',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 54,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'agent_reference_name' => 'Agent-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 55,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'agent_reference_name' => 'Agomelatine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 56,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'agent_reference_name' => 'Alachlor',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 57,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'agent_reference_name' => 'Albendazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 58,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'agent_reference_name' => 'Albumin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 59,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'agent_reference_name' => 'Alcohol-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 60,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'agent_reference_name' => 'Aldicarb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 61,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'agent_reference_name' => 'Aldosterone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 62,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'agent_reference_name' => 'Aldrin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim573.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 63,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'agent_reference_name' => 'Alendronic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 64,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'agent_reference_name' => 'Aleurites cordata',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 65,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'agent_reference_name' => 'Alfaxalone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 66,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'agent_reference_name' => 'Algae-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 67,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'agent_reference_name' => 'Alginic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 68,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'agent_reference_name' => 'Alkalis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg012.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 69,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'agent_reference_name' => 'Allium species',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 70,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'agent_reference_name' => 'Allopurinol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim020f.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 71,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'agent_reference_name' => 'Allyl Alcohol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 72,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'agent_reference_name' => 'Allyl Chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 73,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'agent_reference_name' => 'Almagate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 74,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'agent_reference_name' => 'Almond oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 75,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'agent_reference_name' => 'Alocasia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/alocasia/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 76,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'agent_reference_name' => 'Aloe Vera',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/aloe-vera/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 77,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'agent_reference_name' => 'Alprazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim199.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 78,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'agent_reference_name' => 'Alprenolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 79,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'agent_reference_name' => 'Alprostadil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 80,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'agent_reference_name' => 'Alum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 81,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'agent_reference_name' => 'Aluminium chlorohydrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 82,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'agent_reference_name' => 'Aluminium clofibrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 83,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'agent_reference_name' => 'Aluminium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 84,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'agent_reference_name' => 'Aluminium hydroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 85,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'agent_reference_name' => 'Aluminium sulphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 86,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'agent_reference_name' => 'Aluminium zirconium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 87,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'agent_reference_name' => 'Aluminum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=34',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 88,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'agent_reference_name' => 'Amanita palloides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 89,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'agent_reference_name' => 'Amanita phalloides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 90,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'agent_reference_name' => 'Amantadine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 91,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'agent_reference_name' => 'Amaryllis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/amaryllis/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 92,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'agent_reference_name' => 'Amatoxins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/fungi/amatox.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 93,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'agent_reference_name' => 'Ambien',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/ambien/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 94,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'agent_reference_name' => 'American Bittersweet',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/american-bittersweet/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 95,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'agent_reference_name' => 'Americium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=158',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 96,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'agent_reference_name' => 'Amidinohydrazones',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 97,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'agent_reference_name' => 'Amikacin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 98,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'agent_reference_name' => 'Amiloride Hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim026.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 99,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'agent_reference_name' => 'Aminita muscaria, amanita pantherina and others',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/fungi/pimg026.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 100,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'agent_reference_name' => 'Amino acids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 101,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'agent_reference_name' => 'Aminocaproic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 102,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'agent_reference_name' => 'Aminogluthetimide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 103,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'agent_reference_name' => 'Aminophylline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 104,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'agent_reference_name' => 'Amiodarone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 105,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'agent_reference_name' => 'Amisulpride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 106,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'agent_reference_name' => 'Amitraz',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/amitraz/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 107,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'agent_reference_name' => 'Amitriptyline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 108,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'agent_reference_name' => 'Amlodipine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 109,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'agent_reference_name' => 'Ammonia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=2',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 110,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'agent_reference_name' => 'Ammonium Bifluoride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 111,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'agent_reference_name' => 'Ammonium carbonate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 112,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'agent_reference_name' => 'Ammonium chloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 113,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'agent_reference_name' => 'Ammonium hydrogen bifluoride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 114,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'agent_reference_name' => 'Ammonium hydroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 115,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'agent_reference_name' => 'Ammonium nitrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 116,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'agent_reference_name' => 'Ammonium persulfate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 117,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'agent_reference_name' => 'Ammoniun phosphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 118,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'agent_reference_name' => 'Amodiaquine Hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/amodiaqn.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 119,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'agent_reference_name' => 'Amorolfine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 120,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'agent_reference_name' => 'Amoxicillin and enzyme inhibitor',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 121,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'agent_reference_name' => 'Amoxycillin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 122,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'agent_reference_name' => 'Amphetamines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pimg009.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 123,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'agent_reference_name' => 'Amphotericin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 124,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'agent_reference_name' => 'Ampicillin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 125,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'agent_reference_name' => 'Amyl acetate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 126,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'agent_reference_name' => 'Amyl alcohols',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 127,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'agent_reference_name' => 'Amyl nitrite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 128,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'agent_reference_name' => 'Anabolic steroids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pimg007.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 129,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'agent_reference_name' => 'Anastrozole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 130,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'agent_reference_name' => 'Androgens',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 131,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'agent_reference_name' => 'Andromeda Japonica',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/andromeda-japonica/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 132,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'agent_reference_name' => 'Anemone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 133,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'agent_reference_name' => 'Antivenom',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 134,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'agent_reference_name' => 'Apixaban',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 135,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'agent_reference_name' => 'Apomorphine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 136,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'agent_reference_name' => 'Apple Leaf Croton',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/apple-leaf-croton/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 137,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'agent_reference_name' => 'Apricot',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/apricot/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 138,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'agent_reference_name' => 'Aripiprazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 139,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'agent_reference_name' => 'Arrowhead Vine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/arrowhead-vine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 140,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'agent_reference_name' => 'Arsenic',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg042.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 141,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'agent_reference_name' => 'Arsenic oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 142,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'agent_reference_name' => 'Arsine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim044.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 143,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'agent_reference_name' => 'Arum species',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pimg06fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 144,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'agent_reference_name' => 'Asbestos',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=4',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 145,
                'updated_at' => NULL,
            ),
            145 => 
            array (
            'agent_reference_name' => 'Ascorbic acid (Vitamin C)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/ascorbic.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 146,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'agent_reference_name' => 'Asenapine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 147,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'agent_reference_name' => 'Asparagus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 148,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'agent_reference_name' => 'Asparagus Fern',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/asparagus-fern/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 149,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'agent_reference_name' => 'Aspartame',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 150,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'agent_reference_name' => 'Asphalt',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 151,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'agent_reference_name' => 'Aspirin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/aspirin/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 152,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'agent_reference_name' => 'Astemizole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 153,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'agent_reference_name' => 'Asthma Inhaler',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/asthma-inhaler/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 154,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'agent_reference_name' => 'Atenolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 155,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'agent_reference_name' => 'Atomoxetine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 156,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'agent_reference_name' => 'Atorvastatin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 157,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'agent_reference_name' => 'Atractylis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 158,
                'updated_at' => NULL,
            ),
            158 => 
            array (
            'agent_reference_name' => 'Atrax robustus (Funnel web spider)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/animal/atrax.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 159,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'agent_reference_name' => 'Atrazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=59',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 160,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'agent_reference_name' => 'Atropa belladonna',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 161,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'agent_reference_name' => 'Atropine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 162,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'agent_reference_name' => 'Auranofin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 163,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'agent_reference_name' => 'Automotive/Marine-battery',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 164,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'agent_reference_name' => 'Autumn Crocus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/autumn-crocus/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 165,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'agent_reference_name' => 'Avermectines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 166,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'agent_reference_name' => 'Avocado',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/avocado/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 167,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'agent_reference_name' => 'Azalea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/azalea/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 168,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'agent_reference_name' => 'Azathioprine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/azathiop.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 169,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'agent_reference_name' => 'Azelastine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 170,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'agent_reference_name' => 'Azide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 171,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'agent_reference_name' => 'Azithromycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 172,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'agent_reference_name' => 'Barium sulfate containing X-ray contrast media',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 173,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'agent_reference_name' => 'Basiliximab',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 174,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'agent_reference_name' => 'Batteries',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/batteries/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 175,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'agent_reference_name' => 'BCG vaccine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 176,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'agent_reference_name' => 'Bear Grass',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/beargrass/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 177,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'agent_reference_name' => 'Beclometasone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 178,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'agent_reference_name' => 'Bee',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 179,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'agent_reference_name' => 'Beech Trees',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/beech-trees/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 180,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'agent_reference_name' => 'Beetle',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 181,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'agent_reference_name' => 'Begonia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 182,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'agent_reference_name' => 'Belladonna',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/belladonna/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 183,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'agent_reference_name' => 'Bendiocarb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 184,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'agent_reference_name' => 'Benomyl-Benlate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 185,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'agent_reference_name' => 'benzalkonium chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 186,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'agent_reference_name' => 'Benzatropine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 187,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'agent_reference_name' => 'Benzene ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim063.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 188,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'agent_reference_name' => 'Benzhexol hydrochloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 189,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'agent_reference_name' => 'Benzidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=105',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 190,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'agent_reference_name' => 'Benzocaine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 191,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'agent_reference_name' => 'Benzodiazepines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pimg008.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 192,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'agent_reference_name' => 'Benzoyl Peroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 193,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'agent_reference_name' => 'Benzoylphenylurea Pesticides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 194,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'agent_reference_name' => 'Benzphetamine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim061.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 195,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'agent_reference_name' => 'Benzydamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 196,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'agent_reference_name' => 'Benzyl Alcohol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 197,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'agent_reference_name' => 'Benzyl Benzoate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 198,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'agent_reference_name' => 'Benzylpenicillin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 199,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'agent_reference_name' => 'Berberis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 200,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'agent_reference_name' => 'Beryllium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=33',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 201,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'agent_reference_name' => 'Beryllium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 202,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'agent_reference_name' => 'Beta Blocking agents ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 203,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'agent_reference_name' => 'Betahistine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 204,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'agent_reference_name' => 'Betamethasone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 205,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'agent_reference_name' => 'Betaxolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 206,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'agent_reference_name' => 'Bethanechol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 207,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'agent_reference_name' => 'Bicalutamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 208,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'agent_reference_name' => 'Bifonazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 209,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'agent_reference_name' => 'Bimatoprost',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 210,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'agent_reference_name' => 'Biotin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 211,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'agent_reference_name' => 'Biperiden',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 212,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'agent_reference_name' => 'Bipiridinum herbicides-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 213,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'agent_reference_name' => 'Bird',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 214,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'agent_reference_name' => 'Bird of Paradise',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/bird-of-paradise/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 215,
                'updated_at' => NULL,
            ),
            215 => 
            array (
            'agent_reference_name' => 'Bis(2-chloroethyl) Ether',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=159',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 216,
                'updated_at' => NULL,
            ),
            216 => 
            array (
            'agent_reference_name' => 'Bis(chloromethyl) Ether',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=188',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 217,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'agent_reference_name' => 'Bisacodyl',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 218,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'agent_reference_name' => 'Bismuth compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 219,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'agent_reference_name' => 'Bismuth subcitrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 220,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'agent_reference_name' => 'Bismuth subnitrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 221,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'agent_reference_name' => 'Bisoprolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 222,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'agent_reference_name' => 'Bisphosphonates',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 223,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'agent_reference_name' => 'Black Locust',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/black-locust/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 224,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'agent_reference_name' => 'Black Widow Spider',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/black-widow-spider/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 225,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'agent_reference_name' => 'Bleeding Hearts',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/bleeding-hearts/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 226,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'agent_reference_name' => 'Bleomycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 227,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'agent_reference_name' => 'Blister Agents HN-1HN-2HN-3 Nitrogen Mustards',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=189',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 228,
                'updated_at' => NULL,
            ),
            228 => 
            array (
            'agent_reference_name' => 'Blister Agents: Lewisite (L), Mustard-Lewisite Mixture (HL)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=190',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 229,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'agent_reference_name' => 'Blister Agents: Sulfur Mustard Agent H/HD, Sulfur Mustard Agent HT',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=191',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 230,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'agent_reference_name' => 'Bloodroot',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/bloodroot/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 231,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'agent_reference_name' => 'Bluebonnet',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/bluebonnet/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 232,
                'updated_at' => NULL,
            ),
            232 => 
            array (
            'agent_reference_name' => 'Blue-green Algae (Cyanobacteria)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/blue-green-algae/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 233,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'agent_reference_name' => 'Bone Meal & Blood Meal',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/bone-meal/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 234,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'agent_reference_name' => 'Bonyfish-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 235,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'agent_reference_name' => 'Bopindolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 236,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'agent_reference_name' => 'Boraginaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 237,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'agent_reference_name' => 'Boric acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 238,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'agent_reference_name' => 'Boron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=80',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 239,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'agent_reference_name' => 'Boron compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 240,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'agent_reference_name' => 'Botulinum antitoxin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 241,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'agent_reference_name' => 'Botulinum toxin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 242,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'agent_reference_name' => 'Boxwood Tree',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/boxwood-tree/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 243,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'agent_reference_name' => 'Branching Ivy',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/branching-ivy/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 244,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'agent_reference_name' => 'Brassica',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 245,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'agent_reference_name' => 'Bread Dough',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/bread-dough/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 246,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'agent_reference_name' => 'Bretylium tosilate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 247,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'agent_reference_name' => 'Brimonidine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 248,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'agent_reference_name' => 'Brodifacoum ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim077.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 249,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'agent_reference_name' => 'Bromadiolone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 250,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'agent_reference_name' => 'Bromates',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 251,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'agent_reference_name' => 'Bromazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim281.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 252,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'agent_reference_name' => 'Bromelain',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 253,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'agent_reference_name' => 'Bromethalin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/bromethalin/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 254,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'agent_reference_name' => 'Bromhexine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 255,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'agent_reference_name' => 'Bromides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 256,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'agent_reference_name' => 'Bromine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim080.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 257,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'agent_reference_name' => 'Bromine compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 258,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'agent_reference_name' => 'Bromocriptine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 259,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'agent_reference_name' => 'Bromodichloromethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=127',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 260,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'agent_reference_name' => 'Bromoform & Dibromochloromethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=128',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 261,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'agent_reference_name' => 'Bromomethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=160',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 262,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'agent_reference_name' => 'Bromoxynil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 263,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'agent_reference_name' => 'Brompheniramine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 264,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'agent_reference_name' => 'Brompheniramine, combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 265,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'agent_reference_name' => 'Brotizolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim919.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 266,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'agent_reference_name' => 'Brown Recluse Spider',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/brown-recluse-spider/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 267,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'agent_reference_name' => 'Brucella antigen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 268,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'agent_reference_name' => 'Brucellosis vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 269,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'agent_reference_name' => 'Brucine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/brucine.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 270,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'agent_reference_name' => 'Buckeye',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/buckeye/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 271,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'agent_reference_name' => 'Buddhist Pine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/buddhist-pine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 272,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'agent_reference_name' => 'Budesonide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 273,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'agent_reference_name' => 'Bufo marinus [Cane toad]',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 274,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'agent_reference_name' => 'Bumetanide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 275,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'agent_reference_name' => 'Bupivacaine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim085fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 276,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'agent_reference_name' => 'Buprenorphine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 277,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'agent_reference_name' => 'Bupropion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 278,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'agent_reference_name' => 'Burning Bush',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/burning-bush/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 279,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'agent_reference_name' => 'Buspirone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 280,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'agent_reference_name' => 'Busulfan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 281,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'agent_reference_name' => 'Butane ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim945.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 282,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'agent_reference_name' => 'Butoxyethyl nicotinate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 283,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'agent_reference_name' => 'Buttercup',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/buttercup/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 284,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'agent_reference_name' => 'Button Battery',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 285,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'agent_reference_name' => 'Butyl alcohols',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 286,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'agent_reference_name' => 'Cabergoline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 287,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'agent_reference_name' => 'Cadmium ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/cadmium.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 288,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'agent_reference_name' => 'Caesalpinia gilliesii ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim428fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 289,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'agent_reference_name' => 'Caffeine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/caffeine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 290,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'agent_reference_name' => 'Cajeput oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 291,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'agent_reference_name' => 'Caladium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/caladium/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 292,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'agent_reference_name' => 'Calcipotriene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/calcipotriene/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 293,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'agent_reference_name' => 'Calcitonin preparations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 294,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'agent_reference_name' => 'Calcitriol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 295,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'agent_reference_name' => 'Calcium alginate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 296,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'agent_reference_name' => 'Calcium carbonate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 297,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'agent_reference_name' => 'Calcium Channel Blockers',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/calcium-channel-blockers/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 298,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'agent_reference_name' => 'Calcium chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 299,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'agent_reference_name' => 'Calcium Fluoride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 300,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'agent_reference_name' => 'Calcium folinate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 301,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'agent_reference_name' => 'Calcium gluconate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 302,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'agent_reference_name' => 'Calcium glycerylphosphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 303,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'agent_reference_name' => 'Calcium hydroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 304,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'agent_reference_name' => 'Calcium Hypochlorite/Sodium Hypochlorite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=192',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 305,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'agent_reference_name' => 'Calcium lactate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 306,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'agent_reference_name' => 'Calcium lactate gluconate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 307,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'agent_reference_name' => 'Calcium nitrite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 308,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'agent_reference_name' => 'Calcium oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 309,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'agent_reference_name' => 'Calcium pantothenate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 310,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'agent_reference_name' => 'Calcium phosphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 311,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'agent_reference_name' => 'Calcium salts-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 312,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'agent_reference_name' => 'Calcium silicate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 313,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'agent_reference_name' => 'Calcium sulphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 314,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'agent_reference_name' => 'Calcium Supplements',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/calcium-supplements/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 315,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'agent_reference_name' => 'Calicivirus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 316,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'agent_reference_name' => 'Calla Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/calla-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 317,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'agent_reference_name' => 'Camazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim283.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 318,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'agent_reference_name' => 'Camphor ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/camphor.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 319,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'agent_reference_name' => 'Candelabra Cactus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/candelabra-cactus/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 320,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'agent_reference_name' => 'Candesartan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 321,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'agent_reference_name' => 'Cannabis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 322,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'agent_reference_name' => 'Cannabis sativa L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/cannabis.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 323,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'agent_reference_name' => 'Cantharidin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 324,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'agent_reference_name' => 'Capecitabine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 325,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'agent_reference_name' => 'Capsaicin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 326,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'agent_reference_name' => 'Captafol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim097.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 327,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'agent_reference_name' => 'Captan ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim098.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 328,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'agent_reference_name' => 'Captopril',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 329,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'agent_reference_name' => 'Carbachol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 330,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'agent_reference_name' => 'Carbamate-Herbicides-and-Fungicides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 331,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'agent_reference_name' => 'Carbamate-other ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 332,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'agent_reference_name' => 'Carbamates',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/carbamate/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 333,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'agent_reference_name' => 'Carbamate-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 334,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'agent_reference_name' => 'Carbamazepine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim100.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 335,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'agent_reference_name' => 'Carbaryl ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim147.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 336,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'agent_reference_name' => 'Carbide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 337,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'agent_reference_name' => 'Carbimazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 338,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'agent_reference_name' => 'Carbofuran',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 339,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'agent_reference_name' => 'Carbon dioxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 340,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'agent_reference_name' => 'Carbon disulfide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim102.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 341,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'agent_reference_name' => 'Carbon Monoxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=253',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 342,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'agent_reference_name' => 'Carbon oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 343,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'agent_reference_name' => 'Carbon Tetrachloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=35',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 344,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'agent_reference_name' => 'Carboplatin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 345,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'agent_reference_name' => 'Cardiac Glycosides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cardiac-glycosides/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 346,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'agent_reference_name' => 'Carisoprodol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 347,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'agent_reference_name' => 'carmellose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 348,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'agent_reference_name' => 'Carmustine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 349,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'agent_reference_name' => 'Carpenteria palm ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 350,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'agent_reference_name' => 'Carprofen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/carprofen/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 351,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'agent_reference_name' => 'Carteolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 352,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'agent_reference_name' => 'Cartilagenous fish-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 353,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'agent_reference_name' => 'Carvedilol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 354,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'agent_reference_name' => 'Caryophyllaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 355,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'agent_reference_name' => 'Cascara',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 356,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'agent_reference_name' => 'Castor Bean',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/castor-bean-2/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 357,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'agent_reference_name' => 'Castor oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 358,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'agent_reference_name' => 'Caterpillar',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 359,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'agent_reference_name' => 'Catha Edulis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 360,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'agent_reference_name' => 'Caustic-Alkali-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 361,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'agent_reference_name' => 'Cefaclor',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 362,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'agent_reference_name' => 'Cefalexin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 363,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'agent_reference_name' => 'Cefepime',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 364,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'agent_reference_name' => 'Celecoxib',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 365,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'agent_reference_name' => 'Cement',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 366,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'agent_reference_name' => 'Centipedes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 367,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'agent_reference_name' => 'Cephalosporins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 368,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'agent_reference_name' => 'Cesium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=107',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 369,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'agent_reference_name' => 'Cetirizine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 370,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'agent_reference_name' => 'Cetyl alcohol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 371,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'agent_reference_name' => 'Cetylpyridinium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 372,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'agent_reference_name' => 'Chalk',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 373,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'agent_reference_name' => 'Charcoal preparations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 374,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'agent_reference_name' => 'Charming Dieffenbachia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/charming-dieffenbachia/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 375,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'agent_reference_name' => 'Chemical - Unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=243',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 376,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'agent_reference_name' => 'Chenopodium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 377,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'agent_reference_name' => 'Cherry',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cherry/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 378,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'agent_reference_name' => 'Chinaberry Tree',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/chinaberry-tree/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 379,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'agent_reference_name' => 'Chinese Evergreen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/chinese-evergreen/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 380,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'agent_reference_name' => 'Chironex [Box jellyfish]',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 381,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'agent_reference_name' => 'Chives',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/chives/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 382,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'agent_reference_name' => 'Chloral hydrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 383,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'agent_reference_name' => 'Chloralose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 384,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'agent_reference_name' => 'Chlorambucil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 385,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'agent_reference_name' => 'Chloramphenicol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 386,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'agent_reference_name' => 'Chlorate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 387,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'agent_reference_name' => 'Chlorbutol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 388,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'agent_reference_name' => 'Chlordane ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim574.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 389,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'agent_reference_name' => 'Chlordecone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=118',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 390,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'agent_reference_name' => 'Chlordiazepoxide hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim321.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 391,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'agent_reference_name' => 'Chlorfenvinphos/Chlorfenvinfos',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=193',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 392,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'agent_reference_name' => 'Chlorhexidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 393,
                'updated_at' => NULL,
            ),
            393 => 
            array (
            'agent_reference_name' => 'Chlorinated Dibenzo-p-dioxins (CDDs)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=63',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 394,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'agent_reference_name' => 'Chlorinated Hydrocarbon Insecticides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 395,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'agent_reference_name' => 'Chlorine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim947.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 396,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'agent_reference_name' => 'Chlorine compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 397,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'agent_reference_name' => 'Chlorine Dioxide & Chlorite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=108',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 398,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'agent_reference_name' => 'Chlorine gas',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 399,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'agent_reference_name' => 'Chlorine oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 400,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'agent_reference_name' => 'Chlorite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 401,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'agent_reference_name' => 'Chlorobenzene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=87',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 402,
                'updated_at' => NULL,
            ),
            402 => 
            array (
            'agent_reference_name' => 'Chlorodibenzofurans (CDFs)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=194',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 403,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'agent_reference_name' => 'Chloroethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=161',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 404,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'agent_reference_name' => 'Chloroform ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim121.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 405,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'agent_reference_name' => 'Chloromethane ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 406,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'agent_reference_name' => 'Chlorophenols',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=195',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 407,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'agent_reference_name' => 'Chlorophenoxy compound-herbicides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 408,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'agent_reference_name' => 'Chloroquine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/chloroqu.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 409,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'agent_reference_name' => 'Chlorothalonil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 410,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'agent_reference_name' => 'Chlorothiazide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 411,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'agent_reference_name' => 'Chloroxylenol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 412,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'agent_reference_name' => 'Chlorphenamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 413,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'agent_reference_name' => 'Chlorphenamine, combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 414,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'agent_reference_name' => 'Chlorphentermine hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim935.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 415,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'agent_reference_name' => 'Chlorpromazine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/chlorpro.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 416,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'agent_reference_name' => 'Chlorpyrifos',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=88',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 417,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'agent_reference_name' => 'Chlorthalidone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/chlortha.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 418,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'agent_reference_name' => 'Chocolate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/chocolate/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 419,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'agent_reference_name' => 'Chokecherry',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/choke-cherry/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 420,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'agent_reference_name' => 'Cholecalciferol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cholecalciferol/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 421,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'agent_reference_name' => 'Cholera vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 422,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'agent_reference_name' => 'Choline salicylate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 423,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'agent_reference_name' => 'Choline theophyllinate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 424,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'agent_reference_name' => 'Chondroitin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 425,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'agent_reference_name' => 'Chorionic gonadotropin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 426,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'agent_reference_name' => 'Christmas Rose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/christmas-rose/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 427,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'agent_reference_name' => 'Chromium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=17',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 428,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'agent_reference_name' => 'Chrysanthemum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/chrysanthemum/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 429,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'agent_reference_name' => 'Ciclesonide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 430,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'agent_reference_name' => 'Cicuta',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 431,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'agent_reference_name' => 'Ciguatera poisoning',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 432,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'agent_reference_name' => 'Cimetidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 433,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'agent_reference_name' => 'Cinchocaine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 434,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'agent_reference_name' => 'Cineria',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cineria/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 435,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'agent_reference_name' => 'Cinnamon',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 436,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'agent_reference_name' => 'Cinnamon oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 437,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'agent_reference_name' => 'Cinolazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim920.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 438,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'agent_reference_name' => 'Ciprofloxacin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 439,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'agent_reference_name' => 'Cisapride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 440,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'agent_reference_name' => 'Cisatracurium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 441,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'agent_reference_name' => 'Cisplatin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/cisplat.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 442,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'agent_reference_name' => 'Citalopram',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 443,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'agent_reference_name' => 'Citric acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 444,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'agent_reference_name' => 'Citronella oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 445,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'agent_reference_name' => 'Cladribine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 446,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'agent_reference_name' => 'Clarithromycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 447,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'agent_reference_name' => 'Clay',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 448,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'agent_reference_name' => 'Clematis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/clematis/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 449,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'agent_reference_name' => 'Clenbuterol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 450,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'agent_reference_name' => 'Clindamycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 451,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'agent_reference_name' => 'Clintonia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 452,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'agent_reference_name' => 'Clioquinol, combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 453,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'agent_reference_name' => 'Clobazam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim921.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 454,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'agent_reference_name' => 'Clobetasone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 455,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'agent_reference_name' => 'Clofazimine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/clofaz.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 456,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'agent_reference_name' => 'Clomiphene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 457,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'agent_reference_name' => 'Clomipramine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 458,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'agent_reference_name' => 'Clonazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim326.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 459,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'agent_reference_name' => 'Clonidine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 460,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'agent_reference_name' => 'Clopidogrel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 461,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'agent_reference_name' => 'Clorazepate dipotassium ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim327.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 462,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'agent_reference_name' => 'Clortermine hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim936.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 463,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'agent_reference_name' => 'Clostebol acetate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim900.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 464,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'agent_reference_name' => 'Clostridium vaccine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 465,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'agent_reference_name' => 'Clotiazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim922.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 466,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'agent_reference_name' => 'Clotrimazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 467,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'agent_reference_name' => 'Clove oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 468,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'agent_reference_name' => 'Cloxacillin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 469,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'agent_reference_name' => 'Cloxazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim923.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 470,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'agent_reference_name' => 'Clozapine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 471,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'agent_reference_name' => 'Coagulation factor IX',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 472,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'agent_reference_name' => 'Coagulation factor VII',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 473,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'agent_reference_name' => 'Coagulation factor VIII',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 474,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'agent_reference_name' => 'Coagulation factor XIII',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 475,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'agent_reference_name' => 'Cobalt',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=64',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 476,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'agent_reference_name' => 'Cobalt ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 477,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'agent_reference_name' => 'Cocaine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim139e.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 478,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'agent_reference_name' => 'Codeine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/codeine.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 479,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'agent_reference_name' => 'Codeine phosphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 480,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'agent_reference_name' => 'Codeine, combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 481,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'agent_reference_name' => 'Cod-liver oil ointments',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 482,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'agent_reference_name' => 'Coins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/coins/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 483,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'agent_reference_name' => 'Colchicine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/colchic.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 484,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'agent_reference_name' => 'Colchicum autumnale L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim142.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 485,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'agent_reference_name' => 'Colecalciferol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 486,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'agent_reference_name' => 'Colestyramine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 487,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'agent_reference_name' => 'Colistin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 488,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'agent_reference_name' => 'Collagen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 489,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'agent_reference_name' => 'Colocasia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 490,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'agent_reference_name' => 'Colutea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 491,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'agent_reference_name' => 'Conium maculatum L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/conium.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 492,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'agent_reference_name' => 'Contact laxatives',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 493,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'agent_reference_name' => 'Conus [Cone shell]',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 494,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'agent_reference_name' => 'Convallaria',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 495,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'agent_reference_name' => 'Copper and copper salts',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg002.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 496,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'agent_reference_name' => 'Copper sulphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 497,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'agent_reference_name' => 'Coral',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 498,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'agent_reference_name' => 'Coral Snake',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/coral-snake/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 499,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'agent_reference_name' => 'Cordatum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cordatum/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 500,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('agents')->insert(array (
            0 => 
            array (
                'agent_reference_name' => 'Coriaria myrtifolia L.',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim148fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 501,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'agent_reference_name' => 'Corn Plant',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/corn-plant/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 502,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'agent_reference_name' => 'Cornflower',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cornflower/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 503,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'agent_reference_name' => 'Corticosteroids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/corticosteroids/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 504,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'agent_reference_name' => 'Cortisone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 505,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'agent_reference_name' => 'Corydalis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/corydalis/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 506,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'agent_reference_name' => 'Cotoneaster',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 507,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'agent_reference_name' => 'Cough Medicine - unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cough-medicine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 508,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'agent_reference_name' => 'Coumarin derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 509,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'agent_reference_name' => 'Cowbane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cowbane/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 510,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'agent_reference_name' => 'Cracosna',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 511,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'agent_reference_name' => 'Crassula',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 512,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'agent_reference_name' => 'Crataegus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 513,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'agent_reference_name' => 'Crayon',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 514,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'agent_reference_name' => 'Creatine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 515,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'agent_reference_name' => 'Creosote',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=18',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 516,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'agent_reference_name' => 'Cresols',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=196',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 517,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'agent_reference_name' => 'Crocus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/crocus/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 518,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'agent_reference_name' => 'Cromoglicic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 519,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'agent_reference_name' => 'Crotamiton',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 520,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'agent_reference_name' => 'Croton',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/croton/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 521,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'agent_reference_name' => 'Crotonaldehyde',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=197',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 522,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'agent_reference_name' => 'Crown of Thorns',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/crown-of-thorns/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 523,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'agent_reference_name' => 'Currants',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/currant/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 524,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'agent_reference_name' => 'Cyanides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg003.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 525,
                'updated_at' => NULL,
            ),
            25 => 
            array (
            'agent_reference_name' => 'Cyanoacrylates (Super Glue)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/super-glue/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 526,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'agent_reference_name' => 'Cyanocobalamin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 527,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'agent_reference_name' => 'Cyclamen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/cyclamen/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 528,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'agent_reference_name' => 'Cyclofenil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 529,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'agent_reference_name' => 'Cyclopentolate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 530,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'agent_reference_name' => 'Cyclophosphamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 531,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'agent_reference_name' => 'Cyclosporin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 532,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'agent_reference_name' => 'Cyfluthrin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 533,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'agent_reference_name' => 'Cypermethrin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim163.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 534,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'agent_reference_name' => 'Cyproheptadine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 535,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'agent_reference_name' => 'Cyproterone acetate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 536,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'agent_reference_name' => 'Cytarabine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 537,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'agent_reference_name' => 'Cytisus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 538,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'agent_reference_name' => 'Cytomegalovirus immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 539,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'agent_reference_name' => 'Dabigratan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 540,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'agent_reference_name' => 'Dacarbazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 541,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'agent_reference_name' => 'Daclatasvir',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 542,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'agent_reference_name' => 'Daclizumab ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 543,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'agent_reference_name' => 'Dactinomycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 544,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'agent_reference_name' => 'Daffodils',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/daffodil/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 545,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'agent_reference_name' => 'Dalteparin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 546,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'agent_reference_name' => 'Danaparoid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 547,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'agent_reference_name' => 'Danazol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 548,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'agent_reference_name' => 'Dantrolene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 549,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'agent_reference_name' => 'Dantron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 550,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'agent_reference_name' => 'Dapagliflozin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 551,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'agent_reference_name' => 'Daphne',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/daphne/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 552,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'agent_reference_name' => 'Dapsone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/dapsone.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 553,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'agent_reference_name' => 'Datura',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 554,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'agent_reference_name' => 'Daunorubicin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 555,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'agent_reference_name' => 'Daylily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/day-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 556,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'agent_reference_name' => 'DDT ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim127.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 557,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'agent_reference_name' => 'DDT, DDE, DDD',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=20',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 558,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'agent_reference_name' => 'Decongestants - Unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/decongestants/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 559,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'agent_reference_name' => 'DEET ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/deet.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 560,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'agent_reference_name' => 'Deferasirox',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 561,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'agent_reference_name' => 'Deferoxamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 562,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'agent_reference_name' => 'Delphinium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/delphinium/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 563,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'agent_reference_name' => 'Denatonium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 564,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'agent_reference_name' => 'Deramaxx',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/deramaxx/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 565,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'agent_reference_name' => 'Derris',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 566,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'agent_reference_name' => 'Desloratadine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 567,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'agent_reference_name' => 'Desmopressin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 568,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'agent_reference_name' => 'Desvenlafaxine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 569,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'agent_reference_name' => 'Detergents',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/detergents/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 570,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'agent_reference_name' => 'Detergents and  soaps - anionic and nonionic',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 571,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'agent_reference_name' => 'Detergents-cationic',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 572,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'agent_reference_name' => 'Dettol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 573,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'agent_reference_name' => 'Dexchlorpheniramine, combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 574,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'agent_reference_name' => 'Dexfenfluramine hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim939.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 575,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'agent_reference_name' => 'Dexpanthenol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 576,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'agent_reference_name' => 'Dextran',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 577,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'agent_reference_name' => 'Dextromethorphan ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim179.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 578,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'agent_reference_name' => 'Dextropropoxyphene ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim442fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 579,
                'updated_at' => NULL,
            ),
            79 => 
            array (
            'agent_reference_name' => 'Di(2-ethylhexyl)phthalate (DEHP)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=65',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 580,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'agent_reference_name' => 'Diamorphine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim261f.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 581,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'agent_reference_name' => 'Diazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim181.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 582,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'agent_reference_name' => 'Diazinon',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=90',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 583,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'agent_reference_name' => 'Diborane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=202',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 584,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'agent_reference_name' => 'Dibromopropamidine isethionate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 585,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'agent_reference_name' => 'Dibutyl Phalate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 586,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'agent_reference_name' => 'Dibutyltindichloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim586.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 587,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'agent_reference_name' => 'Dicamba',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 588,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'agent_reference_name' => 'Dichlorobenzenes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=126',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 589,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'agent_reference_name' => 'Dichlorobenzyl alcohol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 590,
                'updated_at' => NULL,
            ),
            90 => 
            array (
            'agent_reference_name' => 'Dichlorodiphenyltrichloroethane (DDT)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 591,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'agent_reference_name' => 'Dichloropropene, 1,3- ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim025.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 592,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'agent_reference_name' => 'Dichloropropenes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=163',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 593,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'agent_reference_name' => 'Dichlorvos',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=111',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 594,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'agent_reference_name' => 'Diclofenac',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 595,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'agent_reference_name' => 'Dicloxacillin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 596,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'agent_reference_name' => 'Dicoumarol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 597,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'agent_reference_name' => 'Dieffenbachia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/dieffenbachia/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 598,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'agent_reference_name' => 'Dieldrin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim575.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 599,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'agent_reference_name' => 'Diesel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 600,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'agent_reference_name' => 'Diethyl ketone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 601,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'agent_reference_name' => 'Diethyl phthalate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=112',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 602,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'agent_reference_name' => 'Diethylcarbamazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 603,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'agent_reference_name' => 'Diethylcarbamazine citrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 604,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'agent_reference_name' => 'Diethylene glycol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 605,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'agent_reference_name' => 'Diethylene Glycol Monobutyl Ether',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 606,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'agent_reference_name' => 'Diethyl-p-phenylenediamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 607,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'agent_reference_name' => 'Diethylpropion hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim937.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 608,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'agent_reference_name' => 'Diethylstilbestrol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 609,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'agent_reference_name' => 'Diethyltoluamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 610,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'agent_reference_name' => 'Difenacoum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 611,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'agent_reference_name' => 'Digitalis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 612,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'agent_reference_name' => 'Digitalis glycosides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 613,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'agent_reference_name' => 'Digitoxin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 614,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'agent_reference_name' => 'Digoxin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 615,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'agent_reference_name' => 'Digoxin Immune FAB',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 616,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'agent_reference_name' => 'Dihydralazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 617,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'agent_reference_name' => 'Dihydrocodeine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 618,
                'updated_at' => NULL,
            ),
            118 => 
            array (
            'agent_reference_name' => 'Diisopropyl Methylphosphonate (DIMP)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=203',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 619,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'agent_reference_name' => 'Diltiazem',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 620,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'agent_reference_name' => 'Dimenhydrinate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 621,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'agent_reference_name' => 'Dimercaprol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/dimercap.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 622,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'agent_reference_name' => 'Dimethicone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 623,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'agent_reference_name' => 'Dimethoate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 624,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'agent_reference_name' => 'Dimethyl dicarbonate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 625,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'agent_reference_name' => 'Dimethyl sulfate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 626,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'agent_reference_name' => 'Dimethylformamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 627,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'agent_reference_name' => 'Dimethyltoluamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 628,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'agent_reference_name' => 'Di-n-butyl Phthalate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=167',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 629,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'agent_reference_name' => 'Dinitro Phenol Group ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 630,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'agent_reference_name' => 'Dinitrochlorobenzene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 631,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'agent_reference_name' => 'Dinitrocresols',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=218',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 632,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'agent_reference_name' => 'Dinitrophenols',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=132',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 633,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'agent_reference_name' => 'Dinitrotoluenes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=165',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 634,
                'updated_at' => NULL,
            ),
            134 => 
            array (
            'agent_reference_name' => 'Di-n-octylphthalate (DNOP)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=204',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 635,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'agent_reference_name' => 'Dinoprost',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 636,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'agent_reference_name' => 'Dioscorea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 637,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'agent_reference_name' => 'Dioxacarb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 638,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'agent_reference_name' => 'Dioxane ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 639,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'agent_reference_name' => 'Dioxins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 640,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'agent_reference_name' => 'Diphenhydramine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 641,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'agent_reference_name' => 'Diphenhydramine, combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 642,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'agent_reference_name' => 'Diphenoxylate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 643,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'agent_reference_name' => 'Diphteria antitoxin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 644,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'agent_reference_name' => 'Diphtheria immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 645,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'agent_reference_name' => 'Diphtheria vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 646,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'agent_reference_name' => 'Diphtheria-hepatitis B-pertussis-tetanus-vaccine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 647,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'agent_reference_name' => 'Diphtheria-rubella-tetanus-vaccine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 648,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'agent_reference_name' => 'Dipyridamole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 649,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'agent_reference_name' => 'Diquat ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim580fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 650,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'agent_reference_name' => 'Disopyramide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 651,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'agent_reference_name' => 'Disulfiram',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 652,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'agent_reference_name' => 'Disulfoton',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=205',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 653,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'agent_reference_name' => 'Diuretic - Unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/diuretic/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 654,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'agent_reference_name' => 'Dobutamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 655,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'agent_reference_name' => 'Docetaxel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 656,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'agent_reference_name' => 'Docusate sodium, incl. combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 657,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'agent_reference_name' => 'Dogbane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/dogbane/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 658,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'agent_reference_name' => 'Dolasetron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 659,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'agent_reference_name' => 'Domoic acid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/animal/pim670.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 660,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'agent_reference_name' => 'Domperidone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 661,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'agent_reference_name' => 'Donepezil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 662,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'agent_reference_name' => 'Dopamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 663,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'agent_reference_name' => 'Dothiepin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 664,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'agent_reference_name' => 'Doxefazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim924.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 665,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'agent_reference_name' => 'Doxepin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 666,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'agent_reference_name' => 'Doxorubicin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 667,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'agent_reference_name' => 'Doxycycline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 668,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'agent_reference_name' => 'Doxylamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 669,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'agent_reference_name' => 'Dracaena',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/dracaena/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 670,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'agent_reference_name' => 'Dragon Tree',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/dragon-tree/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 671,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'agent_reference_name' => 'Droperidol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 672,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'agent_reference_name' => 'Drostanolone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim901.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 673,
                'updated_at' => NULL,
            ),
            173 => 
            array (
            'agent_reference_name' => 'Dry cell battery (Flashlight)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 674,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'agent_reference_name' => 'Dryopteris',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 675,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'agent_reference_name' => 'Duloxetine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 676,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'agent_reference_name' => 'Dumbcane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/dumbcane/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 677,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'agent_reference_name' => 'Duranta Repens',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 678,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'agent_reference_name' => 'Dutasteride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 679,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'agent_reference_name' => 'Dyes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 680,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'agent_reference_name' => 'Easter Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/easter-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 681,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'agent_reference_name' => 'Echinacea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 682,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'agent_reference_name' => 'Econazole nitrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 683,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'agent_reference_name' => 'Ecstasy',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 684,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'agent_reference_name' => 'Efavirenz',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 685,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'agent_reference_name' => 'Effexor',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/effexor/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 686,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'agent_reference_name' => 'Eformoterol fumarate dihydrate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 687,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'agent_reference_name' => 'Elaine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/elaine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 688,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'agent_reference_name' => 'Elderberry',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/elderberry/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 689,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'agent_reference_name' => 'Elephant Ear',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/elephant-ears/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 690,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'agent_reference_name' => 'Emerald Feather',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/emerald-feather/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 691,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'agent_reference_name' => 'Emollients and protectives',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 692,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'agent_reference_name' => 'Empaglifozin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 693,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'agent_reference_name' => 'Emtricitabine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 694,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'agent_reference_name' => 'Enalapril',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 695,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'agent_reference_name' => 'Encephalitis vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 696,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'agent_reference_name' => 'Endosulfan ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim576.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 697,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'agent_reference_name' => 'Endothall',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 698,
                'updated_at' => NULL,
            ),
            198 => 
            array (
            'agent_reference_name' => 'Endrin (Endrin aldehyde)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=114',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 699,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'agent_reference_name' => 'English Ivy',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/english-ivy/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 700,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'agent_reference_name' => 'Enoxaparin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 701,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'agent_reference_name' => 'Enzalutemide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 702,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'agent_reference_name' => 'Enzyme detergents',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 703,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'agent_reference_name' => 'Ephedra',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/ephedra/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 704,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'agent_reference_name' => 'Ephedrine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim209.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 705,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'agent_reference_name' => 'Epidermal Growth Factor ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 706,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'agent_reference_name' => 'Epipremnum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 707,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'agent_reference_name' => 'Epirubicin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 708,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'agent_reference_name' => 'Epoprostenol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 709,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'agent_reference_name' => 'Epoxy resins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 710,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'agent_reference_name' => 'Epoxy resins and polyamine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 711,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'agent_reference_name' => 'Eprosartan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 712,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'agent_reference_name' => 'Ergocalciferol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 713,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'agent_reference_name' => 'Ergometrine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 714,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'agent_reference_name' => 'Ergot alkaloids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 715,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'agent_reference_name' => 'Ergotamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 716,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'agent_reference_name' => 'Erythromycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 717,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'agent_reference_name' => 'Erythropoietin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 718,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'agent_reference_name' => 'Erythroxylum coca Lam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/erythrox.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 719,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'agent_reference_name' => 'Escitalopram',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 720,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'agent_reference_name' => 'Esmolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 721,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'agent_reference_name' => 'Esomeprazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 722,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'agent_reference_name' => 'Essential oils-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 723,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'agent_reference_name' => 'essentl',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 724,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'agent_reference_name' => 'Estazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim925.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 725,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'agent_reference_name' => 'Estradiol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 726,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'agent_reference_name' => 'Estriol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 727,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'agent_reference_name' => 'Estrogens',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 728,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'agent_reference_name' => 'Estrone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 729,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'agent_reference_name' => 'Etanercept',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 730,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'agent_reference_name' => 'Ethambutol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/ethambut.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 731,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'agent_reference_name' => 'Ethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 732,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'agent_reference_name' => 'Ethanol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 733,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'agent_reference_name' => 'Ethanolamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 734,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'agent_reference_name' => 'Ethanol-beverage',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 735,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'agent_reference_name' => 'Ethers',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 736,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'agent_reference_name' => 'Ethinylestradiol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim221.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 737,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'agent_reference_name' => 'Ethion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=206',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 738,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'agent_reference_name' => 'Ethionamide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/ethionam.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 739,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'agent_reference_name' => 'Ethosuximide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 740,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'agent_reference_name' => 'Ethyl acetate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 741,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'agent_reference_name' => 'Ethyl chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 742,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'agent_reference_name' => 'Ethyl ether ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 743,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'agent_reference_name' => 'Ethyl mercaptan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 744,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'agent_reference_name' => 'Ethyl methacrylate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 745,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'agent_reference_name' => 'Ethylbenzene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=66',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 746,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'agent_reference_name' => 'Ethylene Dibromide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=251',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 747,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'agent_reference_name' => 'Ethylene glycol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim227.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 748,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'agent_reference_name' => 'Ethylene Glycol Butyl Ether',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 749,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'agent_reference_name' => 'Ethylene Glycol Ethyl Ether',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 750,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'agent_reference_name' => 'Ethylene Glycol Methyl Ether',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 751,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'agent_reference_name' => 'Ethylene Oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=133',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 752,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'agent_reference_name' => 'Ethylenediamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 753,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'agent_reference_name' => 'Etizolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim926.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 754,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'agent_reference_name' => 'EtoGesic',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/etogesic/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 755,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'agent_reference_name' => 'Etonogestrel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 756,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'agent_reference_name' => 'Etoposide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 757,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'agent_reference_name' => 'Etoricoxib',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 758,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'agent_reference_name' => 'Eucalyptus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/eucalyptus/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 759,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'agent_reference_name' => 'Eucalyptus oil ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim031.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 760,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'agent_reference_name' => 'Eugenol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 761,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'agent_reference_name' => 'Euonymus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/euonymus/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 762,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'agent_reference_name' => 'Euphorbia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 763,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'agent_reference_name' => 'evening primrose oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 764,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'agent_reference_name' => 'Ezetimibe',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 765,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'agent_reference_name' => 'Famciclovir',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 766,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'agent_reference_name' => 'Family Agavaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 767,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'agent_reference_name' => 'Family Alliaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 768,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'agent_reference_name' => 'Family Aloeaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 769,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'agent_reference_name' => 'Family Amaryllidaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 770,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'agent_reference_name' => 'Family Anacardiaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 771,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'agent_reference_name' => 'Family Annonaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 772,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'agent_reference_name' => 'Family Apocynaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 773,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'agent_reference_name' => 'Family Aquifoliaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 774,
                'updated_at' => NULL,
            ),
            274 => 
            array (
            'agent_reference_name' => 'Family Aquifoliaceae (Holly)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 775,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'agent_reference_name' => 'Family Araceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 776,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'agent_reference_name' => 'Family Araliaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 777,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'agent_reference_name' => 'Family Asclepiadaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 778,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'agent_reference_name' => 'Family Asparagaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 779,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'agent_reference_name' => 'Family Asteraceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 780,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'agent_reference_name' => 'Family Begoniaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 781,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'agent_reference_name' => 'Family Berberidaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 782,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'agent_reference_name' => 'Family Bignoniaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 783,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'agent_reference_name' => 'Family Cactaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 784,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'agent_reference_name' => 'Family Cannabidaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 785,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'agent_reference_name' => 'Family Caprifoliaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 786,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'agent_reference_name' => 'Family Celastraceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 787,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'agent_reference_name' => 'Family Chenopodiaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 788,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'agent_reference_name' => 'Family Colchicaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 789,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'agent_reference_name' => 'Family Compositae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 790,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'agent_reference_name' => 'Family Convallariaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 791,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'agent_reference_name' => 'Family Convulvulaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 792,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'agent_reference_name' => 'Family Coriariaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 793,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'agent_reference_name' => 'Family Crassulaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 794,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'agent_reference_name' => 'Family Cruciferae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 795,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'agent_reference_name' => 'Family Cucurbitaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 796,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'agent_reference_name' => 'Family Dioscoreaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 797,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'agent_reference_name' => 'Family Dryopteridaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 798,
                'updated_at' => NULL,
            ),
            298 => 
            array (
            'agent_reference_name' => 'Family Ericaceae (Rhododendron and azalea)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 799,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'agent_reference_name' => 'Family Erythroxylaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 800,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'agent_reference_name' => 'Family Euphorbiaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 801,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'agent_reference_name' => 'Family Fabaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 802,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'agent_reference_name' => 'Family Fagaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 803,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'agent_reference_name' => 'Family Gentianaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 804,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'agent_reference_name' => 'Family Geraniaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 805,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'agent_reference_name' => 'Family Gesneriaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 806,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'agent_reference_name' => 'Family Grossulariaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 807,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'agent_reference_name' => 'Family Hyacinthaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 808,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'agent_reference_name' => 'Family Hydrangeaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 809,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'agent_reference_name' => 'Family Illiciaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 810,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'agent_reference_name' => 'Family Iridaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 811,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'agent_reference_name' => 'Family Labiatae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 812,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'agent_reference_name' => 'Family Lauraceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 813,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'agent_reference_name' => 'Family Leguminosae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 814,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'agent_reference_name' => 'Family Liliaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 815,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'agent_reference_name' => 'Family Loganiaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 816,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'agent_reference_name' => 'Family Malvaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 817,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'agent_reference_name' => 'Family Melanthiaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 818,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'agent_reference_name' => 'Family Moraceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 819,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'agent_reference_name' => 'Family Myristicaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 820,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'agent_reference_name' => 'Family Oleaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 821,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'agent_reference_name' => 'Family Palmae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 822,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'agent_reference_name' => 'Family Papaveraceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 823,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'agent_reference_name' => 'Family Passifloraceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 824,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'agent_reference_name' => 'Family Phytolaccaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 825,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'agent_reference_name' => 'Family Pinaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 826,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'agent_reference_name' => 'Family Polygonaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 827,
                'updated_at' => NULL,
            ),
            327 => 
            array (
            'agent_reference_name' => 'Family Proteaceae (incl. grevillea)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 828,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'agent_reference_name' => 'Family Ranunculaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 829,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'agent_reference_name' => 'Family Rosaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 830,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'agent_reference_name' => 'Family Rutaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 831,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'agent_reference_name' => 'Family Salicaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 832,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'agent_reference_name' => 'Family Scrophulariaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 833,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'agent_reference_name' => 'Family Solanaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 834,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'agent_reference_name' => 'Family Taxaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 835,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'agent_reference_name' => 'Family Thymelaeaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 836,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'agent_reference_name' => 'Family Umbelliferae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 837,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'agent_reference_name' => 'Family Verbenaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 838,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'agent_reference_name' => 'Family Viscaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 839,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'agent_reference_name' => 'Family Vitaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 840,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'agent_reference_name' => 'Family Zingiberaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 841,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'agent_reference_name' => 'Family Zygophyllaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 842,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'agent_reference_name' => 'Famotidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 843,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'agent_reference_name' => 'Fampridine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 844,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'agent_reference_name' => 'Felodipine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 845,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'agent_reference_name' => 'Fenamiphos',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 846,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'agent_reference_name' => 'Fenbendazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 847,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'agent_reference_name' => 'Fenfluramine hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim938.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 848,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'agent_reference_name' => 'Fenofibrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 849,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'agent_reference_name' => 'Fenoterol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 850,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'agent_reference_name' => 'Fenoxycarb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 851,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'agent_reference_name' => 'Fentanyl',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 852,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'agent_reference_name' => 'Fenthion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 853,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'agent_reference_name' => 'Fenugreek',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 854,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'agent_reference_name' => 'Ferns',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/ferns/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 855,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'agent_reference_name' => 'Ferric citrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 856,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'agent_reference_name' => 'Fertilizers',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/fertilizers/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 857,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'agent_reference_name' => 'Fexofenadine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 858,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'agent_reference_name' => 'Fibre glass ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 859,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'agent_reference_name' => 'Fibrinogen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 860,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'agent_reference_name' => 'Ficus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/ficus/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 861,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'agent_reference_name' => 'Fiddle-Leaf Philodendron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/fiddle-leaf-philodendron/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 862,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'agent_reference_name' => 'Filgrastim',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 863,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'agent_reference_name' => 'Finasteride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 864,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'agent_reference_name' => 'Fingolimod',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 865,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'agent_reference_name' => 'Fipronil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 866,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'agent_reference_name' => 'Firestarter Logs',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/firestarter-logs/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 867,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'agent_reference_name' => 'Fireworks',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/fireworks/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 868,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'agent_reference_name' => 'Firocoxib',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/firocoxib/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 869,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'agent_reference_name' => 'Fish oil ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 870,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'agent_reference_name' => 'Flamingo Plant',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/flamingo-plant/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 871,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'agent_reference_name' => 'Flax',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/flax/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 872,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'agent_reference_name' => 'Flea and Tick Pharmaceutical',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/flea-and-tick-medication/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 873,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'agent_reference_name' => 'Flea Collar',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/flea-collar/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 874,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'agent_reference_name' => 'Flecainide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 875,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'agent_reference_name' => 'Fluazifop',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 876,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'agent_reference_name' => 'Flucloxacillin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 877,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'agent_reference_name' => 'Fluconazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 878,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'agent_reference_name' => 'Fludarabine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 879,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'agent_reference_name' => 'Fludrocortisone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 880,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'agent_reference_name' => 'Flumazenil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 881,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'agent_reference_name' => 'Flumetasone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 882,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'agent_reference_name' => 'Flunitrazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim021.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 883,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'agent_reference_name' => 'Fluorescein',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 884,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'agent_reference_name' => 'Fluoride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 885,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'agent_reference_name' => 'Fluoride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/fluoride/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 886,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'agent_reference_name' => 'Fluorides, Hydrogen Fluoride, and Fluorine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=38',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 887,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'agent_reference_name' => 'Fluorinated hydrocarbon',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 888,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'agent_reference_name' => 'Fluorine compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 889,
                'updated_at' => NULL,
            ),
            389 => 
            array (
            'agent_reference_name' => 'Fluorine element (Group VIIa/37)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 890,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'agent_reference_name' => 'Fluorine oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 891,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'agent_reference_name' => 'Fluorouracil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 892,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'agent_reference_name' => 'Fluoxetine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim651.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 893,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'agent_reference_name' => 'Fluoxymesterone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim902.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 894,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'agent_reference_name' => 'Flupenthixol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/flupenth.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 895,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'agent_reference_name' => 'Fluphenazine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 896,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'agent_reference_name' => 'Flurazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim640.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 897,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'agent_reference_name' => 'Flurbiprofen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 898,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'agent_reference_name' => 'Flutamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 899,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'agent_reference_name' => 'Fluticasone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 900,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'agent_reference_name' => 'Fluvastatin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 901,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'agent_reference_name' => 'Fluvoxamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 902,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'agent_reference_name' => 'Folic Acid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/folicaci.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 903,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'agent_reference_name' => 'Follitropin alfa',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 904,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'agent_reference_name' => 'Follitropin beta',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 905,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'agent_reference_name' => 'Food ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 906,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'agent_reference_name' => 'Food poisoning-micro-organism-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 907,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'agent_reference_name' => 'Foreign body',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 908,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'agent_reference_name' => 'Formaldehyde',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=39',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 909,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'agent_reference_name' => 'Formic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 910,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'agent_reference_name' => 'Formoterol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 911,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'agent_reference_name' => 'Fosinopril',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 912,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'agent_reference_name' => 'Fotemustine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 913,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'agent_reference_name' => 'Furazabol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim903.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 914,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'agent_reference_name' => 'Furosemide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim240.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 915,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'agent_reference_name' => 'Fusidic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 916,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'agent_reference_name' => 'Gabapentin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 917,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'agent_reference_name' => 'Galactose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 918,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'agent_reference_name' => 'Galantamine hydrobromide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 919,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'agent_reference_name' => 'Gallium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 920,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'agent_reference_name' => 'Gamma Hydroxybutyric Acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 921,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'agent_reference_name' => 'Garcinia Cambogia ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 922,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'agent_reference_name' => 'Garlic',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/garlic/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 923,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'agent_reference_name' => 'Gelsemium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 924,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'agent_reference_name' => 'Gemcitabine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 925,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'agent_reference_name' => 'Gemfibrozil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 926,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'agent_reference_name' => 'Gentamicin sulfate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/gentamic.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 927,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'agent_reference_name' => 'Gentian violet',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 928,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'agent_reference_name' => 'Geranium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/geranium/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 929,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'agent_reference_name' => 'Gestrinone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 930,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'agent_reference_name' => 'Giant Dumbcane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/giant-dumbcane/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 931,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'agent_reference_name' => 'Ginkgo biloba',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 932,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'agent_reference_name' => 'Glacier Ivy',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/glacier-ivy/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 933,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'agent_reference_name' => 'Gladiolas',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/gladiolas/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 934,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'agent_reference_name' => 'Glass ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 935,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'agent_reference_name' => 'Glatiramer acetate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 936,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'agent_reference_name' => 'Glibenclamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 937,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'agent_reference_name' => 'Gliclazide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 938,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'agent_reference_name' => 'Glimepiride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 939,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'agent_reference_name' => 'Glipizide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 940,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'agent_reference_name' => 'Gloriosa superba L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim245.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 941,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'agent_reference_name' => 'Glory Chain',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/glory-chain/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 942,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'agent_reference_name' => 'Glory Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/glory-lily-2/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 943,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'agent_reference_name' => 'Glow Jewelry',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/glow-jewelry/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 944,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'agent_reference_name' => 'Glucagon',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 945,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'agent_reference_name' => 'Glucocorticoids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 946,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'agent_reference_name' => 'Glucosamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 947,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'agent_reference_name' => 'Glucose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 948,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'agent_reference_name' => 'Glufosinate-ammonium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 949,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'agent_reference_name' => 'Glutamic acid hydrochloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 950,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'agent_reference_name' => 'Glutaraldehyde',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=284',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 951,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'agent_reference_name' => 'Glutathione',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 952,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'agent_reference_name' => 'Glutethimide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim246.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 953,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'agent_reference_name' => 'Glycerine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 954,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'agent_reference_name' => 'Glycerol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 955,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'agent_reference_name' => 'Glyceryl trinitrate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/glyceryl.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 956,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'agent_reference_name' => 'Glycine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 957,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'agent_reference_name' => 'Glycol Ethers',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 958,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'agent_reference_name' => 'Glycolic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 959,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'agent_reference_name' => 'Glycols-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 960,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'agent_reference_name' => 'Glycyrrhiza',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 961,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'agent_reference_name' => 'Glycyrrhiza glabra L.',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim249fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 962,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'agent_reference_name' => 'Glyphosate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 963,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'agent_reference_name' => 'Gold compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 964,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'agent_reference_name' => 'Gold Dieffenbachia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/gold-dieffenbachia/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 965,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'agent_reference_name' => 'Gold Dust Dracaena',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/gold-dust-dracaena/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 966,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'agent_reference_name' => 'Golden Chain Tree',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/golden-chain-tree/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 967,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'agent_reference_name' => 'Golden Pothos',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/golden-pathos/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 968,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'agent_reference_name' => 'Golimumab',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 969,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'agent_reference_name' => 'Gonadotropin-releasing hormones',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 970,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'agent_reference_name' => 'Gopher Purge',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/gopher-purge/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 971,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'agent_reference_name' => 'Gorilla Glue',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/gorilla-glue/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 972,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'agent_reference_name' => 'Goserelin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 973,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'agent_reference_name' => 'Gramicidin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 974,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'agent_reference_name' => 'Granisetron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 975,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'agent_reference_name' => 'Grapes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/grapes/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 976,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'agent_reference_name' => 'Griseofulvin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 977,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'agent_reference_name' => 'Guaifenesin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 978,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'agent_reference_name' => 'Guar Gum ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 979,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'agent_reference_name' => 'Guthion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=207',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 980,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'agent_reference_name' => 'Gymnosperm',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 981,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'agent_reference_name' => 'Gyromita species',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/fungi/pimg029.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 982,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'agent_reference_name' => 'Halothane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 983,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'agent_reference_name' => 'Haloxazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim927.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 984,
                'updated_at' => NULL,
            ),
            484 => 
            array (
            'agent_reference_name' => 'Hand Sanitizer (Ethanol)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/hand-sanitizer-ethanol/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 985,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'agent_reference_name' => 'Hand Warmers',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/hand-warmers/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 986,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'agent_reference_name' => 'Hapalochlaena maculosa [Blue-ringed octopus]',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 987,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'agent_reference_name' => 'Heartleaf Philodendron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/heartleaf-philodendron/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 988,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'agent_reference_name' => 'Heavenly Bamboo',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/heavenly-bamboo/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 989,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'agent_reference_name' => 'Hedera helix L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim258fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 990,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'agent_reference_name' => 'Helium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 991,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'agent_reference_name' => 'Hellebore',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/hellebore/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 992,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'agent_reference_name' => 'Hemlock',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/hemlock/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 993,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'agent_reference_name' => 'Hemophilus influenzae B vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 994,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'agent_reference_name' => 'Heparin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 995,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'agent_reference_name' => 'Hepatitis A immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 996,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'agent_reference_name' => 'Hepatitis B immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 997,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'agent_reference_name' => 'Hepatitis B, purified antigen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 998,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'agent_reference_name' => 'Hepatitis vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 999,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'agent_reference_name' => 'Heptachlor ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim578.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1000,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('agents')->insert(array (
            0 => 
            array (
                'agent_reference_name' => 'Heptachlor/Heptachlor Epoxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=135',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1001,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'agent_reference_name' => 'Heracleum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1002,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'agent_reference_name' => 'Herbicides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/herbicides/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1003,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'agent_reference_name' => 'Herbicides urea-substituted',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1004,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'agent_reference_name' => 'Herbicide-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1005,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'agent_reference_name' => 'Hexachlorobenzene ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim256.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1006,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'agent_reference_name' => 'Hexachlorobutadiene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=168',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1007,
                'updated_at' => NULL,
            ),
            7 => 
            array (
            'agent_reference_name' => 'Hexachlorocyclohexane (Mixed Isomers) ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim257.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1008,
                'updated_at' => NULL,
            ),
            8 => 
            array (
            'agent_reference_name' => 'Hexachlorocyclopentadiene (HCCPD)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=208',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1009,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'agent_reference_name' => 'Hexachloroethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=169',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1010,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'agent_reference_name' => 'Hexachlorophene ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1011,
                'updated_at' => NULL,
            ),
            11 => 
            array (
            'agent_reference_name' => 'Hexamethylene Diisocyanate (HDI)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=170',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1012,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'agent_reference_name' => 'Hexamine hippurate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1013,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'agent_reference_name' => 'Hexane, n- ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim368.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1014,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'agent_reference_name' => 'Hibiscus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1015,
                'updated_at' => NULL,
            ),
            15 => 
            array (
            'agent_reference_name' => 'HMX (Octogen)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=171',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1016,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'agent_reference_name' => 'Hodgsonia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1017,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'agent_reference_name' => 'Holly',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/holly/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1018,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'agent_reference_name' => 'Homatropine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1019,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'agent_reference_name' => 'Hops',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/hops/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1020,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'agent_reference_name' => 'Hornets',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/hornets/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1021,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'agent_reference_name' => 'Horse Beans',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/horsebeans/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1022,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'agent_reference_name' => 'Horse Chestnut',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/horse-chestnut/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1023,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'agent_reference_name' => 'Horsehead Philodendron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/horsehead-philodendron/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1024,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'agent_reference_name' => 'Horsradish',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1025,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'agent_reference_name' => 'Hoya',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1026,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'agent_reference_name' => 'Human fibrinogen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1027,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'agent_reference_name' => 'Hurricane Plant',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/hurricane-plant/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1028,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'agent_reference_name' => 'Hyaluronic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1029,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'agent_reference_name' => 'Hyaluronidase',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1030,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'agent_reference_name' => 'Hydralazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1031,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'agent_reference_name' => 'Hydralazine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/hydral.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1032,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'agent_reference_name' => 'Hydramethylnon',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1033,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'agent_reference_name' => 'Hydrangea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/hydrangea/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1034,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'agent_reference_name' => 'Hydraulic Fluids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=141',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1035,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'agent_reference_name' => 'Hydrazines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=89',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1036,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'agent_reference_name' => 'Hydrocarbon-other ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1037,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'agent_reference_name' => 'Hydrocarbon-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1038,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'agent_reference_name' => 'Hydrochloric acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1039,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'agent_reference_name' => 'Hydrochlorothiazide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/hydrochl.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1040,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'agent_reference_name' => 'Hydrocodone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1041,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'agent_reference_name' => 'Hydrocortisone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1042,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'agent_reference_name' => 'Hydrogen Chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=147',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1043,
                'updated_at' => NULL,
            ),
            43 => 
            array (
            'agent_reference_name' => 'Hydrogen Cyanide (HCN)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=249',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1044,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'agent_reference_name' => 'Hydrogen fluoride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/hydfluor.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1045,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'agent_reference_name' => 'Hydrogen gas',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1046,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'agent_reference_name' => 'Hydrogen peroxide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim946.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1047,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'agent_reference_name' => 'Hydrogen Sulfide & Carbonyl Sulfide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=67',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1048,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'agent_reference_name' => 'Hydromorphone hydrochloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1049,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'agent_reference_name' => 'Hydroxocobalamin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1050,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'agent_reference_name' => 'Hydroxychloroquine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1051,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'agent_reference_name' => 'Hydroxycitric acid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1052,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'agent_reference_name' => 'Hydroxyprogesterone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1053,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'agent_reference_name' => 'Hydroxyquinoline derivatives',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1054,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'agent_reference_name' => 'Hydroxyurea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1055,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'agent_reference_name' => 'Hyoscine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1056,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'agent_reference_name' => 'Hyoscine Butyl Bromide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1057,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'agent_reference_name' => 'Hyoscine Hydrobromide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1058,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'agent_reference_name' => 'Hyoscyamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1059,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'agent_reference_name' => 'Hyoscyamus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1060,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'agent_reference_name' => 'Hypochlorite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1061,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'agent_reference_name' => 'Ibuprofen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1062,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'agent_reference_name' => 'Idarubicin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1063,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'agent_reference_name' => 'Ifosfamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1064,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'agent_reference_name' => 'Ilex aquifolium L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/ilexaqui.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1065,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'agent_reference_name' => 'Illicium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1066,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'agent_reference_name' => 'Imepition',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1067,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'agent_reference_name' => 'Imidacloprid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1068,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'agent_reference_name' => 'Imidazole derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1069,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'agent_reference_name' => 'Imidazoline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/imidazoline/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1070,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'agent_reference_name' => 'Imidazoline Herbicides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1071,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'agent_reference_name' => 'Imipramine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/imiprami.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1072,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'agent_reference_name' => 'Imiquimod',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1073,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'agent_reference_name' => 'Indacaterol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1074,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'agent_reference_name' => 'Indapamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1075,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'agent_reference_name' => 'Indole Alkaloids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1076,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'agent_reference_name' => 'Indole derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1077,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'agent_reference_name' => 'Indomethacin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1078,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'agent_reference_name' => 'Indoxacarb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1079,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'agent_reference_name' => 'Infant formulas',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1080,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'agent_reference_name' => 'Infliximab',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1081,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'agent_reference_name' => 'Influenza vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1082,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'agent_reference_name' => 'Ink',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1083,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'agent_reference_name' => 'Inocybe, clitocybe, omphalotus and others',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/fungi/pimg028.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1084,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'agent_reference_name' => 'Insect repellants',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1085,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'agent_reference_name' => 'Insect-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1086,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'agent_reference_name' => 'Insulin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/insulin.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1087,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'agent_reference_name' => 'Interferons',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1088,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'agent_reference_name' => 'Intrauterine contraceptives',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1089,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'agent_reference_name' => 'Intravaginal contraceptives',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1090,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'agent_reference_name' => 'Iodine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/iodine.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1091,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'agent_reference_name' => 'Iodine compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1092,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'agent_reference_name' => 'Ionizing Radiation',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=86',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1093,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'agent_reference_name' => 'Ioxynil-agents',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1094,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'agent_reference_name' => 'Ipecacuanha',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1095,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'agent_reference_name' => 'Ipomoea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1096,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'agent_reference_name' => 'Ipratropium bromide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1097,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'agent_reference_name' => 'Irbesartan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1098,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'agent_reference_name' => 'Iris',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/iris/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1099,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'agent_reference_name' => 'Iron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/iron/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1100,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'agent_reference_name' => 'Iron chelating agents',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1101,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'agent_reference_name' => 'Iron compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1102,
                'updated_at' => NULL,
            ),
            102 => 
            array (
            'agent_reference_name' => 'Iron element (Group VIII/8)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1103,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'agent_reference_name' => 'Irukandji [Carukia barnesi]',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1104,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'agent_reference_name' => 'Isocyanuric acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1105,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'agent_reference_name' => 'Isoflurane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1106,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'agent_reference_name' => 'Isoniazid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim288.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1107,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'agent_reference_name' => 'Isophorone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=148',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1108,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'agent_reference_name' => 'Isoprenaline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1109,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'agent_reference_name' => 'Isopropyl alcohol or Isopropanol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim290.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1110,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'agent_reference_name' => 'Isosorbide Dinitrate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/isosorbi.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1111,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'agent_reference_name' => 'Isosorbide mononitrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1112,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'agent_reference_name' => 'isothiazolone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1113,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'agent_reference_name' => 'Isothiazolone compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1114,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'agent_reference_name' => 'Isotonic solutions',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1115,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'agent_reference_name' => 'Isotretinoin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1116,
                'updated_at' => NULL,
            ),
            116 => 
            array (
            'agent_reference_name' => 'Ispaghula (psylla seeds)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1117,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'agent_reference_name' => 'Ivabradine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1118,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'agent_reference_name' => 'Ivermectin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/ivermect.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1119,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'agent_reference_name' => 'Jack-in-the-Pulpit',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/jack-in-the-pulpit/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1120,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'agent_reference_name' => 'Japanese Show Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/japanese-show-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1121,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'agent_reference_name' => 'Jatropha',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1122,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'agent_reference_name' => 'Jatropha curcas L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/jcurc.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1123,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'agent_reference_name' => 'Jatropha gossypiifolia ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/jgossyp.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1124,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'agent_reference_name' => 'Jatropha hastata ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/jhast.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1125,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'agent_reference_name' => 'Jatropha macrorhiza ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/jmacro.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1126,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'agent_reference_name' => 'Jatropha multifida ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/jmulti.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1127,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'agent_reference_name' => 'Jatropha podagrica ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/jpoc.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1128,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'agent_reference_name' => 'Java Beans',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/java-beans/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1129,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'agent_reference_name' => 'Jellyfish-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1130,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'agent_reference_name' => 'Jerusalem Cherry',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/jerusalem-cherry/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1131,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'agent_reference_name' => 'Jessamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/jessamine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1132,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'agent_reference_name' => 'Jet Fuels JP-4 and JP-7',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=149',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1133,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'agent_reference_name' => 'Jimson Weed',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/jimson-weed/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1134,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'agent_reference_name' => 'Jonquil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/jonquil/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1135,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'agent_reference_name' => 'JP-5, JP-8, and Jet A',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=150',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1136,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'agent_reference_name' => 'Jungle Trumpet',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/jungle-trumpet/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1137,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'agent_reference_name' => 'Kaffir lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/kaffir-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1138,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'agent_reference_name' => 'Kalanchoe',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/kalanchoe/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1139,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'agent_reference_name' => 'Kaolin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1140,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'agent_reference_name' => 'Karva ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1141,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'agent_reference_name' => 'Kerosene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/kerosene/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1142,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'agent_reference_name' => 'Ketamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1143,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'agent_reference_name' => 'Ketazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim222.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1144,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'agent_reference_name' => 'Ketoconazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1145,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'agent_reference_name' => 'Ketone-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1146,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'agent_reference_name' => 'Ketoprofen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1147,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'agent_reference_name' => 'Ketorolac',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1148,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'agent_reference_name' => 'Kitty litter',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1149,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'agent_reference_name' => 'Labetalol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1150,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'agent_reference_name' => 'Laburnum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1151,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'agent_reference_name' => 'Lace Fern',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/lace-fern/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1152,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'agent_reference_name' => 'Lacosamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1153,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'agent_reference_name' => 'Lactic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1154,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'agent_reference_name' => 'Lactobacillus fermentum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1155,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'agent_reference_name' => 'Lactulose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1156,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'agent_reference_name' => 'Lacy Tree',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/lacy-tree/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1157,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'agent_reference_name' => 'Lamivudine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1158,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'agent_reference_name' => 'Lamotrigine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1159,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'agent_reference_name' => 'Lansoprazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1160,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'agent_reference_name' => 'Lantana',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/lantana/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1161,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'agent_reference_name' => 'Larkspur',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/larkspur/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1162,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'agent_reference_name' => 'Lasalocid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1163,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'agent_reference_name' => 'Latanoprost',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1164,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'agent_reference_name' => 'Lathyrus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1165,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'agent_reference_name' => 'Lavender oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1166,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'agent_reference_name' => 'Laxatives',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1167,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'agent_reference_name' => 'Lead acetate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1168,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'agent_reference_name' => 'Lead compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1169,
                'updated_at' => NULL,
            ),
            169 => 
            array (
            'agent_reference_name' => 'Lead element (Group IVa/34)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1170,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'agent_reference_name' => 'Lead, inorganic ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/inorglea.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1171,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'agent_reference_name' => 'Lead, organic ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/organlea.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1172,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'agent_reference_name' => 'Leech',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1173,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'agent_reference_name' => 'Leeks',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/leeks/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1174,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'agent_reference_name' => 'Leflunomide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1175,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'agent_reference_name' => 'Lemon Myrtle essential oil ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1176,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'agent_reference_name' => 'Lemon-grass oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1177,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'agent_reference_name' => 'Lenalidomid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1178,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'agent_reference_name' => 'Lercanidipine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1179,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'agent_reference_name' => 'Letrozole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1180,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'agent_reference_name' => 'Leuprorelin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1181,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'agent_reference_name' => 'Levamisole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1182,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'agent_reference_name' => 'Levetiracetam',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1183,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'agent_reference_name' => 'Levocabastine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1184,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'agent_reference_name' => 'Levocarnitine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1185,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'agent_reference_name' => 'Levodopa and decarboxylase inhibitor',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/levedopa.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1186,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'agent_reference_name' => 'Levonorgestrel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1187,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'agent_reference_name' => 'Levosimendan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1188,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'agent_reference_name' => 'Lignocaine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1189,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'agent_reference_name' => 'Ligustrum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1190,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'agent_reference_name' => 'Lilies',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/lilies/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1191,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'agent_reference_name' => 'Lily of the Valley',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/lily-of-the-valley/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1192,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'agent_reference_name' => 'Limonene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1193,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'agent_reference_name' => 'Linagliptin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1194,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'agent_reference_name' => 'Lincomycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1195,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'agent_reference_name' => 'Lindane ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim859.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1196,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'agent_reference_name' => 'Linezolid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1197,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'agent_reference_name' => 'Linseed',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1198,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'agent_reference_name' => 'Liothyronine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1199,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'agent_reference_name' => 'liothyronine sodium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1200,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'agent_reference_name' => 'Lipstick',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1201,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'agent_reference_name' => 'Liquid paraffin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1202,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'agent_reference_name' => 'Liquid Potpourri',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/potpourri-liquid/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1203,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'agent_reference_name' => 'Liquified Petroleum Gas',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1204,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'agent_reference_name' => 'Liquorice',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1205,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'agent_reference_name' => 'Lisdexamfetamine dimesilate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1206,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'agent_reference_name' => 'Lisinopril',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1207,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'agent_reference_name' => 'Lithium carbonate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim309f.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1208,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'agent_reference_name' => 'Lithium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1209,
                'updated_at' => NULL,
            ),
            209 => 
            array (
            'agent_reference_name' => 'Lithium element (Group Ia/3)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1210,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'agent_reference_name' => 'Lithium manganese batteries',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1211,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'agent_reference_name' => 'Lizard',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1212,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'agent_reference_name' => 'Locoweed',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/locoweed/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1213,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'agent_reference_name' => 'Lomustine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1214,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'agent_reference_name' => 'Long-acting Anticoagulants',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/long-acting-anticoagulants-mouse-and-rat-poison/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1215,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'agent_reference_name' => 'Lonicera',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1216,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'agent_reference_name' => 'Loperamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1217,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'agent_reference_name' => 'Lophophora',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1218,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'agent_reference_name' => 'Loprazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim928.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1219,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'agent_reference_name' => 'Lorasidone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1220,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'agent_reference_name' => 'Loratadine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1221,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'agent_reference_name' => 'Lorazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim223.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1222,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'agent_reference_name' => 'Lormetazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim929.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1223,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'agent_reference_name' => 'Losartan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1224,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'agent_reference_name' => 'LSD',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1225,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'agent_reference_name' => 'Lufenuron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1226,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'agent_reference_name' => 'Lunesta',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/lunesta/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1227,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'agent_reference_name' => 'Lupine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/lupine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1228,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'agent_reference_name' => 'Lupinus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1229,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'agent_reference_name' => 'Lurasidone hydrochloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1230,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'agent_reference_name' => 'Lysine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1231,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'agent_reference_name' => 'Macadamia Nuts',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/macadamia-nuts/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1232,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'agent_reference_name' => 'Macadamia/Australian Nut',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/australian-nut/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1233,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'agent_reference_name' => 'Macrogol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1234,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'agent_reference_name' => 'Madagascar Dragon Tree',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/madagascar-dragon-tree/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1235,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'agent_reference_name' => 'Magnesium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1236,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'agent_reference_name' => 'Magnesium aspartate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1237,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'agent_reference_name' => 'Magnesium carbonate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1238,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'agent_reference_name' => 'Magnesium citrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1239,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'agent_reference_name' => 'Magnesium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1240,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'agent_reference_name' => 'Magnesium gluconate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1241,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'agent_reference_name' => 'Magnesium hydroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1242,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'agent_reference_name' => 'Magnesium oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1243,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'agent_reference_name' => 'Magnesium peroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1244,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'agent_reference_name' => 'Magnesium silicate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1245,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'agent_reference_name' => 'Magnesium sulfate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1246,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'agent_reference_name' => 'Magnet',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1247,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'agent_reference_name' => 'Mahonia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1248,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'agent_reference_name' => 'Malachite green ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1249,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'agent_reference_name' => 'Malathion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=92',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1250,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'agent_reference_name' => 'Maldison',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1251,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'agent_reference_name' => 'Maltose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1252,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'agent_reference_name' => 'Mammal [cat, dog, rat, human]',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1253,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'agent_reference_name' => 'Mancozeb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1254,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'agent_reference_name' => 'Manganate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1255,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'agent_reference_name' => 'Manganese',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=23',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1256,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'agent_reference_name' => 'Manganese oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1257,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'agent_reference_name' => 'Manihot',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1258,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'agent_reference_name' => 'Mannitol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1259,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'agent_reference_name' => 'MAO inhibitors',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1260,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'agent_reference_name' => 'Marble Queen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/marble-queen/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1261,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'agent_reference_name' => 'Marbofloxacin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1262,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'agent_reference_name' => 'Marcaine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1263,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'agent_reference_name' => 'Marigold',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/marigold/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1264,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'agent_reference_name' => 'Marijuana',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/marijuana/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1265,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'agent_reference_name' => 'Matches',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/matches/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1266,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'agent_reference_name' => 'Mayapple',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/apple/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1267,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'agent_reference_name' => 'MCPA',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1268,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'agent_reference_name' => 'MDMA',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1269,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'agent_reference_name' => 'Mebendazole, combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1270,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'agent_reference_name' => 'Mebeverine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1271,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'agent_reference_name' => 'Meclozine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1272,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'agent_reference_name' => 'Medazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim460.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1273,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'agent_reference_name' => 'Medroxyprogesterone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1274,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'agent_reference_name' => 'Mefenamic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1275,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'agent_reference_name' => 'Mefloquine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1276,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'agent_reference_name' => 'Melaleuca oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1277,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'agent_reference_name' => 'Melanocyte-stimulating hormone analogue',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1278,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'agent_reference_name' => 'Melatonin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1279,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'agent_reference_name' => 'Melia azedarah',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1280,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'agent_reference_name' => 'Meliaceae',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1281,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'agent_reference_name' => 'Meloxicam',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/meloxicam/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1282,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'agent_reference_name' => 'Melphalan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1283,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'agent_reference_name' => 'Memantine hydrochloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1284,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'agent_reference_name' => 'Meningococcal vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1285,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'agent_reference_name' => 'Mentha',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1286,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'agent_reference_name' => 'Menthol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1287,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'agent_reference_name' => 'Mepivacaine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1288,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'agent_reference_name' => 'Mercaptopurine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1289,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'agent_reference_name' => 'Mercurochrome',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1290,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'agent_reference_name' => 'Mercury',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=24',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1291,
                'updated_at' => NULL,
            ),
            291 => 
            array (
            'agent_reference_name' => 'Mercury element (Group IIb/34)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1292,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'agent_reference_name' => 'Mesalazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1293,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'agent_reference_name' => 'Mesna',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1294,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'agent_reference_name' => 'Mesterolone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim904.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1295,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'agent_reference_name' => 'Metaldehyde ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim332.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1296,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'agent_reference_name' => 'Metamphetamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1297,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'agent_reference_name' => 'Metaraminol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1298,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'agent_reference_name' => 'Metformin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1299,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'agent_reference_name' => 'Methadone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1300,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'agent_reference_name' => 'Methamphetamine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim334.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1301,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'agent_reference_name' => 'Methandienone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim905.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1302,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'agent_reference_name' => 'Methandriol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim906.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1303,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'agent_reference_name' => 'Methane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1304,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'agent_reference_name' => 'Methanol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim335.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1305,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'agent_reference_name' => 'Methaqualone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim336fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1306,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'agent_reference_name' => 'Methdilazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1307,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'agent_reference_name' => 'Methenolone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim907.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1308,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'agent_reference_name' => 'Methiocarb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1309,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'agent_reference_name' => 'Methionine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/methionine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1310,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'agent_reference_name' => 'Methocarbamol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1311,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'agent_reference_name' => 'Methomyl',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1312,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'agent_reference_name' => 'Methoprene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1313,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'agent_reference_name' => 'Methotrexate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1314,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'agent_reference_name' => 'Methoxychlor',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=151',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1315,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'agent_reference_name' => 'Methoxyflurane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1316,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'agent_reference_name' => 'Methyl bromide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/methbrom.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1317,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'agent_reference_name' => 'Methyl chloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/metchlor.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1318,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'agent_reference_name' => 'Methyl Ethyl Ketone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1319,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'agent_reference_name' => 'Methyl Ethyl Ketone Peroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1320,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'agent_reference_name' => 'Methyl iodide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim341fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1321,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'agent_reference_name' => 'Methyl Isocyanate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=116',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1322,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'agent_reference_name' => 'Methyl Mercaptan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=40',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1323,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'agent_reference_name' => 'Methyl methacrylate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1324,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'agent_reference_name' => 'Methyl Parathion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=117',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1325,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'agent_reference_name' => 'Methyl Salicylate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1326,
                'updated_at' => NULL,
            ),
            326 => 
            array (
            'agent_reference_name' => 'Methyl tert-Butyl Ether (MTBE)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=41',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1327,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'agent_reference_name' => 'Methylcellulose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1328,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'agent_reference_name' => 'Methyldiethanolamine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1329,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'agent_reference_name' => 'Methyldopa ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/methyldo.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1330,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'agent_reference_name' => 'Methylene Blue',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1331,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'agent_reference_name' => 'Methylene Chloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim343.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1332,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'agent_reference_name' => 'Methyl-Ethyl-Ketone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1333,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'agent_reference_name' => 'Methyl-Ethyl-Ketone-Peroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1334,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'agent_reference_name' => 'Methylpentane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1335,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'agent_reference_name' => 'Methylphenidate hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim344.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1336,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'agent_reference_name' => 'Methylprednisolone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1337,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'agent_reference_name' => 'Methyltestosterone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim908.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1338,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'agent_reference_name' => 'Methysergide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1339,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'agent_reference_name' => 'Metoclopramide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1340,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'agent_reference_name' => 'Metoprolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1341,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'agent_reference_name' => 'Metronidazole ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/metronid.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1342,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'agent_reference_name' => 'Metsulfuron methyl',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1343,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'agent_reference_name' => 'Mexazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim930.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1344,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'agent_reference_name' => 'Mexican Breadfruit',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/mexican-breadfruit/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1345,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'agent_reference_name' => 'Mexiletine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1346,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'agent_reference_name' => 'Mianserin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1347,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'agent_reference_name' => 'Miconazole ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/miconazo.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1348,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'agent_reference_name' => 'Microorganism - Unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1349,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'agent_reference_name' => 'Midazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim674.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1350,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'agent_reference_name' => 'Mifepristone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1351,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'agent_reference_name' => 'Milkweed',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/milkweed/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1352,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'agent_reference_name' => 'Millipede',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1353,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'agent_reference_name' => 'Mineralocorticoids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1354,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'agent_reference_name' => 'Miniature Croton',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/miniature-croton/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1355,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'agent_reference_name' => 'Minocycline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1356,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'agent_reference_name' => 'Minoxidil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1357,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'agent_reference_name' => 'Mirabegron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1358,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'agent_reference_name' => 'Mirex',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=276',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1359,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'agent_reference_name' => 'Mirtazapine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1360,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'agent_reference_name' => 'misc',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1361,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'agent_reference_name' => 'Miscellaneous low toxicity product-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1362,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'agent_reference_name' => 'Miscellaneous-herbal-product',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1363,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'agent_reference_name' => 'Mistletoe',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/mistletoe/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1364,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'agent_reference_name' => 'Mitomycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1365,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'agent_reference_name' => 'Mitoxantrone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1366,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'agent_reference_name' => 'Mivacurium chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1367,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'agent_reference_name' => 'Mock Orange',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/mock-orange/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1368,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'agent_reference_name' => 'Moclobemide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim151.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1369,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'agent_reference_name' => 'Modafinil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1370,
                'updated_at' => NULL,
            ),
            370 => 
            array (
            'agent_reference_name' => 'Moldy Food (Mycotoxins)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/mycotoxin/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1371,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'agent_reference_name' => 'Molluscs-other ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1372,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'agent_reference_name' => 'Molybdenum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=289',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1373,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'agent_reference_name' => 'Mometasone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1374,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'agent_reference_name' => 'Monensin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1375,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'agent_reference_name' => 'Monkshood',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/monkshood/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1376,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'agent_reference_name' => 'Monoamine-oxidase inhibitors',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pimg025.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1377,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'agent_reference_name' => 'Monochloroacetic acid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim352.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1378,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'agent_reference_name' => 'Monosodium glutamate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1379,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'agent_reference_name' => 'Monstera',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1380,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'agent_reference_name' => 'Montelukast',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1381,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'agent_reference_name' => 'Morbilli immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1382,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'agent_reference_name' => 'Morbilli vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1383,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'agent_reference_name' => 'Morning Glory',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/morning-glory/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1384,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'agent_reference_name' => 'Morphine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1385,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'agent_reference_name' => 'Mosquito',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1386,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'agent_reference_name' => 'Mothballs',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/mothballs/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1387,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'agent_reference_name' => 'Myristica',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1388,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'agent_reference_name' => 'Myristica fragrans Houtt. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim355.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1389,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'agent_reference_name' => 'N-Acetylcysteine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1390,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'agent_reference_name' => 'Nadolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1391,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'agent_reference_name' => 'Nalidixic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1392,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'agent_reference_name' => 'Naloxone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1393,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'agent_reference_name' => 'Naltrexone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1394,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'agent_reference_name' => 'Nandrolone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim910.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1395,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'agent_reference_name' => 'Nandrolone phenylpropionate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim909.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1396,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'agent_reference_name' => 'Naphazoline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1397,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'agent_reference_name' => 'Naphthalene & Derivatives',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim363.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1398,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'agent_reference_name' => 'Naphthalene, 1-Methylnapthalene, 2-Methylnapthalene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=43',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1399,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'agent_reference_name' => 'Naproxen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/naproxen/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1400,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'agent_reference_name' => 'Naproxen sodium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1401,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'agent_reference_name' => 'Naratriptan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1402,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'agent_reference_name' => 'Narcissus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/narcissus/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1403,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'agent_reference_name' => 'Natural Gas',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1404,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'agent_reference_name' => 'Nebivolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1405,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'agent_reference_name' => 'Needlepoint Ivy',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/needlepoint-ivy/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1406,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'agent_reference_name' => 'Neem oil ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1407,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'agent_reference_name' => 'Neomycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1408,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'agent_reference_name' => 'Neon gas',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1409,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'agent_reference_name' => 'Neonicotinoid-insecticides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1410,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'agent_reference_name' => 'Neostigmine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1411,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'agent_reference_name' => 'Nerium oleander L.',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim366.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1412,
                'updated_at' => NULL,
            ),
            412 => 
            array (
            'agent_reference_name' => 'Nerve Agents (GA, GB, GD, VX)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=93',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1413,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'agent_reference_name' => 'n-Hexane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=68',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1414,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'agent_reference_name' => 'Nickel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=44',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1415,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'agent_reference_name' => 'Nickel compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1416,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'agent_reference_name' => 'Nickel oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1417,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'agent_reference_name' => 'Nicorandil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1418,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'agent_reference_name' => 'Nicotiana tabacum L ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/nicotab.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1419,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'agent_reference_name' => 'Nicotinamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1420,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'agent_reference_name' => 'Nicotine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1421,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'agent_reference_name' => 'Nicotine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/nicotine.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1422,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'agent_reference_name' => 'Nicotinic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1423,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'agent_reference_name' => 'Nifedipine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1424,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'agent_reference_name' => 'Nightshade',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/nightshade/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1425,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'agent_reference_name' => 'Nilutamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1426,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'agent_reference_name' => 'Nimodipine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1427,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'agent_reference_name' => 'Nitrates and nitrites',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg016.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1428,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'agent_reference_name' => 'Nitrazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim675.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1429,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'agent_reference_name' => 'Nitric acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1430,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'agent_reference_name' => 'Nitric oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1431,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'agent_reference_name' => 'Nitrites',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1432,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'agent_reference_name' => 'Nitrobenzene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=95',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1433,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'agent_reference_name' => 'Nitrofurantoin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim377.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1434,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'agent_reference_name' => 'Nitrogen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1435,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'agent_reference_name' => 'Nitrogen hydride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1436,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'agent_reference_name' => 'Nitrogen mustard analogues',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1437,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'agent_reference_name' => 'Nitrogen oxides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg017.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1438,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'agent_reference_name' => 'Nitrogen pentoxide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg017.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1439,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'agent_reference_name' => 'Nitrogen-liquid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1440,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'agent_reference_name' => 'Nitroglycerin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1441,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'agent_reference_name' => 'Nitromethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1442,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'agent_reference_name' => 'Nitrophenols',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=172',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1443,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'agent_reference_name' => 'Nitroprusside',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1444,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'agent_reference_name' => 'Nitrous oxide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/nitrusox.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1445,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'agent_reference_name' => 'Nizatidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1446,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'agent_reference_name' => 'n-Nitrosodimethylamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=173',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1447,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'agent_reference_name' => 'n-Nitrosodi-n-propylamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=211',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1448,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'agent_reference_name' => 'n-Nitrosodiphenylamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=212',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1449,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'agent_reference_name' => 'Noradrenaline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1450,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'agent_reference_name' => 'Nordazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim676.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1451,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'agent_reference_name' => 'Norethandrolone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim911.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1452,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'agent_reference_name' => 'Norethisterone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1453,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'agent_reference_name' => 'Norfloxacin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1454,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'agent_reference_name' => 'Nortriptyline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1455,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'agent_reference_name' => 'NSAIDs',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/nsaids/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1456,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'agent_reference_name' => 'Nutmeg oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1457,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'agent_reference_name' => 'Nystatin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1458,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'agent_reference_name' => 'Oclacitinib',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1459,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'agent_reference_name' => 'Octopus-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1460,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'agent_reference_name' => 'Octreotide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1461,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'agent_reference_name' => 'Octyl methoxycinnamate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1462,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'agent_reference_name' => 'Oil-other ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1463,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'agent_reference_name' => 'Olanzapine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1464,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'agent_reference_name' => 'Oleander',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/oleander/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1465,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'agent_reference_name' => 'Olmesartan medoxomil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1466,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'agent_reference_name' => 'Olsalazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1467,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'agent_reference_name' => 'Omega-3-triglycerides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1468,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'agent_reference_name' => 'Omeprazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1469,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'agent_reference_name' => 'Omeprazole, amoxicillin and metronidazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1470,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'agent_reference_name' => 'Ondansetron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1471,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'agent_reference_name' => 'Onions',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/onion/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1472,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'agent_reference_name' => 'Opioids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pimg023.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1473,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'agent_reference_name' => 'Opium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1474,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'agent_reference_name' => 'Opuntia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1475,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'agent_reference_name' => 'Oral rehydration salt formulations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1476,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'agent_reference_name' => 'Oral-contraceptive-pill',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1477,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'agent_reference_name' => 'Orciprenaline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1478,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'agent_reference_name' => 'Organophosphorus pesticides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg001.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1479,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'agent_reference_name' => 'Oriental Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/oriental-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1480,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'agent_reference_name' => 'Orlistat',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1481,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'agent_reference_name' => 'Ornithorhynchus anatinus [Platypus]',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1482,
                'updated_at' => NULL,
            ),
            482 => 
            array (
            'agent_reference_name' => 'Orphenadrine (citrate)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1483,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'agent_reference_name' => 'Oseltamivir',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1484,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'agent_reference_name' => 'Otto Fuel II and its Components',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=152',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1485,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'agent_reference_name' => 'Oxabolone cipionate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim912.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1486,
                'updated_at' => NULL,
            ),
            486 => 
            array (
            'agent_reference_name' => 'Oxalates (Insoluble)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/insoluble-oxalates/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1487,
                'updated_at' => NULL,
            ),
            487 => 
            array (
            'agent_reference_name' => 'Oxalates (Soluable)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/soluble-oxalates/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1488,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'agent_reference_name' => 'Oxalic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1489,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'agent_reference_name' => 'Oxaliplatin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1490,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'agent_reference_name' => 'Oxamyl',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1491,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'agent_reference_name' => 'Oxandrolone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim913.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1492,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'agent_reference_name' => 'Oxantel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1493,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'agent_reference_name' => 'Oxazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim677.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1494,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'agent_reference_name' => 'Oxazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim931.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1495,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'agent_reference_name' => 'Oxazole derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1496,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'agent_reference_name' => 'Oxcarbazepine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1497,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'agent_reference_name' => 'Oxfendazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1498,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'agent_reference_name' => 'Oxprenolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1499,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'agent_reference_name' => 'Oxybutynin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1500,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('agents')->insert(array (
            0 => 
            array (
                'agent_reference_name' => 'Oxycodone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1501,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'agent_reference_name' => 'Oxymesterone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim914.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1502,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'agent_reference_name' => 'Oxymetazoline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1503,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'agent_reference_name' => 'Oxymetholone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim915.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1504,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'agent_reference_name' => 'Oxytetracycline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1505,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'agent_reference_name' => 'Oxytocin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1506,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'agent_reference_name' => 'Oxyuranus microlepidotus ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/animal/taipan.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1507,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'agent_reference_name' => 'Ozone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1508,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'agent_reference_name' => 'Paclitaxel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1509,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'agent_reference_name' => 'Paintballs',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/paintballs/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1510,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'agent_reference_name' => 'Paliperidone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1511,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'agent_reference_name' => 'Pamidronic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1512,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'agent_reference_name' => 'Pancrelipase',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1513,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'agent_reference_name' => 'Pancuronium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1514,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'agent_reference_name' => 'Pantoprazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1515,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'agent_reference_name' => 'Papaver',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1516,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'agent_reference_name' => 'Papaveretum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1517,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'agent_reference_name' => 'Papaverine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1518,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'agent_reference_name' => 'Paper',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1519,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'agent_reference_name' => 'Para-aminobenzoic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1520,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'agent_reference_name' => 'Paracetamol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim396.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1521,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'agent_reference_name' => 'Paradichlorobenzene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1522,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'agent_reference_name' => 'Paraldehyde',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1523,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'agent_reference_name' => 'Paraphenylenediamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1524,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'agent_reference_name' => 'Paraquat ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim399.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1525,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'agent_reference_name' => 'Parathion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=246',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1526,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'agent_reference_name' => 'Parotitis immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1527,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'agent_reference_name' => 'Parotitis vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1528,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'agent_reference_name' => 'Paroxetine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1529,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'agent_reference_name' => 'Parthenocissus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1530,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'agent_reference_name' => 'Peace Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/mauna-loa-peace-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1531,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'agent_reference_name' => 'Peach Pits',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/peach-pits/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1532,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'agent_reference_name' => 'Pectin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1533,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'agent_reference_name' => 'Peganum harmala L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim402fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1534,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'agent_reference_name' => 'Pelargonium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1535,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'agent_reference_name' => 'Pemoline ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim940.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1536,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'agent_reference_name' => 'Pencil Cactus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/pencil-cactus/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1537,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'agent_reference_name' => 'Penicillamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1538,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'agent_reference_name' => 'Penicillins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1539,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'agent_reference_name' => 'Pennyroyal Oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/pennyroyal-oil/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1540,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'agent_reference_name' => 'Pentachlorophenol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim405.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1541,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'agent_reference_name' => 'Pentane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1542,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'agent_reference_name' => 'Pentobarbital',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1543,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'agent_reference_name' => 'Pentoxyverine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1544,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'agent_reference_name' => 'Peony',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/peony/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1545,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'agent_reference_name' => 'Peppermint oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1546,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'agent_reference_name' => 'Pepsin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1547,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'agent_reference_name' => 'Perchlorates',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=181',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1548,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'agent_reference_name' => 'Perfluoroalkyls',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=237',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1549,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'agent_reference_name' => 'Perhexiline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1550,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'agent_reference_name' => 'Periciazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1551,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'agent_reference_name' => 'Perindopril',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1552,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'agent_reference_name' => 'Periwinkle',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/periwinkle/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1553,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'agent_reference_name' => 'Permanganate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1554,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'agent_reference_name' => 'Peroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1555,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'agent_reference_name' => 'Persulfate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1556,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'agent_reference_name' => 'Pertussis immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1557,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'agent_reference_name' => 'Pertussis vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1558,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'agent_reference_name' => 'Pesticide - Unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1559,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'agent_reference_name' => 'Pesticide-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1560,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'agent_reference_name' => 'Pet food ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1561,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'agent_reference_name' => 'Pethidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1562,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'agent_reference_name' => 'Petrol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1563,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'agent_reference_name' => 'Petrol/Gasoline, Automotive',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=83',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1564,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'agent_reference_name' => 'Petroleum Distillates',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/petroleum-distillates/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1565,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'agent_reference_name' => 'Pharmaceutial-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1566,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'agent_reference_name' => 'Pharmaceutical-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1567,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'agent_reference_name' => 'Phaseolus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1568,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'agent_reference_name' => 'Phenazone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1569,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'agent_reference_name' => 'Phencyclidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1570,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'agent_reference_name' => 'Phendimetrazine tartrate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim941.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1571,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'agent_reference_name' => 'Phenelzine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1572,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'agent_reference_name' => 'Phenformin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1573,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'agent_reference_name' => 'Phenibut',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1574,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'agent_reference_name' => 'Pheniramine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1575,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'agent_reference_name' => 'Phenmetrazine hydrochloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim942.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1576,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'agent_reference_name' => 'Phenobarbital',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1577,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'agent_reference_name' => 'Phenol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim412.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1578,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'agent_reference_name' => 'Phenolphthalein',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1579,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'agent_reference_name' => 'Phenolsulfonphthalein',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1580,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'agent_reference_name' => 'Phentermine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim415.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1581,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'agent_reference_name' => 'Phentolamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1582,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'agent_reference_name' => 'Phenylbutazone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1583,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'agent_reference_name' => 'Phenylephrine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1584,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'agent_reference_name' => 'Phenylephrine hydrochloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1585,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'agent_reference_name' => 'Phenylephrine, combinations',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1586,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'agent_reference_name' => 'Phenylpropanolamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/phenylpropanolamine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1587,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'agent_reference_name' => 'Phenytoin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim416.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1588,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'agent_reference_name' => 'Philodendron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/philodendron/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1589,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'agent_reference_name' => 'Phlorogluciol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1590,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'agent_reference_name' => 'Phoenix',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1591,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'agent_reference_name' => 'Pholcodine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1592,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'agent_reference_name' => 'Phorate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1593,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'agent_reference_name' => 'Phosgene ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim419.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1594,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'agent_reference_name' => 'Phosgene Oxime',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=213',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1595,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'agent_reference_name' => 'Phosphamidon ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim454.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1596,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'agent_reference_name' => 'Phosphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1597,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'agent_reference_name' => 'Phosphate Ester Flame Retardants',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=239',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1598,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'agent_reference_name' => 'Phosphides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/phosphides/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1599,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'agent_reference_name' => 'Phosphine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim865.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1600,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'agent_reference_name' => 'Phosphite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1601,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'agent_reference_name' => 'Phosphoric acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1602,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'agent_reference_name' => 'Phosphorous compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1603,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'agent_reference_name' => 'Phosphorous oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1604,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'agent_reference_name' => 'Phosphorus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1605,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'agent_reference_name' => 'Photinia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1606,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'agent_reference_name' => 'Phthalates-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1607,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'agent_reference_name' => 'Phthalic acid derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1608,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'agent_reference_name' => 'Phthalmide-fungicides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1609,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'agent_reference_name' => 'Physalis',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1610,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'agent_reference_name' => 'Physostigmine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1611,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'agent_reference_name' => 'Phytolacca',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1612,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'agent_reference_name' => 'Phytomenadione ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim424f.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1613,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'agent_reference_name' => 'Picaridin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1614,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'agent_reference_name' => 'Picloram',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1615,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'agent_reference_name' => 'Pilocarpine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1616,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'agent_reference_name' => 'Pimecrolimus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1617,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'agent_reference_name' => 'Pimobendan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/pimobendan/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1618,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'agent_reference_name' => 'Pimozide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1619,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'agent_reference_name' => 'Pinacolyl Alcohol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim981.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1620,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'agent_reference_name' => 'Pinazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim679.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1621,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'agent_reference_name' => 'Pindolol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1622,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'agent_reference_name' => 'Pine Oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/pine-oil/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1623,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'agent_reference_name' => 'Pinus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1624,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'agent_reference_name' => 'Pioglitazone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1625,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'agent_reference_name' => 'Piperazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1626,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'agent_reference_name' => 'Piroxicam',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1627,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'agent_reference_name' => 'Pithecellobium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1628,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'agent_reference_name' => 'Pizotifen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1629,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'agent_reference_name' => 'Plant- Mitragyna',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1630,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'agent_reference_name' => 'Plant-low toxicity',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1631,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'agent_reference_name' => 'Plants-cardiac glycosides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1632,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'agent_reference_name' => 'Plants-cyanogenic glycosides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1633,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'agent_reference_name' => 'Plant-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1634,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'agent_reference_name' => 'Platinate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1635,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'agent_reference_name' => 'Platinum compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1636,
                'updated_at' => NULL,
            ),
            136 => 
            array (
            'agent_reference_name' => 'Play Dough (Homemade)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/homemade-play-dough/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1637,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'agent_reference_name' => 'Plumbate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1638,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'agent_reference_name' => 'Plumeria',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1639,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'agent_reference_name' => 'Plumosa Fern',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/plumosa-fern/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1640,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'agent_reference_name' => 'Plutonium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=119',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1641,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'agent_reference_name' => 'Pneumococcal vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1642,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'agent_reference_name' => 'Pneumococcus, purified polysaccharides antigen',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1643,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'agent_reference_name' => 'Podophyllotoxin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim427.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1644,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'agent_reference_name' => 'Poinciana',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/poinciana/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1645,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'agent_reference_name' => 'Poinsettia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/poinsettia/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1646,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'agent_reference_name' => 'Poison Hemlock',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/poison-hemlock/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1647,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'agent_reference_name' => 'Poison Ivy',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/poison-ivy/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1648,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'agent_reference_name' => 'Poison Oak',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/poison-oak/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1649,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'agent_reference_name' => 'Pokeweed',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/pokeweed/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1650,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'agent_reference_name' => 'Poliomyelitis vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1651,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'agent_reference_name' => 'poloxamer',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1652,
                'updated_at' => NULL,
            ),
            152 => 
            array (
            'agent_reference_name' => 'Polybrominated Biphenyls (PBBs)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=94',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1653,
                'updated_at' => NULL,
            ),
            153 => 
            array (
            'agent_reference_name' => 'Polybrominated Diphenyl Ethers (PBDEs)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=183',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1654,
                'updated_at' => NULL,
            ),
            154 => 
            array (
            'agent_reference_name' => 'Polychlorinated Biphenyls (PCBs)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=26',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1655,
                'updated_at' => NULL,
            ),
            155 => 
            array (
            'agent_reference_name' => 'Polycyclic Aromatic Hydrocarbons (PAHs)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=25',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1656,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'agent_reference_name' => 'Polyethylene glycol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1657,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'agent_reference_name' => 'Polymer',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1658,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'agent_reference_name' => 'Polyurethane resins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1659,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'agent_reference_name' => 'Polyvinyl alcohol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1660,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'agent_reference_name' => 'Poppy',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/poppy/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1661,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'agent_reference_name' => 'Potassium aluminium sulphate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1662,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'agent_reference_name' => 'Potassium bromide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1663,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'agent_reference_name' => 'Potassium carbonate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1664,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'agent_reference_name' => 'Potassium chloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/potasscl.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1665,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'agent_reference_name' => 'Potassium citrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1666,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'agent_reference_name' => 'Potassium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1667,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'agent_reference_name' => 'Potassium cyanide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1668,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'agent_reference_name' => 'Potassium gluconate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1669,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'agent_reference_name' => 'Potassium hydroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1670,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'agent_reference_name' => 'Potassium iodide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1671,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'agent_reference_name' => 'Potassium permanganate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim409.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1672,
                'updated_at' => NULL,
            ),
            172 => 
            array (
            'agent_reference_name' => 'Potato (Green)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/potato-green/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1673,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'agent_reference_name' => 'Potting mix ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1674,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'agent_reference_name' => 'Povidone-iodine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1675,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'agent_reference_name' => 'Pralidoxime',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1676,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'agent_reference_name' => 'Pramipexole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1677,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'agent_reference_name' => 'Pravastatin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1678,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'agent_reference_name' => 'Prazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim680.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1679,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'agent_reference_name' => 'Praziquantel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1680,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'agent_reference_name' => 'Prazosin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1681,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'agent_reference_name' => 'Precatory Bean',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/precatory-bean/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1682,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'agent_reference_name' => 'Prednisolone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1683,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'agent_reference_name' => 'Prednisone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1684,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'agent_reference_name' => 'prega',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1685,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'agent_reference_name' => 'Pregabalin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1686,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'agent_reference_name' => 'Prilocaine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1687,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'agent_reference_name' => 'Primaquine phosphate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/primaqui.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1688,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'agent_reference_name' => 'Primidone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1689,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'agent_reference_name' => 'Primrose',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/primrose/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1690,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'agent_reference_name' => 'Privet',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/privet/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1691,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'agent_reference_name' => 'Probenecid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1692,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'agent_reference_name' => 'Procainamide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/procaina.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1693,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'agent_reference_name' => 'Procaine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1694,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'agent_reference_name' => 'Procaine penicillin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1695,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'agent_reference_name' => 'Procarbazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1696,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'agent_reference_name' => 'Prochlorperazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1697,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'agent_reference_name' => 'Progesterone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1698,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'agent_reference_name' => 'Progestins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1699,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'agent_reference_name' => 'Proguanil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1700,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'agent_reference_name' => 'Promethazine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/prometha.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1701,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'agent_reference_name' => 'Propafenone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1702,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'agent_reference_name' => 'Propane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1703,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'agent_reference_name' => 'Propanil ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim440.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1704,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'agent_reference_name' => 'Propantheline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1705,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'agent_reference_name' => 'Propofol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1706,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'agent_reference_name' => 'Propoxur',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1707,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'agent_reference_name' => 'Propranolol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim441.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1708,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'agent_reference_name' => 'Propylene glycol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim443.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1709,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'agent_reference_name' => 'Propylene glycol monomethyl ether',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1710,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'agent_reference_name' => 'Propylthiouracil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1711,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'agent_reference_name' => 'Protamine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1712,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'agent_reference_name' => 'Proteinase inhibitors',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1713,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'agent_reference_name' => 'Protox inhibitor herbicide ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1714,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'agent_reference_name' => 'Prunus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1715,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'agent_reference_name' => 'Prussian blue',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1716,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'agent_reference_name' => 'Pseudechis australis ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/animal/pseechis.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1717,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'agent_reference_name' => 'Pseudoephedrine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1718,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'agent_reference_name' => 'Pseudoephedrine-combination',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1719,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'agent_reference_name' => 'Pseudonaja affinis ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/animal/pseunaja.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1720,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'agent_reference_name' => 'Psilocybe and others',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/fungi/pimg027.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1721,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'agent_reference_name' => 'Pteridophyte',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1722,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'agent_reference_name' => 'Pyracantha',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1723,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'agent_reference_name' => 'Pyran derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1724,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'agent_reference_name' => 'Pyrantel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1725,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'agent_reference_name' => 'Pyrazine derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1726,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'agent_reference_name' => 'Pyrethrins & Pyrethroids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg026.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1727,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'agent_reference_name' => 'Pyridine-herbicide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=96',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1728,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'agent_reference_name' => 'Pyridostigmine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1729,
                'updated_at' => NULL,
            ),
            229 => 
            array (
            'agent_reference_name' => 'Pyridoxine (vitamin B6)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1730,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'agent_reference_name' => 'Pyridylium derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1731,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'agent_reference_name' => 'Pyrimidine derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1732,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'agent_reference_name' => 'Quaternary ammonium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg022.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1733,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'agent_reference_name' => 'Quazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim932.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1734,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'agent_reference_name' => 'Queensland Nut',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/queensland-nut/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1735,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'agent_reference_name' => 'Quetiapine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1736,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'agent_reference_name' => 'Quinapril',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1737,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'agent_reference_name' => 'Quinbolone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim916.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1738,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'agent_reference_name' => 'Quinidine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/quinidin.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1739,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'agent_reference_name' => 'Quinine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim464.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1740,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'agent_reference_name' => 'Rabeprazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1741,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'agent_reference_name' => 'Rabies immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1742,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'agent_reference_name' => 'Rabies vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1743,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'agent_reference_name' => 'Radiation',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1744,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'agent_reference_name' => 'Radium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=154',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1745,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'agent_reference_name' => 'Radon',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=71',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1746,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'agent_reference_name' => 'Raisins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/raisins/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1747,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'agent_reference_name' => 'Raloxifene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1748,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'agent_reference_name' => 'Raltitrexed',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1749,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'agent_reference_name' => 'Ramelteon',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1750,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'agent_reference_name' => 'Ramipril',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1751,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'agent_reference_name' => 'Ranitidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1752,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'agent_reference_name' => 'Rare-earth-metals ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1753,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'agent_reference_name' => 'Rasagiline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1754,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'agent_reference_name' => 'Rattlesnake',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/rattlesnake/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1755,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'agent_reference_name' => 'Rauvolfia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1756,
                'updated_at' => NULL,
            ),
            256 => 
            array (
            'agent_reference_name' => 'RDX (Cyclonite)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=72',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1757,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'agent_reference_name' => 'Reboxetine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1758,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'agent_reference_name' => 'Red Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/red-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1759,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'agent_reference_name' => 'Redback spider',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1760,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'agent_reference_name' => 'Red-Marginated Dracaena',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/red-margined-dracaena/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1761,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'agent_reference_name' => 'Repaglinide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1762,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'agent_reference_name' => 'Reserpine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/reserpn.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1763,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'agent_reference_name' => 'Retinol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/retinol.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1764,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'agent_reference_name' => 'Rhenium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1765,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'agent_reference_name' => 'Rhododendrons',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/rhododendrons/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1766,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'agent_reference_name' => 'Rhubarb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/rhubarb/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1767,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'agent_reference_name' => 'Rhus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1768,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'agent_reference_name' => 'Ribbon Plant',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/ribbon-plant/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1769,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'agent_reference_name' => 'Ribes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1770,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'agent_reference_name' => 'Ricinus communis L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/ricinus.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1771,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'agent_reference_name' => 'Rifampicin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/rifam.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1772,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'agent_reference_name' => 'Rimantadine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1773,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'agent_reference_name' => 'Risedronate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1774,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'agent_reference_name' => 'Risperidone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1775,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'agent_reference_name' => 'Ritodrine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1776,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'agent_reference_name' => 'Rivaroxaban',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1777,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'agent_reference_name' => 'Rivastigmine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1778,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'agent_reference_name' => 'Rizatriptan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1779,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'agent_reference_name' => 'Robinia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1780,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'agent_reference_name' => 'Rocuronium bromide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1781,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'agent_reference_name' => 'Rofecoxib',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1782,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'agent_reference_name' => 'Ropinirole hydrochloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1783,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'agent_reference_name' => 'Rose bengal sodium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1784,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'agent_reference_name' => 'Rosiglitazone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1785,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'agent_reference_name' => 'Rosuvastatin calcium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1786,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'agent_reference_name' => 'Rotenone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim474.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1787,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'agent_reference_name' => 'Roxithromycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1788,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'agent_reference_name' => 'Rubber Tree Plant',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/rubber-tree-plant/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1789,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'agent_reference_name' => 'Rubella immunoglobulin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1790,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'agent_reference_name' => 'Rubella vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1791,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'agent_reference_name' => 'Rubrum Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/rubrum-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1792,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'agent_reference_name' => 'Ruta graveolens L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/rutagrav.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1793,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'agent_reference_name' => 'Saccharin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1794,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'agent_reference_name' => 'Saccharomyces boulardii',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1795,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'agent_reference_name' => 'S-adenosylmethionin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1796,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'agent_reference_name' => 'Sago Palm',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/sago-palm/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1797,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'agent_reference_name' => 'Saintpaulia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1798,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'agent_reference_name' => 'Salbutamol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1799,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'agent_reference_name' => 'Salicylates',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1800,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'agent_reference_name' => 'Salicylic acid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim642.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1801,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'agent_reference_name' => 'Salix',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1802,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'agent_reference_name' => 'Salmeterol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1803,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'agent_reference_name' => 'Salt',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/salt/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1804,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'agent_reference_name' => 'Salvia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1805,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'agent_reference_name' => 'Sambucus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1806,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'agent_reference_name' => 'Sansevieria',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/sansevieria/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1807,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'agent_reference_name' => 'Scandium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1808,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'agent_reference_name' => 'Schefflera',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/schefflera/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1809,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'agent_reference_name' => 'Schinus molle',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1810,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'agent_reference_name' => 'Scilla maritima L. Baker ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim479fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1811,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'agent_reference_name' => 'Scombroid Fish Poisoning',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1812,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'agent_reference_name' => 'Scorpion - Unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1813,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'agent_reference_name' => 'Scorpions',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/scorpions/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1814,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'agent_reference_name' => 'Scotch Broom',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/scotch-broom/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1815,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'agent_reference_name' => 'Sea Urchin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1816,
                'updated_at' => NULL,
            ),
            316 => 
            array (
            'agent_reference_name' => 'Selective Serotonin Re-uptake Inhibitors (SSRI)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pimg011.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1817,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'agent_reference_name' => 'Selegiline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1818,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'agent_reference_name' => 'Selenium ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim483.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1819,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'agent_reference_name' => 'Selenium Hexafluoride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=215',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1820,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'agent_reference_name' => 'Senecio Vulgaris L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/senecio.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1821,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'agent_reference_name' => 'Senega',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1822,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'agent_reference_name' => 'Senna glycosides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1823,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'agent_reference_name' => 'Sennosides A and B ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1824,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'agent_reference_name' => 'Sertraline ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim177.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1825,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'agent_reference_name' => 'Sevelamer hydrochloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1826,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'agent_reference_name' => 'Shamrock',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/shamrock/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1827,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'agent_reference_name' => 'Shellfish-poisoning',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1828,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'agent_reference_name' => 'Sibutramine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1829,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'agent_reference_name' => 'Silbybum marion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1830,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'agent_reference_name' => 'Sildenafil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1831,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'agent_reference_name' => 'Silica',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=290',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1832,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'agent_reference_name' => 'Silica gel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1833,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'agent_reference_name' => 'Silicon compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1834,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'agent_reference_name' => 'Silicon oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1835,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'agent_reference_name' => 'Silicones',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1836,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'agent_reference_name' => 'Silver',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=97',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1837,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'agent_reference_name' => 'Silver nitrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1838,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'agent_reference_name' => 'Silver sulfadiazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1839,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'agent_reference_name' => 'Silymarin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1840,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'agent_reference_name' => 'Simethicone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1841,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'agent_reference_name' => 'Simvastatin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1842,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'agent_reference_name' => 'Sirolimus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1843,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'agent_reference_name' => 'Sitagliptin phosphate monohydrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1844,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'agent_reference_name' => 'Skunk Cabbage',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/skunk-cabbage/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1845,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'agent_reference_name' => 'Sleep Aids',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/sleep-aids/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1846,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'agent_reference_name' => 'Smog',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1847,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'agent_reference_name' => 'Smoke',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1848,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'agent_reference_name' => 'Smoke Inhalation',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/smoke-inhalation/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1849,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'agent_reference_name' => 'Snake - Unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1850,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'agent_reference_name' => 'Snowdrops',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/snowdrops/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1851,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'agent_reference_name' => 'Sodium alginate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1852,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'agent_reference_name' => 'Sodium aurothiomalate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1853,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'agent_reference_name' => 'Sodium azide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1854,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'agent_reference_name' => 'Sodium bicarbonate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1855,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'agent_reference_name' => 'Sodium bisulphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1856,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'agent_reference_name' => 'Sodium carbonate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1857,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'agent_reference_name' => 'Sodium chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1858,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'agent_reference_name' => 'Sodium Chlorite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1859,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'agent_reference_name' => 'Sodium citrate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1860,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'agent_reference_name' => 'Sodium cyanide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1861,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'agent_reference_name' => 'Sodium fluoride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1862,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'agent_reference_name' => 'Sodium fluoroacetate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim494.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1863,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'agent_reference_name' => 'Sodium Hydroxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=45',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1864,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'agent_reference_name' => 'Sodium hypochlorite ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim495.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1865,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'agent_reference_name' => 'Sodium metabisulfite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1866,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'agent_reference_name' => 'Sodium metasilicate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim500.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1867,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'agent_reference_name' => 'Sodium monofloroacetate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1868,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'agent_reference_name' => 'Sodium monofluorophosphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1869,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'agent_reference_name' => 'Sodium nitrite',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1870,
                'updated_at' => NULL,
            ),
            370 => 
            array (
            'agent_reference_name' => 'Sodium phosphate (32P)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1871,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'agent_reference_name' => 'Sodium picosulfate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1872,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'agent_reference_name' => 'Sodium polyacrylate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1873,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'agent_reference_name' => 'Sodium selenate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1874,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'agent_reference_name' => 'Sodium silicate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1875,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'agent_reference_name' => 'Sodium sulfide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1876,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'agent_reference_name' => 'Sodium Thiosulphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1877,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'agent_reference_name' => 'Sodium tripolyphosphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1878,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'agent_reference_name' => 'Sofosbuvir',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1879,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'agent_reference_name' => 'Soft paraffin and fat products',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1880,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'agent_reference_name' => 'soil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1881,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'agent_reference_name' => 'Solanum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1882,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'agent_reference_name' => 'Solanum nigrum L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/solanum.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1883,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'agent_reference_name' => 'Solifenacin succinate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1884,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'agent_reference_name' => 'Somatostatin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1885,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'agent_reference_name' => 'Somatropin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1886,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'agent_reference_name' => 'Sorbitol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1887,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'agent_reference_name' => 'Sorbus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1888,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'agent_reference_name' => 'Sotalol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1889,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'agent_reference_name' => 'Spartium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1890,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'agent_reference_name' => 'Spartium junceum L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/spartium.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1891,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'agent_reference_name' => 'Spathiphllum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1892,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'agent_reference_name' => 'Spider - huntsman',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1893,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'agent_reference_name' => 'Spider - Unknown',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/spiders/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1894,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'agent_reference_name' => 'Spider Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/lily-spider/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1895,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'agent_reference_name' => 'Spider white-tailed',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1896,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'agent_reference_name' => 'Spinosad A & D ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1897,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'agent_reference_name' => 'Spironolactone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1898,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'agent_reference_name' => 'Split-Leaf Philodendron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/split-leaf-philodendron/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1899,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'agent_reference_name' => 'Spotted Dumbcane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/spotted-dumb-cane/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1900,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'agent_reference_name' => 'St Johns Wort',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1901,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'agent_reference_name' => 'Stanolone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim917.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1902,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'agent_reference_name' => 'Stanozolol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim918.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1903,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'agent_reference_name' => 'Star Fruit',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/starfruit/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1904,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'agent_reference_name' => 'Star of Bethlehem',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/star-of-bethlehem/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1905,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'agent_reference_name' => 'Stargazer Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/stargazer-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1906,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'agent_reference_name' => 'Sterculia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1907,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'agent_reference_name' => 'Stinging Nettle',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/stinging-nettle/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1908,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'agent_reference_name' => 'Stingray',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1909,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'agent_reference_name' => 'Stoddard Solvent',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=73',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1910,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'agent_reference_name' => 'Streptokinase',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1911,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'agent_reference_name' => 'Streptomycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1912,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'agent_reference_name' => 'String of Pearls',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/string-of-pearls/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1913,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'agent_reference_name' => 'Striped Dracaena',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/striped-dracaena/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1914,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'agent_reference_name' => 'Strontium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=120',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1915,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'agent_reference_name' => 'Strychnine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim507.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1916,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'agent_reference_name' => 'Strychnos',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1917,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'agent_reference_name' => 'Styrene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1918,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'agent_reference_name' => 'Styrene ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim509.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1919,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'agent_reference_name' => 'Sugammadex sodium ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1920,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'agent_reference_name' => 'Sulbactam',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1921,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'agent_reference_name' => 'Sulfacetamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1922,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'agent_reference_name' => 'Sulfadiazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1923,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'agent_reference_name' => 'Sulfamate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1924,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'agent_reference_name' => 'Sulfamethoxazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1925,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'agent_reference_name' => 'Sulfamic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1926,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'agent_reference_name' => 'Sulfasalazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1927,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'agent_reference_name' => 'Sulfate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1928,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'agent_reference_name' => 'Sulfide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1929,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'agent_reference_name' => 'Sulfites',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1930,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'agent_reference_name' => 'Sulfonamides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1931,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'agent_reference_name' => 'Sulfur compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1932,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'agent_reference_name' => 'Sulindac',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1933,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'agent_reference_name' => 'Sulphur/Sulfur Dioxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=46',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1934,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'agent_reference_name' => 'Sulphur/Sulfur Mustard',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=184',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1935,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'agent_reference_name' => 'Sulphur/Sulfur Trioxide & Sulfuric Acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=47',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1936,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'agent_reference_name' => 'Sulthiame',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1937,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'agent_reference_name' => 'Sumatriptan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1938,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'agent_reference_name' => 'Suvorexant',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1939,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'agent_reference_name' => 'Suxamethonium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1940,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'agent_reference_name' => 'Sweet Pea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/sweet-pea/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1941,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'agent_reference_name' => 'Symphoricarpos',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1942,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'agent_reference_name' => 'Synanceja [stonefish]',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1943,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'agent_reference_name' => 'Syngonium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1944,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'agent_reference_name' => 'Synthetic cannabinoid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1945,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'agent_reference_name' => 'Synthetic Cathinone derivative ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1946,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'agent_reference_name' => 'Synthetic Vitreous Fibers',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=185',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1947,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'agent_reference_name' => 'Syzgium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1948,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'agent_reference_name' => 'Tacrine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1949,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'agent_reference_name' => 'Tacrolimus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1950,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'agent_reference_name' => 'Tadalafil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1951,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'agent_reference_name' => 'Talc',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1952,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'agent_reference_name' => 'Tamoxifen citrate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/tamoxife.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1953,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'agent_reference_name' => 'Tamsulosin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1954,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'agent_reference_name' => 'Tapentadol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1955,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'agent_reference_name' => 'Taro Vine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/taro-vine/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1956,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'agent_reference_name' => 'Tasosartan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1957,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'agent_reference_name' => 'Taxus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1958,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'agent_reference_name' => 'Tea Tree Oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tea-tree-oil/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1959,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'agent_reference_name' => 'Teflon decomposition',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1960,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'agent_reference_name' => 'Telmisartan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1961,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'agent_reference_name' => 'Temazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim683.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1962,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'agent_reference_name' => 'Temozolomide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1963,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'agent_reference_name' => 'Tenecteplase',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1964,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'agent_reference_name' => 'Teniposide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1965,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'agent_reference_name' => 'Terbinafine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1966,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'agent_reference_name' => 'Terbutaline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1967,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'agent_reference_name' => 'Terfenadine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1968,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'agent_reference_name' => 'Testosterone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim519.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1969,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'agent_reference_name' => 'Tetanus antitoxin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/tetatox.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1970,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'agent_reference_name' => 'Tetanus toxoid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1971,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'agent_reference_name' => 'Tetanus vaccine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/tetanvac.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1972,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'agent_reference_name' => 'Tetrabenazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1973,
                'updated_at' => NULL,
            ),
            473 => 
            array (
            'agent_reference_name' => 'Tetrachloroethylene (PERC)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=48',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1974,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'agent_reference_name' => 'Tetracyclines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1975,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'agent_reference_name' => 'Tetraethyl lead',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1976,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'agent_reference_name' => 'Tetrahydrozoline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1977,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'agent_reference_name' => 'Tetramethylene disulfotetramine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim982.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1978,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'agent_reference_name' => 'Tetrazepam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim933.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1979,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'agent_reference_name' => 'Tetrodotoxic fish poisoning',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1980,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'agent_reference_name' => 'Tetryl',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=216',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1981,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'agent_reference_name' => 'Thalidomide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1982,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'agent_reference_name' => 'Thallium ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim525.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1983,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'agent_reference_name' => 'Thallium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1984,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'agent_reference_name' => 'Theobromine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1985,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'agent_reference_name' => 'Theophylline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1986,
                'updated_at' => NULL,
            ),
            486 => 
            array (
            'agent_reference_name' => 'Thevetia peruviana (Pers.)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/thevetia.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1987,
                'updated_at' => NULL,
            ),
            487 => 
            array (
            'agent_reference_name' => 'Thiamine  (vitamin B1) and salts',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pimg015.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1988,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'agent_reference_name' => 'Thiocyanate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1989,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'agent_reference_name' => 'Thiodiglycol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim980.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1990,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'agent_reference_name' => 'Thioglycolates',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1991,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'agent_reference_name' => 'Thiophene derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1992,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'agent_reference_name' => 'Thioridazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1993,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'agent_reference_name' => 'Thiosulfate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1994,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'agent_reference_name' => 'Thiotepa',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1995,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'agent_reference_name' => 'Thiram',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1996,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'agent_reference_name' => 'Thorium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=121',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1997,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'agent_reference_name' => 'Thrombin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1998,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'agent_reference_name' => 'Thyroid Pharmaceutical',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/thyroid-Pharmaceutical/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 1999,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'agent_reference_name' => 'Thyroxine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2000,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('agents')->insert(array (
            0 => 
            array (
                'agent_reference_name' => 'Tiagabine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2001,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'agent_reference_name' => 'Tianeptine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2002,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'agent_reference_name' => 'Tiaprofenic acid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2003,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'agent_reference_name' => 'Tibolone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2004,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'agent_reference_name' => 'Ticagrelor',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2005,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'agent_reference_name' => 'Ticarcillin sodium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2006,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'agent_reference_name' => 'Tick Collar',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tick-collar/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2007,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'agent_reference_name' => 'Tick-unidentified',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2008,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'agent_reference_name' => 'Tiger Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tiger-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2009,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'agent_reference_name' => 'Tilactase',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2010,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'agent_reference_name' => 'Tilmicosin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2011,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'agent_reference_name' => 'Timolol ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/timolol.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2012,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'agent_reference_name' => 'Tin and Compounds',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=98',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2013,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'agent_reference_name' => 'Tin compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2014,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'agent_reference_name' => 'Tinidazole',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2015,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'agent_reference_name' => 'Tinsel',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tinsel/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2016,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'agent_reference_name' => 'Tioguanine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2017,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'agent_reference_name' => 'Tiopronin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2018,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'agent_reference_name' => 'Tiotropium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2019,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'agent_reference_name' => 'Tiracizine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2020,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'agent_reference_name' => 'Tirofiban',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2021,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'agent_reference_name' => 'Titanium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2022,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'agent_reference_name' => 'Titanium Dioxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2023,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'agent_reference_name' => 'Titanium oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2024,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'agent_reference_name' => 'Titanium Tetrachloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=122',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2025,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'agent_reference_name' => 'Tizanidine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2026,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'agent_reference_name' => 'Toads',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/toads/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2027,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'agent_reference_name' => 'Tobacco',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tobacco/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2028,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'agent_reference_name' => 'Tobramycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2029,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'agent_reference_name' => 'Tofisopam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim686.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2030,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'agent_reference_name' => 'Tolbutamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2031,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'agent_reference_name' => 'Tolterodine tartrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2032,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'agent_reference_name' => 'Toluene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=29',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2033,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'agent_reference_name' => 'Toluene Diisocyanate / Methylenediphenyl Diisocyanate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=245',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2034,
                'updated_at' => NULL,
            ),
            34 => 
            array (
            'agent_reference_name' => 'Toluene-2,4-diisocyanate (TDI) ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim534.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2035,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'agent_reference_name' => 'Tomato',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tomato-plant/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2036,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'agent_reference_name' => 'Topiramate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2037,
                'updated_at' => NULL,
            ),
            37 => 
            array (
            'agent_reference_name' => 'Total Petroleum Hydrocarbons (TPH)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=75',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2038,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'agent_reference_name' => 'Toxaphene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=99',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2039,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'agent_reference_name' => 'Toxic products of combustion',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2040,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'agent_reference_name' => 'Tramadol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2041,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'agent_reference_name' => 'Trandolapril',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2042,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'agent_reference_name' => 'Tranexamic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2043,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'agent_reference_name' => 'Tranylcypromine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2044,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'agent_reference_name' => 'Trazodone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2045,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'agent_reference_name' => 'Tree Philodendron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tree-philodendron/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2046,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'agent_reference_name' => 'Triamcinolone acetonide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2047,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'agent_reference_name' => 'Triamterene',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2048,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'agent_reference_name' => 'Triazid derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2049,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'agent_reference_name' => 'Triazine derivative',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2050,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'agent_reference_name' => 'Triazine herbicides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg013.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2051,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'agent_reference_name' => 'Triazolam',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2052,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'agent_reference_name' => 'Triazolam ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim688.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2053,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'agent_reference_name' => 'Tributyltin compounds',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg018.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2054,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'agent_reference_name' => 'Trichlorobenzenes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=255',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2055,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'agent_reference_name' => 'Trichloroethane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2056,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'agent_reference_name' => 'Trichloroethane, 1,1,1- ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/trichlor.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2057,
                'updated_at' => NULL,
            ),
            57 => 
            array (
            'agent_reference_name' => 'Trichloroethylene (TCE)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=30',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2058,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'agent_reference_name' => 'Triclosan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2059,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'agent_reference_name' => 'Triethyltin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim588.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2060,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'agent_reference_name' => 'Trifluoperazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2061,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'agent_reference_name' => 'Trifluralin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2062,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'agent_reference_name' => 'Triforine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2063,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'agent_reference_name' => 'Triglycerides',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2064,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'agent_reference_name' => 'Trilostane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2065,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'agent_reference_name' => 'Trimeprazine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2066,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'agent_reference_name' => 'Trimethoprim',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2067,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'agent_reference_name' => 'Trimethyltin compounds',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pimg019.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2068,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'agent_reference_name' => 'Trimipramine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2069,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'agent_reference_name' => 'Triphenyltin acetate ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim589.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2070,
                'updated_at' => NULL,
            ),
            70 => 
            array (
            'agent_reference_name' => 'Triticum (wheat fibre)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2071,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'agent_reference_name' => 'Tropic Snow Dumbcane',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tropic-snow-dumbcane/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2072,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'agent_reference_name' => 'Tropicamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2073,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'agent_reference_name' => 'Tropisetron',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2074,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'agent_reference_name' => 'Trypsin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2075,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'agent_reference_name' => 'Tryptophan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2076,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'agent_reference_name' => 'Tuberculosis vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2077,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'agent_reference_name' => 'Tubocurarine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2078,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'agent_reference_name' => 'Tulathromycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2079,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'agent_reference_name' => 'Tulipa',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2080,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'agent_reference_name' => 'Tulips & Hyacinths',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/tulip/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2081,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'agent_reference_name' => 'Tungstate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2082,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'agent_reference_name' => 'Tungsten compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=157',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2083,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'agent_reference_name' => 'Turpentine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2084,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'agent_reference_name' => 'Typhoid vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2085,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'agent_reference_name' => 'Typhus vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2086,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'agent_reference_name' => 'Ubiquinones',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2087,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'agent_reference_name' => 'Uranium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=77',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2088,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'agent_reference_name' => 'Urea ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2089,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'agent_reference_name' => 'Urginea',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2090,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'agent_reference_name' => 'Urine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2091,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'agent_reference_name' => 'Urokinase',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2092,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'agent_reference_name' => 'Ursodeoxycholic acid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2093,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'agent_reference_name' => 'Used Mineral-based Crankcase Oil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=123',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2094,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'agent_reference_name' => 'Utraviolet light',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2095,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'agent_reference_name' => 'Vaccine-other',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2096,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'agent_reference_name' => 'Valaciclovir',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2097,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'agent_reference_name' => 'Valerian',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2098,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'agent_reference_name' => 'Valproic acid ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/pim551.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2099,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'agent_reference_name' => 'Valsartan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2100,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'agent_reference_name' => 'Vanadium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=50',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2101,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'agent_reference_name' => 'Vanadium oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2102,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'agent_reference_name' => 'Vancomycin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2103,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'agent_reference_name' => 'Vardenafil',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2104,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'agent_reference_name' => 'Varenicline tartrate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2105,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'agent_reference_name' => 'Varicella vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2106,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'agent_reference_name' => 'Vasopressin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2107,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'agent_reference_name' => 'Vecuronium',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2108,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'agent_reference_name' => 'Venlafaxine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2109,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'agent_reference_name' => 'Verapamil ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/verapami.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2110,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'agent_reference_name' => 'Veratrum',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2111,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'agent_reference_name' => 'Vigabatrin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2112,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'agent_reference_name' => 'Vildagliptin',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2113,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'agent_reference_name' => 'Vinblastine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2114,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'agent_reference_name' => 'Vincristine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2115,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'agent_reference_name' => 'Vinorelbine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2116,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'agent_reference_name' => 'Vinyl Acetate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=124',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2117,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'agent_reference_name' => 'Vinyl chloride ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim558.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2118,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'agent_reference_name' => 'Virginia Creeper',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/virginia-creeper/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2119,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'agent_reference_name' => 'Viscum album L. ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/pim562fr.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2120,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'agent_reference_name' => 'Vitamin A',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2121,
                'updated_at' => NULL,
            ),
            121 => 
            array (
            'agent_reference_name' => 'Vitamin B12 (cyanocobalamin and derivatives)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2122,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'agent_reference_name' => 'Vitamin B-complex',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2123,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'agent_reference_name' => 'Vitamin D, and analogues',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2124,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'agent_reference_name' => 'Vitamin E',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2125,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'agent_reference_name' => 'Vitamin K',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2126,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'agent_reference_name' => 'Vitamins',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/vitamins/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2127,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'agent_reference_name' => 'Von Willebrand factor and coagulation factor VIII in combination',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2128,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'agent_reference_name' => 'Vortioxetine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2129,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'agent_reference_name' => 'Warfarin ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/pim563.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2130,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'agent_reference_name' => 'Warneckii Dracaena',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/warneckei-dracaena/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2131,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'agent_reference_name' => 'Wasp-Hornet',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2132,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'agent_reference_name' => 'Water',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2133,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'agent_reference_name' => 'Water Hemlock',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/water-hemlock/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2134,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'agent_reference_name' => 'Water-based paint-domestic',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2135,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'agent_reference_name' => 'Weeping Fig',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/weeping-fig/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2136,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'agent_reference_name' => 'White Phosphorus',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=52',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2137,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'agent_reference_name' => 'Windshield Wiper Fluid',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/windshield-wiper-fluid/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2138,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'agent_reference_name' => 'Wisteria sinensis - Sweet Wisteria floribunda ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/plant/wisteria.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2139,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'agent_reference_name' => 'Wood Lily',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/wood-lily/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2140,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'agent_reference_name' => 'Xylene ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/xylene.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2141,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'agent_reference_name' => 'Xylenes',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'https://www.atsdr.cdc.gov/substances/toxsubstance.asp?toxid=53',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2142,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'agent_reference_name' => 'Xylitol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/xylitol/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2143,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'agent_reference_name' => 'Xylometazoline',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2144,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'agent_reference_name' => 'Yellow fever vaccines',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2145,
                'updated_at' => NULL,
            ),
            145 => 
            array (
            'agent_reference_name' => 'Yellow Stainer (Agaricus xanthoderma)',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2146,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'agent_reference_name' => 'Yesterday, Today, Tomorrow',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/yesterday-today-tomorrow/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2147,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'agent_reference_name' => 'Yew',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/japanese-yew/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2148,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'agent_reference_name' => 'Yohimbine ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/pharm/yohimbin.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2149,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'agent_reference_name' => 'Yucca',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://www.petpoisonhelpline.com/poison/yucca/',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2150,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'agent_reference_name' => 'Zamia palm ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2151,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'agent_reference_name' => 'Zantedeschia',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2152,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'agent_reference_name' => 'Zidovudine',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2153,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'agent_reference_name' => 'Zinc and salts',
                'agent_reference_source' => NULL,
                'agent_reference_url' => 'http://inchem.org/documents/pims/chemical/zincsalt.htm#PartTitle:1.%20%20NAME',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2154,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'agent_reference_name' => 'Zinc oxide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2155,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'agent_reference_name' => 'Zinc sulphate',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2156,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'agent_reference_name' => 'Zineb',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2157,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'agent_reference_name' => 'Zinic chloride',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2158,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'agent_reference_name' => 'Ziprasidone ',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2159,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'agent_reference_name' => 'Zirconium compound',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2160,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'agent_reference_name' => 'Zolmitriptan',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2161,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'agent_reference_name' => 'Zolpidem',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2162,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'agent_reference_name' => 'Zonisamide',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2163,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'agent_reference_name' => 'Zopiclone',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2164,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'agent_reference_name' => 'Zuclopenthixol',
                'agent_reference_source' => NULL,
                'agent_reference_url' => '',
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2165,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'agent_reference_name' => 'Zylazine and related agents',
                'agent_reference_source' => NULL,
                'agent_reference_url' => NULL,
                'created_at' => NULL,
                'dataset_id' => 1,
                'id' => 2166,
                'updated_at' => '2020-08-06 03:04:49',
            ),
        ));
        
        
    }
}