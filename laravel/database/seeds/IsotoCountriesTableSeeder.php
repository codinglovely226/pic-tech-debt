<?php

use Illuminate\Database\Seeder;

class IsotoCountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('isoto_countries')->delete();
        
        \DB::table('isoto_countries')->insert(array (
            0 => 
            array (
                'country_name' => 'Afghanistan',
                'created_at' => NULL,
                'id' => 1,
                'iso_alpha_2' => 'AF',
                'iso_alpha_3' => 'AFG',
                'iso_un_m_49' => 4,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'country_name' => 'Aland Islands',
                'created_at' => NULL,
                'id' => 2,
                'iso_alpha_2' => 'AX',
                'iso_alpha_3' => 'ALA',
                'iso_un_m_49' => 248,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'country_name' => 'Albania',
                'created_at' => NULL,
                'id' => 3,
                'iso_alpha_2' => 'AL',
                'iso_alpha_3' => 'ALB',
                'iso_un_m_49' => 8,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'country_name' => 'Algeria',
                'created_at' => NULL,
                'id' => 4,
                'iso_alpha_2' => 'DZ',
                'iso_alpha_3' => 'DZA',
                'iso_un_m_49' => 12,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'country_name' => 'American Samoa',
                'created_at' => NULL,
                'id' => 5,
                'iso_alpha_2' => 'AS',
                'iso_alpha_3' => 'ASM',
                'iso_un_m_49' => 16,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'country_name' => 'Andorra',
                'created_at' => NULL,
                'id' => 6,
                'iso_alpha_2' => 'AD',
                'iso_alpha_3' => 'AND',
                'iso_un_m_49' => 20,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'country_name' => 'Angola',
                'created_at' => NULL,
                'id' => 7,
                'iso_alpha_2' => 'AO',
                'iso_alpha_3' => 'AGO',
                'iso_un_m_49' => 24,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'country_name' => 'Anguilla',
                'created_at' => NULL,
                'id' => 8,
                'iso_alpha_2' => 'AI',
                'iso_alpha_3' => 'AIA',
                'iso_un_m_49' => 660,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'country_name' => 'Antarctica',
                'created_at' => NULL,
                'id' => 9,
                'iso_alpha_2' => 'AQ',
                'iso_alpha_3' => 'ATA',
                'iso_un_m_49' => 10,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'country_name' => 'Antigua and Barbuda',
                'created_at' => NULL,
                'id' => 10,
                'iso_alpha_2' => 'AG',
                'iso_alpha_3' => 'ATG',
                'iso_un_m_49' => 28,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'country_name' => 'Argentina',
                'created_at' => NULL,
                'id' => 11,
                'iso_alpha_2' => 'AR',
                'iso_alpha_3' => 'ARG',
                'iso_un_m_49' => 32,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'country_name' => 'Armenia',
                'created_at' => NULL,
                'id' => 12,
                'iso_alpha_2' => 'AM',
                'iso_alpha_3' => 'ARM',
                'iso_un_m_49' => 51,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'country_name' => 'Aruba',
                'created_at' => NULL,
                'id' => 13,
                'iso_alpha_2' => 'AW',
                'iso_alpha_3' => 'ABW',
                'iso_un_m_49' => 533,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'country_name' => 'Australia',
                'created_at' => NULL,
                'id' => 14,
                'iso_alpha_2' => 'AU',
                'iso_alpha_3' => 'AUS',
                'iso_un_m_49' => 36,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'country_name' => 'Austria',
                'created_at' => NULL,
                'id' => 15,
                'iso_alpha_2' => 'AT',
                'iso_alpha_3' => 'AUT',
                'iso_un_m_49' => 40,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'country_name' => 'Azerbaijan',
                'created_at' => NULL,
                'id' => 16,
                'iso_alpha_2' => 'AZ',
                'iso_alpha_3' => 'AZE',
                'iso_un_m_49' => 31,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'country_name' => 'Bahamas',
                'created_at' => NULL,
                'id' => 17,
                'iso_alpha_2' => 'BS',
                'iso_alpha_3' => 'BHS',
                'iso_un_m_49' => 44,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'country_name' => 'Bahrain',
                'created_at' => NULL,
                'id' => 18,
                'iso_alpha_2' => 'BH',
                'iso_alpha_3' => 'BHR',
                'iso_un_m_49' => 48,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'country_name' => 'Bangladesh',
                'created_at' => NULL,
                'id' => 19,
                'iso_alpha_2' => 'BD',
                'iso_alpha_3' => 'BGD',
                'iso_un_m_49' => 50,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'country_name' => 'Barbados',
                'created_at' => NULL,
                'id' => 20,
                'iso_alpha_2' => 'BB',
                'iso_alpha_3' => 'BRB',
                'iso_un_m_49' => 52,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'country_name' => 'Belarus',
                'created_at' => NULL,
                'id' => 21,
                'iso_alpha_2' => 'BY',
                'iso_alpha_3' => 'BLR',
                'iso_un_m_49' => 112,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'country_name' => 'Belgium',
                'created_at' => NULL,
                'id' => 22,
                'iso_alpha_2' => 'BE',
                'iso_alpha_3' => 'BEL',
                'iso_un_m_49' => 56,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'country_name' => 'Belize',
                'created_at' => NULL,
                'id' => 23,
                'iso_alpha_2' => 'BZ',
                'iso_alpha_3' => 'BLZ',
                'iso_un_m_49' => 84,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'country_name' => 'Benin',
                'created_at' => NULL,
                'id' => 24,
                'iso_alpha_2' => 'BJ',
                'iso_alpha_3' => 'BEN',
                'iso_un_m_49' => 204,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'country_name' => 'Bermuda',
                'created_at' => NULL,
                'id' => 25,
                'iso_alpha_2' => 'BM',
                'iso_alpha_3' => 'BMU',
                'iso_un_m_49' => 60,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'country_name' => 'Bhutan',
                'created_at' => NULL,
                'id' => 26,
                'iso_alpha_2' => 'BT',
                'iso_alpha_3' => 'BTN',
                'iso_un_m_49' => 64,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'country_name' => 'Bolivia',
                'created_at' => NULL,
                'id' => 27,
                'iso_alpha_2' => 'BO',
                'iso_alpha_3' => 'BOL',
                'iso_un_m_49' => 68,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'country_name' => 'Bosnia and Herzegovina',
                'created_at' => NULL,
                'id' => 28,
                'iso_alpha_2' => 'BA',
                'iso_alpha_3' => 'BIH',
                'iso_un_m_49' => 70,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'country_name' => 'Botswana',
                'created_at' => NULL,
                'id' => 29,
                'iso_alpha_2' => 'BW',
                'iso_alpha_3' => 'BWA',
                'iso_un_m_49' => 72,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'country_name' => 'Bouvet Island',
                'created_at' => NULL,
                'id' => 30,
                'iso_alpha_2' => 'BV',
                'iso_alpha_3' => 'BVT',
                'iso_un_m_49' => 74,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'country_name' => 'Brazil',
                'created_at' => NULL,
                'id' => 31,
                'iso_alpha_2' => 'BR',
                'iso_alpha_3' => 'BRA',
                'iso_un_m_49' => 76,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'country_name' => 'British Virgin Islands',
                'created_at' => NULL,
                'id' => 32,
                'iso_alpha_2' => 'VG',
                'iso_alpha_3' => 'VGB',
                'iso_un_m_49' => 92,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'country_name' => 'British Indian Ocean Territory',
                'created_at' => NULL,
                'id' => 33,
                'iso_alpha_2' => 'IO',
                'iso_alpha_3' => 'IOT',
                'iso_un_m_49' => 86,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'country_name' => 'Brunei Darussalam',
                'created_at' => NULL,
                'id' => 34,
                'iso_alpha_2' => 'BN',
                'iso_alpha_3' => 'BRN',
                'iso_un_m_49' => 96,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'country_name' => 'Bulgaria',
                'created_at' => NULL,
                'id' => 35,
                'iso_alpha_2' => 'BG',
                'iso_alpha_3' => 'BGR',
                'iso_un_m_49' => 100,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'country_name' => 'Burkina Faso',
                'created_at' => NULL,
                'id' => 36,
                'iso_alpha_2' => 'BF',
                'iso_alpha_3' => 'BFA',
                'iso_un_m_49' => 854,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'country_name' => 'Burundi',
                'created_at' => NULL,
                'id' => 37,
                'iso_alpha_2' => 'BI',
                'iso_alpha_3' => 'BDI',
                'iso_un_m_49' => 108,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'country_name' => 'Cambodia',
                'created_at' => NULL,
                'id' => 38,
                'iso_alpha_2' => 'KH',
                'iso_alpha_3' => 'KHM',
                'iso_un_m_49' => 116,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'country_name' => 'Cameroon',
                'created_at' => NULL,
                'id' => 39,
                'iso_alpha_2' => 'CM',
                'iso_alpha_3' => 'CMR',
                'iso_un_m_49' => 120,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'country_name' => 'Canada',
                'created_at' => NULL,
                'id' => 40,
                'iso_alpha_2' => 'CA',
                'iso_alpha_3' => 'CAN',
                'iso_un_m_49' => 124,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'country_name' => 'Cape Verde',
                'created_at' => NULL,
                'id' => 41,
                'iso_alpha_2' => 'CV',
                'iso_alpha_3' => 'CPV',
                'iso_un_m_49' => 132,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'country_name' => 'Cayman Islands',
                'created_at' => NULL,
                'id' => 42,
                'iso_alpha_2' => 'KY',
                'iso_alpha_3' => 'CYM',
                'iso_un_m_49' => 136,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'country_name' => 'Central African Republic',
                'created_at' => NULL,
                'id' => 43,
                'iso_alpha_2' => 'CF',
                'iso_alpha_3' => 'CAF',
                'iso_un_m_49' => 140,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'country_name' => 'Chad',
                'created_at' => NULL,
                'id' => 44,
                'iso_alpha_2' => 'TD',
                'iso_alpha_3' => 'TCD',
                'iso_un_m_49' => 148,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'country_name' => 'Chile',
                'created_at' => NULL,
                'id' => 45,
                'iso_alpha_2' => 'CL',
                'iso_alpha_3' => 'CHL',
                'iso_un_m_49' => 152,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'country_name' => 'China',
                'created_at' => NULL,
                'id' => 46,
                'iso_alpha_2' => 'CN',
                'iso_alpha_3' => 'CHN',
                'iso_un_m_49' => 156,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'country_name' => 'Hong Kong, SAR China',
                'created_at' => NULL,
                'id' => 47,
                'iso_alpha_2' => 'HK',
                'iso_alpha_3' => 'HKG',
                'iso_un_m_49' => 344,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'country_name' => 'Macao, SAR China',
                'created_at' => NULL,
                'id' => 48,
                'iso_alpha_2' => 'MO',
                'iso_alpha_3' => 'MAC',
                'iso_un_m_49' => 446,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'country_name' => 'Christmas Island',
                'created_at' => NULL,
                'id' => 49,
                'iso_alpha_2' => 'CX',
                'iso_alpha_3' => 'CXR',
                'iso_un_m_49' => 162,
                'updated_at' => NULL,
            ),
            49 => 
            array (
            'country_name' => 'Cocos (Keeling) Islands',
                'created_at' => NULL,
                'id' => 50,
                'iso_alpha_2' => 'CC',
                'iso_alpha_3' => 'CCK',
                'iso_un_m_49' => 166,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'country_name' => 'Colombia',
                'created_at' => NULL,
                'id' => 51,
                'iso_alpha_2' => 'CO',
                'iso_alpha_3' => 'COL',
                'iso_un_m_49' => 170,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'country_name' => 'Comoros',
                'created_at' => NULL,
                'id' => 52,
                'iso_alpha_2' => 'KM',
                'iso_alpha_3' => 'COM',
                'iso_un_m_49' => 174,
                'updated_at' => NULL,
            ),
            52 => 
            array (
            'country_name' => 'Congo (Brazzaville)',
                'created_at' => NULL,
                'id' => 53,
                'iso_alpha_2' => 'CG',
                'iso_alpha_3' => 'COG',
                'iso_un_m_49' => 178,
                'updated_at' => NULL,
            ),
            53 => 
            array (
            'country_name' => 'Congo, (Kinshasa)',
                'created_at' => NULL,
                'id' => 54,
                'iso_alpha_2' => 'CD',
                'iso_alpha_3' => 'COD',
                'iso_un_m_49' => 180,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'country_name' => 'Cook Islands',
                'created_at' => NULL,
                'id' => 55,
                'iso_alpha_2' => 'CK',
                'iso_alpha_3' => 'COK',
                'iso_un_m_49' => 184,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'country_name' => 'Costa Rica',
                'created_at' => NULL,
                'id' => 56,
                'iso_alpha_2' => 'CR',
                'iso_alpha_3' => 'CRI',
                'iso_un_m_49' => 188,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'country_name' => 'Côte d\'Ivoire',
                'created_at' => NULL,
                'id' => 57,
                'iso_alpha_2' => 'CI',
                'iso_alpha_3' => 'CIV',
                'iso_un_m_49' => 384,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'country_name' => 'Croatia',
                'created_at' => NULL,
                'id' => 58,
                'iso_alpha_2' => 'HR',
                'iso_alpha_3' => 'HRV',
                'iso_un_m_49' => 191,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'country_name' => 'Cuba',
                'created_at' => NULL,
                'id' => 59,
                'iso_alpha_2' => 'CU',
                'iso_alpha_3' => 'CUB',
                'iso_un_m_49' => 192,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'country_name' => 'Cyprus',
                'created_at' => NULL,
                'id' => 60,
                'iso_alpha_2' => 'CY',
                'iso_alpha_3' => 'CYP',
                'iso_un_m_49' => 196,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'country_name' => 'Czech Republic',
                'created_at' => NULL,
                'id' => 61,
                'iso_alpha_2' => 'CZ',
                'iso_alpha_3' => 'CZE',
                'iso_un_m_49' => 203,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'country_name' => 'Denmark',
                'created_at' => NULL,
                'id' => 62,
                'iso_alpha_2' => 'DK',
                'iso_alpha_3' => 'DNK',
                'iso_un_m_49' => 208,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'country_name' => 'Djibouti',
                'created_at' => NULL,
                'id' => 63,
                'iso_alpha_2' => 'DJ',
                'iso_alpha_3' => 'DJI',
                'iso_un_m_49' => 262,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'country_name' => 'Dominica',
                'created_at' => NULL,
                'id' => 64,
                'iso_alpha_2' => 'DM',
                'iso_alpha_3' => 'DMA',
                'iso_un_m_49' => 212,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'country_name' => 'Dominican Republic',
                'created_at' => NULL,
                'id' => 65,
                'iso_alpha_2' => 'DO',
                'iso_alpha_3' => 'DOM',
                'iso_un_m_49' => 214,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'country_name' => 'Ecuador',
                'created_at' => NULL,
                'id' => 66,
                'iso_alpha_2' => 'EC',
                'iso_alpha_3' => 'ECU',
                'iso_un_m_49' => 218,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'country_name' => 'Egypt',
                'created_at' => NULL,
                'id' => 67,
                'iso_alpha_2' => 'EG',
                'iso_alpha_3' => 'EGY',
                'iso_un_m_49' => 818,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'country_name' => 'El Salvador',
                'created_at' => NULL,
                'id' => 68,
                'iso_alpha_2' => 'SV',
                'iso_alpha_3' => 'SLV',
                'iso_un_m_49' => 222,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'country_name' => 'Equatorial Guinea',
                'created_at' => NULL,
                'id' => 69,
                'iso_alpha_2' => 'GQ',
                'iso_alpha_3' => 'GNQ',
                'iso_un_m_49' => 226,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'country_name' => 'Eritrea',
                'created_at' => NULL,
                'id' => 70,
                'iso_alpha_2' => 'ER',
                'iso_alpha_3' => 'ERI',
                'iso_un_m_49' => 232,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'country_name' => 'Estonia',
                'created_at' => NULL,
                'id' => 71,
                'iso_alpha_2' => 'EE',
                'iso_alpha_3' => 'EST',
                'iso_un_m_49' => 233,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'country_name' => 'Ethiopia',
                'created_at' => NULL,
                'id' => 72,
                'iso_alpha_2' => 'ET',
                'iso_alpha_3' => 'ETH',
                'iso_un_m_49' => 231,
                'updated_at' => NULL,
            ),
            72 => 
            array (
            'country_name' => 'Falkland Islands (Malvinas)',
                'created_at' => NULL,
                'id' => 73,
                'iso_alpha_2' => 'FK',
                'iso_alpha_3' => 'FLK',
                'iso_un_m_49' => 238,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'country_name' => 'Faroe Islands',
                'created_at' => NULL,
                'id' => 74,
                'iso_alpha_2' => 'FO',
                'iso_alpha_3' => 'FRO',
                'iso_un_m_49' => 234,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'country_name' => 'Fiji',
                'created_at' => NULL,
                'id' => 75,
                'iso_alpha_2' => 'FJ',
                'iso_alpha_3' => 'FJI',
                'iso_un_m_49' => 242,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'country_name' => 'Finland',
                'created_at' => NULL,
                'id' => 76,
                'iso_alpha_2' => 'FI',
                'iso_alpha_3' => 'FIN',
                'iso_un_m_49' => 246,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'country_name' => 'France',
                'created_at' => NULL,
                'id' => 77,
                'iso_alpha_2' => 'FR',
                'iso_alpha_3' => 'FRA',
                'iso_un_m_49' => 250,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'country_name' => 'French Guiana',
                'created_at' => NULL,
                'id' => 78,
                'iso_alpha_2' => 'GF',
                'iso_alpha_3' => 'GUF',
                'iso_un_m_49' => 254,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'country_name' => 'French Polynesia',
                'created_at' => NULL,
                'id' => 79,
                'iso_alpha_2' => 'PF',
                'iso_alpha_3' => 'PYF',
                'iso_un_m_49' => 258,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'country_name' => 'French Southern Territories',
                'created_at' => NULL,
                'id' => 80,
                'iso_alpha_2' => 'TF',
                'iso_alpha_3' => 'ATF',
                'iso_un_m_49' => 260,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'country_name' => 'Gabon',
                'created_at' => NULL,
                'id' => 81,
                'iso_alpha_2' => 'GA',
                'iso_alpha_3' => 'GAB',
                'iso_un_m_49' => 266,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'country_name' => 'Gambia',
                'created_at' => NULL,
                'id' => 82,
                'iso_alpha_2' => 'GM',
                'iso_alpha_3' => 'GMB',
                'iso_un_m_49' => 270,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'country_name' => 'Georgia',
                'created_at' => NULL,
                'id' => 83,
                'iso_alpha_2' => 'GE',
                'iso_alpha_3' => 'GEO',
                'iso_un_m_49' => 268,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'country_name' => 'Germany',
                'created_at' => NULL,
                'id' => 84,
                'iso_alpha_2' => 'DE',
                'iso_alpha_3' => 'DEU',
                'iso_un_m_49' => 276,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'country_name' => 'Ghana',
                'created_at' => NULL,
                'id' => 85,
                'iso_alpha_2' => 'GH',
                'iso_alpha_3' => 'GHA',
                'iso_un_m_49' => 288,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'country_name' => 'Gibraltar',
                'created_at' => NULL,
                'id' => 86,
                'iso_alpha_2' => 'GI',
                'iso_alpha_3' => 'GIB',
                'iso_un_m_49' => 292,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'country_name' => 'Greece',
                'created_at' => NULL,
                'id' => 87,
                'iso_alpha_2' => 'GR',
                'iso_alpha_3' => 'GRC',
                'iso_un_m_49' => 300,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'country_name' => 'Greenland',
                'created_at' => NULL,
                'id' => 88,
                'iso_alpha_2' => 'GL',
                'iso_alpha_3' => 'GRL',
                'iso_un_m_49' => 304,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'country_name' => 'Grenada',
                'created_at' => NULL,
                'id' => 89,
                'iso_alpha_2' => 'GD',
                'iso_alpha_3' => 'GRD',
                'iso_un_m_49' => 308,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'country_name' => 'Guadeloupe',
                'created_at' => NULL,
                'id' => 90,
                'iso_alpha_2' => 'GP',
                'iso_alpha_3' => 'GLP',
                'iso_un_m_49' => 312,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'country_name' => 'Guam',
                'created_at' => NULL,
                'id' => 91,
                'iso_alpha_2' => 'GU',
                'iso_alpha_3' => 'GUM',
                'iso_un_m_49' => 316,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'country_name' => 'Guatemala',
                'created_at' => NULL,
                'id' => 92,
                'iso_alpha_2' => 'GT',
                'iso_alpha_3' => 'GTM',
                'iso_un_m_49' => 320,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'country_name' => 'Guernsey',
                'created_at' => NULL,
                'id' => 93,
                'iso_alpha_2' => 'GG',
                'iso_alpha_3' => 'GGY',
                'iso_un_m_49' => 831,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'country_name' => 'Guinea',
                'created_at' => NULL,
                'id' => 94,
                'iso_alpha_2' => 'GN',
                'iso_alpha_3' => 'GIN',
                'iso_un_m_49' => 324,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'country_name' => 'Guinea-Bissau',
                'created_at' => NULL,
                'id' => 95,
                'iso_alpha_2' => 'GW',
                'iso_alpha_3' => 'GNB',
                'iso_un_m_49' => 624,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'country_name' => 'Guyana',
                'created_at' => NULL,
                'id' => 96,
                'iso_alpha_2' => 'GY',
                'iso_alpha_3' => 'GUY',
                'iso_un_m_49' => 328,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'country_name' => 'Haiti',
                'created_at' => NULL,
                'id' => 97,
                'iso_alpha_2' => 'HT',
                'iso_alpha_3' => 'HTI',
                'iso_un_m_49' => 332,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'country_name' => 'Heard and Mcdonald Islands',
                'created_at' => NULL,
                'id' => 98,
                'iso_alpha_2' => 'HM',
                'iso_alpha_3' => 'HMD',
                'iso_un_m_49' => 334,
                'updated_at' => NULL,
            ),
            98 => 
            array (
            'country_name' => 'Holy See (Vatican City State)',
                'created_at' => NULL,
                'id' => 99,
                'iso_alpha_2' => 'VA',
                'iso_alpha_3' => 'VAT',
                'iso_un_m_49' => 336,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'country_name' => 'Honduras',
                'created_at' => NULL,
                'id' => 100,
                'iso_alpha_2' => 'HN',
                'iso_alpha_3' => 'HND',
                'iso_un_m_49' => 340,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'country_name' => 'Hungary',
                'created_at' => NULL,
                'id' => 101,
                'iso_alpha_2' => 'HU',
                'iso_alpha_3' => 'HUN',
                'iso_un_m_49' => 348,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'country_name' => 'Iceland',
                'created_at' => NULL,
                'id' => 102,
                'iso_alpha_2' => 'IS',
                'iso_alpha_3' => 'ISL',
                'iso_un_m_49' => 352,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'country_name' => 'India',
                'created_at' => NULL,
                'id' => 103,
                'iso_alpha_2' => 'IN',
                'iso_alpha_3' => 'IND',
                'iso_un_m_49' => 356,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'country_name' => 'Indonesia',
                'created_at' => NULL,
                'id' => 104,
                'iso_alpha_2' => 'ID',
                'iso_alpha_3' => 'IDN',
                'iso_un_m_49' => 360,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'country_name' => 'Iran, Islamic Republic of',
                'created_at' => NULL,
                'id' => 105,
                'iso_alpha_2' => 'IR',
                'iso_alpha_3' => 'IRN',
                'iso_un_m_49' => 364,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'country_name' => 'Iraq',
                'created_at' => NULL,
                'id' => 106,
                'iso_alpha_2' => 'IQ',
                'iso_alpha_3' => 'IRQ',
                'iso_un_m_49' => 368,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'country_name' => 'Ireland',
                'created_at' => NULL,
                'id' => 107,
                'iso_alpha_2' => 'IE',
                'iso_alpha_3' => 'IRL',
                'iso_un_m_49' => 372,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'country_name' => 'Isle of Man',
                'created_at' => NULL,
                'id' => 108,
                'iso_alpha_2' => 'IM',
                'iso_alpha_3' => 'IMN',
                'iso_un_m_49' => 833,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'country_name' => 'Israel',
                'created_at' => NULL,
                'id' => 109,
                'iso_alpha_2' => 'IL',
                'iso_alpha_3' => 'ISR',
                'iso_un_m_49' => 376,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'country_name' => 'Italy',
                'created_at' => NULL,
                'id' => 110,
                'iso_alpha_2' => 'IT',
                'iso_alpha_3' => 'ITA',
                'iso_un_m_49' => 380,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'country_name' => 'Jamaica',
                'created_at' => NULL,
                'id' => 111,
                'iso_alpha_2' => 'JM',
                'iso_alpha_3' => 'JAM',
                'iso_un_m_49' => 388,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'country_name' => 'Japan',
                'created_at' => NULL,
                'id' => 112,
                'iso_alpha_2' => 'JP',
                'iso_alpha_3' => 'JPN',
                'iso_un_m_49' => 392,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'country_name' => 'Jersey',
                'created_at' => NULL,
                'id' => 113,
                'iso_alpha_2' => 'JE',
                'iso_alpha_3' => 'JEY',
                'iso_un_m_49' => 832,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'country_name' => 'Jordan',
                'created_at' => NULL,
                'id' => 114,
                'iso_alpha_2' => 'JO',
                'iso_alpha_3' => 'JOR',
                'iso_un_m_49' => 400,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'country_name' => 'Kazakhstan',
                'created_at' => NULL,
                'id' => 115,
                'iso_alpha_2' => 'KZ',
                'iso_alpha_3' => 'KAZ',
                'iso_un_m_49' => 398,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'country_name' => 'Kenya',
                'created_at' => NULL,
                'id' => 116,
                'iso_alpha_2' => 'KE',
                'iso_alpha_3' => 'KEN',
                'iso_un_m_49' => 404,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'country_name' => 'Kiribati',
                'created_at' => NULL,
                'id' => 117,
                'iso_alpha_2' => 'KI',
                'iso_alpha_3' => 'KIR',
                'iso_un_m_49' => 296,
                'updated_at' => NULL,
            ),
            117 => 
            array (
            'country_name' => 'Korea (North)',
                'created_at' => NULL,
                'id' => 118,
                'iso_alpha_2' => 'KP',
                'iso_alpha_3' => 'PRK',
                'iso_un_m_49' => 408,
                'updated_at' => NULL,
            ),
            118 => 
            array (
            'country_name' => 'Korea (South)',
                'created_at' => NULL,
                'id' => 119,
                'iso_alpha_2' => 'KR',
                'iso_alpha_3' => 'KOR',
                'iso_un_m_49' => 410,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'country_name' => 'Kuwait',
                'created_at' => NULL,
                'id' => 120,
                'iso_alpha_2' => 'KW',
                'iso_alpha_3' => 'KWT',
                'iso_un_m_49' => 414,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'country_name' => 'Kyrgyzstan',
                'created_at' => NULL,
                'id' => 121,
                'iso_alpha_2' => 'KG',
                'iso_alpha_3' => 'KGZ',
                'iso_un_m_49' => 417,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'country_name' => 'Lao PDR',
                'created_at' => NULL,
                'id' => 122,
                'iso_alpha_2' => 'LA',
                'iso_alpha_3' => 'LAO',
                'iso_un_m_49' => 418,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'country_name' => 'Latvia',
                'created_at' => NULL,
                'id' => 123,
                'iso_alpha_2' => 'LV',
                'iso_alpha_3' => 'LVA',
                'iso_un_m_49' => 428,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'country_name' => 'Lebanon',
                'created_at' => NULL,
                'id' => 124,
                'iso_alpha_2' => 'LB',
                'iso_alpha_3' => 'LBN',
                'iso_un_m_49' => 422,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'country_name' => 'Lesotho',
                'created_at' => NULL,
                'id' => 125,
                'iso_alpha_2' => 'LS',
                'iso_alpha_3' => 'LSO',
                'iso_un_m_49' => 426,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'country_name' => 'Liberia',
                'created_at' => NULL,
                'id' => 126,
                'iso_alpha_2' => 'LR',
                'iso_alpha_3' => 'LBR',
                'iso_un_m_49' => 430,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'country_name' => 'Libya',
                'created_at' => NULL,
                'id' => 127,
                'iso_alpha_2' => 'LY',
                'iso_alpha_3' => 'LBY',
                'iso_un_m_49' => 434,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'country_name' => 'Liechtenstein',
                'created_at' => NULL,
                'id' => 128,
                'iso_alpha_2' => 'LI',
                'iso_alpha_3' => 'LIE',
                'iso_un_m_49' => 438,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'country_name' => 'Lithuania',
                'created_at' => NULL,
                'id' => 129,
                'iso_alpha_2' => 'LT',
                'iso_alpha_3' => 'LTU',
                'iso_un_m_49' => 440,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'country_name' => 'Luxembourg',
                'created_at' => NULL,
                'id' => 130,
                'iso_alpha_2' => 'LU',
                'iso_alpha_3' => 'LUX',
                'iso_un_m_49' => 442,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'country_name' => 'Macedonia, Republic of',
                'created_at' => NULL,
                'id' => 131,
                'iso_alpha_2' => 'MK',
                'iso_alpha_3' => 'MKD',
                'iso_un_m_49' => 807,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'country_name' => 'Madagascar',
                'created_at' => NULL,
                'id' => 132,
                'iso_alpha_2' => 'MG',
                'iso_alpha_3' => 'MDG',
                'iso_un_m_49' => 450,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'country_name' => 'Malawi',
                'created_at' => NULL,
                'id' => 133,
                'iso_alpha_2' => 'MW',
                'iso_alpha_3' => 'MWI',
                'iso_un_m_49' => 454,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'country_name' => 'Malaysia',
                'created_at' => NULL,
                'id' => 134,
                'iso_alpha_2' => 'MY',
                'iso_alpha_3' => 'MYS',
                'iso_un_m_49' => 458,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'country_name' => 'Maldives',
                'created_at' => NULL,
                'id' => 135,
                'iso_alpha_2' => 'MV',
                'iso_alpha_3' => 'MDV',
                'iso_un_m_49' => 462,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'country_name' => 'Mali',
                'created_at' => NULL,
                'id' => 136,
                'iso_alpha_2' => 'ML',
                'iso_alpha_3' => 'MLI',
                'iso_un_m_49' => 466,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'country_name' => 'Malta',
                'created_at' => NULL,
                'id' => 137,
                'iso_alpha_2' => 'MT',
                'iso_alpha_3' => 'MLT',
                'iso_un_m_49' => 470,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'country_name' => 'Marshall Islands',
                'created_at' => NULL,
                'id' => 138,
                'iso_alpha_2' => 'MH',
                'iso_alpha_3' => 'MHL',
                'iso_un_m_49' => 584,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'country_name' => 'Martinique',
                'created_at' => NULL,
                'id' => 139,
                'iso_alpha_2' => 'MQ',
                'iso_alpha_3' => 'MTQ',
                'iso_un_m_49' => 474,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'country_name' => 'Mauritania',
                'created_at' => NULL,
                'id' => 140,
                'iso_alpha_2' => 'MR',
                'iso_alpha_3' => 'MRT',
                'iso_un_m_49' => 478,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'country_name' => 'Mauritius',
                'created_at' => NULL,
                'id' => 141,
                'iso_alpha_2' => 'MU',
                'iso_alpha_3' => 'MUS',
                'iso_un_m_49' => 480,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'country_name' => 'Mayotte',
                'created_at' => NULL,
                'id' => 142,
                'iso_alpha_2' => 'YT',
                'iso_alpha_3' => 'MYT',
                'iso_un_m_49' => 175,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'country_name' => 'Mexico',
                'created_at' => NULL,
                'id' => 143,
                'iso_alpha_2' => 'MX',
                'iso_alpha_3' => 'MEX',
                'iso_un_m_49' => 484,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'country_name' => 'Micronesia, Federated States of',
                'created_at' => NULL,
                'id' => 144,
                'iso_alpha_2' => 'FM',
                'iso_alpha_3' => 'FSM',
                'iso_un_m_49' => 583,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'country_name' => 'Moldova',
                'created_at' => NULL,
                'id' => 145,
                'iso_alpha_2' => 'MD',
                'iso_alpha_3' => 'MDA',
                'iso_un_m_49' => 498,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'country_name' => 'Monaco',
                'created_at' => NULL,
                'id' => 146,
                'iso_alpha_2' => 'MC',
                'iso_alpha_3' => 'MCO',
                'iso_un_m_49' => 492,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'country_name' => 'Mongolia',
                'created_at' => NULL,
                'id' => 147,
                'iso_alpha_2' => 'MN',
                'iso_alpha_3' => 'MNG',
                'iso_un_m_49' => 496,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'country_name' => 'Montenegro',
                'created_at' => NULL,
                'id' => 148,
                'iso_alpha_2' => 'ME',
                'iso_alpha_3' => 'MNE',
                'iso_un_m_49' => 499,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'country_name' => 'Montserrat',
                'created_at' => NULL,
                'id' => 149,
                'iso_alpha_2' => 'MS',
                'iso_alpha_3' => 'MSR',
                'iso_un_m_49' => 500,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'country_name' => 'Morocco',
                'created_at' => NULL,
                'id' => 150,
                'iso_alpha_2' => 'MA',
                'iso_alpha_3' => 'MAR',
                'iso_un_m_49' => 504,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'country_name' => 'Mozambique',
                'created_at' => NULL,
                'id' => 151,
                'iso_alpha_2' => 'MZ',
                'iso_alpha_3' => 'MOZ',
                'iso_un_m_49' => 508,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'country_name' => 'Myanmar',
                'created_at' => NULL,
                'id' => 152,
                'iso_alpha_2' => 'MM',
                'iso_alpha_3' => 'MMR',
                'iso_un_m_49' => 104,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'country_name' => 'Namibia',
                'created_at' => NULL,
                'id' => 153,
                'iso_alpha_2' => 'NA',
                'iso_alpha_3' => 'NAM',
                'iso_un_m_49' => 516,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'country_name' => 'Nauru',
                'created_at' => NULL,
                'id' => 154,
                'iso_alpha_2' => 'NR',
                'iso_alpha_3' => 'NRU',
                'iso_un_m_49' => 520,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'country_name' => 'Nepal',
                'created_at' => NULL,
                'id' => 155,
                'iso_alpha_2' => 'NP',
                'iso_alpha_3' => 'NPL',
                'iso_un_m_49' => 524,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'country_name' => 'Netherlands',
                'created_at' => NULL,
                'id' => 156,
                'iso_alpha_2' => 'NL',
                'iso_alpha_3' => 'NLD',
                'iso_un_m_49' => 528,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'country_name' => 'Netherlands Antilles',
                'created_at' => NULL,
                'id' => 157,
                'iso_alpha_2' => 'AN',
                'iso_alpha_3' => 'ANT',
                'iso_un_m_49' => 530,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'country_name' => 'New Caledonia',
                'created_at' => NULL,
                'id' => 158,
                'iso_alpha_2' => 'NC',
                'iso_alpha_3' => 'NCL',
                'iso_un_m_49' => 540,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'country_name' => 'New Zealand',
                'created_at' => NULL,
                'id' => 159,
                'iso_alpha_2' => 'NZ',
                'iso_alpha_3' => 'NZL',
                'iso_un_m_49' => 554,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'country_name' => 'Nicaragua',
                'created_at' => NULL,
                'id' => 160,
                'iso_alpha_2' => 'NI',
                'iso_alpha_3' => 'NIC',
                'iso_un_m_49' => 558,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'country_name' => 'Niger',
                'created_at' => NULL,
                'id' => 161,
                'iso_alpha_2' => 'NE',
                'iso_alpha_3' => 'NER',
                'iso_un_m_49' => 562,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'country_name' => 'Nigeria',
                'created_at' => NULL,
                'id' => 162,
                'iso_alpha_2' => 'NG',
                'iso_alpha_3' => 'NGA',
                'iso_un_m_49' => 566,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'country_name' => 'Niue',
                'created_at' => NULL,
                'id' => 163,
                'iso_alpha_2' => 'NU',
                'iso_alpha_3' => 'NIU',
                'iso_un_m_49' => 570,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'country_name' => 'Norfolk Island',
                'created_at' => NULL,
                'id' => 164,
                'iso_alpha_2' => 'NF',
                'iso_alpha_3' => 'NFK',
                'iso_un_m_49' => 574,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'country_name' => 'Northern Mariana Islands',
                'created_at' => NULL,
                'id' => 165,
                'iso_alpha_2' => 'MP',
                'iso_alpha_3' => 'MNP',
                'iso_un_m_49' => 580,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'country_name' => 'Norway',
                'created_at' => NULL,
                'id' => 166,
                'iso_alpha_2' => 'NO',
                'iso_alpha_3' => 'NOR',
                'iso_un_m_49' => 578,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'country_name' => 'Oman',
                'created_at' => NULL,
                'id' => 167,
                'iso_alpha_2' => 'OM',
                'iso_alpha_3' => 'OMN',
                'iso_un_m_49' => 512,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'country_name' => 'Pakistan',
                'created_at' => NULL,
                'id' => 168,
                'iso_alpha_2' => 'PK',
                'iso_alpha_3' => 'PAK',
                'iso_un_m_49' => 586,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'country_name' => 'Palau',
                'created_at' => NULL,
                'id' => 169,
                'iso_alpha_2' => 'PW',
                'iso_alpha_3' => 'PLW',
                'iso_un_m_49' => 585,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'country_name' => 'Palestinian Territory',
                'created_at' => NULL,
                'id' => 170,
                'iso_alpha_2' => 'PS',
                'iso_alpha_3' => 'PSE',
                'iso_un_m_49' => 275,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'country_name' => 'Panama',
                'created_at' => NULL,
                'id' => 171,
                'iso_alpha_2' => 'PA',
                'iso_alpha_3' => 'PAN',
                'iso_un_m_49' => 591,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'country_name' => 'Papua New Guinea',
                'created_at' => NULL,
                'id' => 172,
                'iso_alpha_2' => 'PG',
                'iso_alpha_3' => 'PNG',
                'iso_un_m_49' => 598,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'country_name' => 'Paraguay',
                'created_at' => NULL,
                'id' => 173,
                'iso_alpha_2' => 'PY',
                'iso_alpha_3' => 'PRY',
                'iso_un_m_49' => 600,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'country_name' => 'Peru',
                'created_at' => NULL,
                'id' => 174,
                'iso_alpha_2' => 'PE',
                'iso_alpha_3' => 'PER',
                'iso_un_m_49' => 604,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'country_name' => 'Philippines',
                'created_at' => NULL,
                'id' => 175,
                'iso_alpha_2' => 'PH',
                'iso_alpha_3' => 'PHL',
                'iso_un_m_49' => 608,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'country_name' => 'Pitcairn',
                'created_at' => NULL,
                'id' => 176,
                'iso_alpha_2' => 'PN',
                'iso_alpha_3' => 'PCN',
                'iso_un_m_49' => 612,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'country_name' => 'Poland',
                'created_at' => NULL,
                'id' => 177,
                'iso_alpha_2' => 'PL',
                'iso_alpha_3' => 'POL',
                'iso_un_m_49' => 616,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'country_name' => 'Portugal',
                'created_at' => NULL,
                'id' => 178,
                'iso_alpha_2' => 'PT',
                'iso_alpha_3' => 'PRT',
                'iso_un_m_49' => 620,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'country_name' => 'Puerto Rico',
                'created_at' => NULL,
                'id' => 179,
                'iso_alpha_2' => 'PR',
                'iso_alpha_3' => 'PRI',
                'iso_un_m_49' => 630,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'country_name' => 'Qatar',
                'created_at' => NULL,
                'id' => 180,
                'iso_alpha_2' => 'QA',
                'iso_alpha_3' => 'QAT',
                'iso_un_m_49' => 634,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'country_name' => 'Réunion',
                'created_at' => NULL,
                'id' => 181,
                'iso_alpha_2' => 'RE',
                'iso_alpha_3' => 'REU',
                'iso_un_m_49' => 638,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'country_name' => 'Romania',
                'created_at' => NULL,
                'id' => 182,
                'iso_alpha_2' => 'RO',
                'iso_alpha_3' => 'ROU',
                'iso_un_m_49' => 642,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'country_name' => 'Russian Federation',
                'created_at' => NULL,
                'id' => 183,
                'iso_alpha_2' => 'RU',
                'iso_alpha_3' => 'RUS',
                'iso_un_m_49' => 643,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'country_name' => 'Rwanda',
                'created_at' => NULL,
                'id' => 184,
                'iso_alpha_2' => 'RW',
                'iso_alpha_3' => 'RWA',
                'iso_un_m_49' => 646,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'country_name' => 'Saint-Barthélemy',
                'created_at' => NULL,
                'id' => 185,
                'iso_alpha_2' => 'BL',
                'iso_alpha_3' => 'BLM',
                'iso_un_m_49' => 652,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'country_name' => 'Saint Helena',
                'created_at' => NULL,
                'id' => 186,
                'iso_alpha_2' => 'SH',
                'iso_alpha_3' => 'SHN',
                'iso_un_m_49' => 654,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'country_name' => 'Saint Kitts and Nevis',
                'created_at' => NULL,
                'id' => 187,
                'iso_alpha_2' => 'KN',
                'iso_alpha_3' => 'KNA',
                'iso_un_m_49' => 659,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'country_name' => 'Saint Lucia',
                'created_at' => NULL,
                'id' => 188,
                'iso_alpha_2' => 'LC',
                'iso_alpha_3' => 'LCA',
                'iso_un_m_49' => 662,
                'updated_at' => NULL,
            ),
            188 => 
            array (
            'country_name' => 'Saint-Martin (French part)',
                'created_at' => NULL,
                'id' => 189,
                'iso_alpha_2' => 'MF',
                'iso_alpha_3' => 'MAF',
                'iso_un_m_49' => 663,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'country_name' => 'Saint Pierre and Miquelon',
                'created_at' => NULL,
                'id' => 190,
                'iso_alpha_2' => 'PM',
                'iso_alpha_3' => 'SPM',
                'iso_un_m_49' => 666,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'country_name' => 'Saint Vincent and Grenadines',
                'created_at' => NULL,
                'id' => 191,
                'iso_alpha_2' => 'VC',
                'iso_alpha_3' => 'VCT',
                'iso_un_m_49' => 670,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'country_name' => 'Samoa',
                'created_at' => NULL,
                'id' => 192,
                'iso_alpha_2' => 'WS',
                'iso_alpha_3' => 'WSM',
                'iso_un_m_49' => 882,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'country_name' => 'San Marino',
                'created_at' => NULL,
                'id' => 193,
                'iso_alpha_2' => 'SM',
                'iso_alpha_3' => 'SMR',
                'iso_un_m_49' => 674,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'country_name' => 'Sao Tome and Principe',
                'created_at' => NULL,
                'id' => 194,
                'iso_alpha_2' => 'ST',
                'iso_alpha_3' => 'STP',
                'iso_un_m_49' => 678,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'country_name' => 'Saudi Arabia',
                'created_at' => NULL,
                'id' => 195,
                'iso_alpha_2' => 'SA',
                'iso_alpha_3' => 'SAU',
                'iso_un_m_49' => 682,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'country_name' => 'Senegal',
                'created_at' => NULL,
                'id' => 196,
                'iso_alpha_2' => 'SN',
                'iso_alpha_3' => 'SEN',
                'iso_un_m_49' => 686,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'country_name' => 'Serbia',
                'created_at' => NULL,
                'id' => 197,
                'iso_alpha_2' => 'RS',
                'iso_alpha_3' => 'SRB',
                'iso_un_m_49' => 688,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'country_name' => 'Seychelles',
                'created_at' => NULL,
                'id' => 198,
                'iso_alpha_2' => 'SC',
                'iso_alpha_3' => 'SYC',
                'iso_un_m_49' => 690,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'country_name' => 'Sierra Leone',
                'created_at' => NULL,
                'id' => 199,
                'iso_alpha_2' => 'SL',
                'iso_alpha_3' => 'SLE',
                'iso_un_m_49' => 694,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'country_name' => 'Singapore',
                'created_at' => NULL,
                'id' => 200,
                'iso_alpha_2' => 'SG',
                'iso_alpha_3' => 'SGP',
                'iso_un_m_49' => 702,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'country_name' => 'Slovakia',
                'created_at' => NULL,
                'id' => 201,
                'iso_alpha_2' => 'SK',
                'iso_alpha_3' => 'SVK',
                'iso_un_m_49' => 703,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'country_name' => 'Slovenia',
                'created_at' => NULL,
                'id' => 202,
                'iso_alpha_2' => 'SI',
                'iso_alpha_3' => 'SVN',
                'iso_un_m_49' => 705,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'country_name' => 'Solomon Islands',
                'created_at' => NULL,
                'id' => 203,
                'iso_alpha_2' => 'SB',
                'iso_alpha_3' => 'SLB',
                'iso_un_m_49' => 90,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'country_name' => 'Somalia',
                'created_at' => NULL,
                'id' => 204,
                'iso_alpha_2' => 'SO',
                'iso_alpha_3' => 'SOM',
                'iso_un_m_49' => 706,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'country_name' => 'South Africa',
                'created_at' => NULL,
                'id' => 205,
                'iso_alpha_2' => 'ZA',
                'iso_alpha_3' => 'ZAF',
                'iso_un_m_49' => 710,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'country_name' => 'South Georgia and the South Sandwich Islands',
                'created_at' => NULL,
                'id' => 206,
                'iso_alpha_2' => 'GS',
                'iso_alpha_3' => 'SGS',
                'iso_un_m_49' => 239,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'country_name' => 'South Sudan',
                'created_at' => NULL,
                'id' => 207,
                'iso_alpha_2' => 'SS',
                'iso_alpha_3' => 'SSD',
                'iso_un_m_49' => 728,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'country_name' => 'Spain',
                'created_at' => NULL,
                'id' => 208,
                'iso_alpha_2' => 'ES',
                'iso_alpha_3' => 'ESP',
                'iso_un_m_49' => 724,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'country_name' => 'Sri Lanka',
                'created_at' => NULL,
                'id' => 209,
                'iso_alpha_2' => 'LK',
                'iso_alpha_3' => 'LKA',
                'iso_un_m_49' => 144,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'country_name' => 'Sudan',
                'created_at' => NULL,
                'id' => 210,
                'iso_alpha_2' => 'SD',
                'iso_alpha_3' => 'SDN',
                'iso_un_m_49' => 736,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'country_name' => 'Suriname',
                'created_at' => NULL,
                'id' => 211,
                'iso_alpha_2' => 'SR',
                'iso_alpha_3' => 'SUR',
                'iso_un_m_49' => 740,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'country_name' => 'Svalbard and Jan Mayen Islands',
                'created_at' => NULL,
                'id' => 212,
                'iso_alpha_2' => 'SJ',
                'iso_alpha_3' => 'SJM',
                'iso_un_m_49' => 744,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'country_name' => 'Swaziland',
                'created_at' => NULL,
                'id' => 213,
                'iso_alpha_2' => 'SZ',
                'iso_alpha_3' => 'SWZ',
                'iso_un_m_49' => 748,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'country_name' => 'Sweden',
                'created_at' => NULL,
                'id' => 214,
                'iso_alpha_2' => 'SE',
                'iso_alpha_3' => 'SWE',
                'iso_un_m_49' => 752,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'country_name' => 'Switzerland',
                'created_at' => NULL,
                'id' => 215,
                'iso_alpha_2' => 'CH',
                'iso_alpha_3' => 'CHE',
                'iso_un_m_49' => 756,
                'updated_at' => NULL,
            ),
            215 => 
            array (
            'country_name' => 'Syrian Arab Republic (Syria)',
                'created_at' => NULL,
                'id' => 216,
                'iso_alpha_2' => 'SY',
                'iso_alpha_3' => 'SYR',
                'iso_un_m_49' => 760,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'country_name' => 'Taiwan, Republic of China',
                'created_at' => NULL,
                'id' => 217,
                'iso_alpha_2' => 'TW',
                'iso_alpha_3' => 'TWN',
                'iso_un_m_49' => 158,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'country_name' => 'Tajikistan',
                'created_at' => NULL,
                'id' => 218,
                'iso_alpha_2' => 'TJ',
                'iso_alpha_3' => 'TJK',
                'iso_un_m_49' => 762,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'country_name' => 'Tanzania, United Republic of',
                'created_at' => NULL,
                'id' => 219,
                'iso_alpha_2' => 'TZ',
                'iso_alpha_3' => 'TZA',
                'iso_un_m_49' => 834,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'country_name' => 'Thailand',
                'created_at' => NULL,
                'id' => 220,
                'iso_alpha_2' => 'TH',
                'iso_alpha_3' => 'THA',
                'iso_un_m_49' => 764,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'country_name' => 'Timor-Leste',
                'created_at' => NULL,
                'id' => 221,
                'iso_alpha_2' => 'TL',
                'iso_alpha_3' => 'TLS',
                'iso_un_m_49' => 626,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'country_name' => 'Togo',
                'created_at' => NULL,
                'id' => 222,
                'iso_alpha_2' => 'TG',
                'iso_alpha_3' => 'TGO',
                'iso_un_m_49' => 768,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'country_name' => 'Tokelau',
                'created_at' => NULL,
                'id' => 223,
                'iso_alpha_2' => 'TK',
                'iso_alpha_3' => 'TKL',
                'iso_un_m_49' => 772,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'country_name' => 'Tonga',
                'created_at' => NULL,
                'id' => 224,
                'iso_alpha_2' => 'TO',
                'iso_alpha_3' => 'TON',
                'iso_un_m_49' => 776,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'country_name' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'id' => 225,
                'iso_alpha_2' => 'TT',
                'iso_alpha_3' => 'TTO',
                'iso_un_m_49' => 780,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'country_name' => 'Tunisia',
                'created_at' => NULL,
                'id' => 226,
                'iso_alpha_2' => 'TN',
                'iso_alpha_3' => 'TUN',
                'iso_un_m_49' => 788,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'country_name' => 'Turkey',
                'created_at' => NULL,
                'id' => 227,
                'iso_alpha_2' => 'TR',
                'iso_alpha_3' => 'TUR',
                'iso_un_m_49' => 792,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'country_name' => 'Turkmenistan',
                'created_at' => NULL,
                'id' => 228,
                'iso_alpha_2' => 'TM',
                'iso_alpha_3' => 'TKM',
                'iso_un_m_49' => 795,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'country_name' => 'Turks and Caicos Islands',
                'created_at' => NULL,
                'id' => 229,
                'iso_alpha_2' => 'TC',
                'iso_alpha_3' => 'TCA',
                'iso_un_m_49' => 796,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'country_name' => 'Tuvalu',
                'created_at' => NULL,
                'id' => 230,
                'iso_alpha_2' => 'TV',
                'iso_alpha_3' => 'TUV',
                'iso_un_m_49' => 798,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'country_name' => 'Uganda',
                'created_at' => NULL,
                'id' => 231,
                'iso_alpha_2' => 'UG',
                'iso_alpha_3' => 'UGA',
                'iso_un_m_49' => 800,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'country_name' => 'Ukraine',
                'created_at' => NULL,
                'id' => 232,
                'iso_alpha_2' => 'UA',
                'iso_alpha_3' => 'UKR',
                'iso_un_m_49' => 804,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'country_name' => 'United Arab Emirates',
                'created_at' => NULL,
                'id' => 233,
                'iso_alpha_2' => 'AE',
                'iso_alpha_3' => 'ARE',
                'iso_un_m_49' => 784,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'country_name' => 'United Kingdom',
                'created_at' => NULL,
                'id' => 234,
                'iso_alpha_2' => 'GB',
                'iso_alpha_3' => 'GBR',
                'iso_un_m_49' => 826,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'country_name' => 'United States of America',
                'created_at' => NULL,
                'id' => 235,
                'iso_alpha_2' => 'US',
                'iso_alpha_3' => 'USA',
                'iso_un_m_49' => 840,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'country_name' => 'US Minor Outlying Islands',
                'created_at' => NULL,
                'id' => 236,
                'iso_alpha_2' => 'UM',
                'iso_alpha_3' => 'UMI',
                'iso_un_m_49' => 581,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'country_name' => 'Uruguay',
                'created_at' => NULL,
                'id' => 237,
                'iso_alpha_2' => 'UY',
                'iso_alpha_3' => 'URY',
                'iso_un_m_49' => 858,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'country_name' => 'Uzbekistan',
                'created_at' => NULL,
                'id' => 238,
                'iso_alpha_2' => 'UZ',
                'iso_alpha_3' => 'UZB',
                'iso_un_m_49' => 860,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'country_name' => 'Vanuatu',
                'created_at' => NULL,
                'id' => 239,
                'iso_alpha_2' => 'VU',
                'iso_alpha_3' => 'VUT',
                'iso_un_m_49' => 548,
                'updated_at' => NULL,
            ),
            239 => 
            array (
            'country_name' => 'Venezuela (Bolivarian Republic)',
                'created_at' => NULL,
                'id' => 240,
                'iso_alpha_2' => 'VE',
                'iso_alpha_3' => 'VEN',
                'iso_un_m_49' => 862,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'country_name' => 'Viet Nam',
                'created_at' => NULL,
                'id' => 241,
                'iso_alpha_2' => 'VN',
                'iso_alpha_3' => 'VNM',
                'iso_un_m_49' => 704,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'country_name' => 'Virgin Islands, US',
                'created_at' => NULL,
                'id' => 242,
                'iso_alpha_2' => 'VI',
                'iso_alpha_3' => 'VIR',
                'iso_un_m_49' => 850,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'country_name' => 'Wallis and Futuna Islands',
                'created_at' => NULL,
                'id' => 243,
                'iso_alpha_2' => 'WF',
                'iso_alpha_3' => 'WLF',
                'iso_un_m_49' => 876,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'country_name' => 'Western Sahara',
                'created_at' => NULL,
                'id' => 244,
                'iso_alpha_2' => 'EH',
                'iso_alpha_3' => 'ESH',
                'iso_un_m_49' => 732,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'country_name' => 'Yemen',
                'created_at' => NULL,
                'id' => 245,
                'iso_alpha_2' => 'YE',
                'iso_alpha_3' => 'YEM',
                'iso_un_m_49' => 887,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'country_name' => 'Zambia',
                'created_at' => NULL,
                'id' => 246,
                'iso_alpha_2' => 'ZM',
                'iso_alpha_3' => 'ZMB',
                'iso_un_m_49' => 894,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'country_name' => 'Zimbabwe',
                'created_at' => NULL,
                'id' => 247,
                'iso_alpha_2' => 'ZW',
                'iso_alpha_3' => 'ZWE',
                'iso_un_m_49' => 716,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}