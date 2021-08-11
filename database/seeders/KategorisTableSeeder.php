<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategoris')->delete();
        
        \DB::table('kategoris')->insert(array (
            0 => 
            array (
                'id_kategori' => 1,
                'kategori' => 'Map Sablon',
                'created_at' => '2021-08-03 11:04:08',
                'updated_at' => '2021-08-03 11:04:08',
            ),
            1 => 
            array (
                'id_kategori' => 3,
                'kategori' => 'Map HotPrint',
                'created_at' => '2021-08-05 04:12:36',
                'updated_at' => '2021-08-05 04:12:36',
            ),
            2 => 
            array (
                'id_kategori' => 4,
                'kategori' => 'Map Polos',
                'created_at' => '2021-08-05 04:13:44',
                'updated_at' => '2021-08-05 04:13:44',
            ),
            3 => 
            array (
                'id_kategori' => 5,
                'kategori' => 'Map Jahit',
                'created_at' => '2021-08-05 04:14:31',
                'updated_at' => '2021-08-05 04:14:31',
            ),
            4 => 
            array (
                'id_kategori' => 6,
                'kategori' => 'Map Custom',
                'created_at' => '2021-08-05 04:14:44',
                'updated_at' => '2021-08-05 04:14:44',
            ),
            5 => 
            array (
                'id_kategori' => 7,
                'kategori' => 'Kaos Kaki',
                'created_at' => '2021-08-05 06:48:17',
                'updated_at' => '2021-08-05 06:48:17',
            ),
            6 => 
            array (
                'id_kategori' => 8,
                'kategori' => 'Dasi',
                'created_at' => '2021-08-05 07:51:30',
                'updated_at' => '2021-08-05 07:51:30',
            ),
            7 => 
            array (
                'id_kategori' => 9,
                'kategori' => 'Topi',
                'created_at' => '2021-08-05 10:50:37',
                'updated_at' => '2021-08-05 10:50:37',
            ),
            8 => 
            array (
                'id_kategori' => 10,
                'kategori' => 'Ikat Pinggang',
                'created_at' => '2021-08-05 10:50:49',
                'updated_at' => '2021-08-05 10:50:49',
            ),
            9 => 
            array (
                'id_kategori' => 11,
            'kategori' => 'Badge Logo (Bordir)',
                'created_at' => '2021-08-05 10:51:12',
                'updated_at' => '2021-08-05 10:51:12',
            ),
            10 => 
            array (
                'id_kategori' => 12,
            'kategori' => 'Nama Dada (Bordir)',
                'created_at' => '2021-08-05 10:51:35',
                'updated_at' => '2021-08-05 10:51:35',
            ),
        ));
        
        
    }
}