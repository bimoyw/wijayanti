<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelanggansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pelanggans')->delete();
        
        \DB::table('pelanggans')->insert(array (
            0 => 
            array (
                'id_pel' => 3,
                'nama_pel' => 'Kurniawan',
                'telp' => '123123',
                'RT' => '1231',
                'RW' => '121',
                'kelurahan' => 'ada',
                'kecamatan' => 'awdaw',
                'kota' => 'awdawda',
                'keterangan' => 'awdadawsdaswwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww',
                'created_at' => '2021-08-05 09:19:50',
                'updated_at' => '2021-08-05 12:15:22',
            ),
            1 => 
            array (
                'id_pel' => 4,
                'nama_pel' => 'Andri',
                'telp' => '64861',
                'RT' => '45',
                'RW' => '45',
                'kelurahan' => 'sdfad',
                'kecamatan' => 'asdcqa',
                'kota' => 'asdq',
                'keterangan' => 'aesdcqwa',
                'created_at' => '2021-08-08 02:50:03',
                'updated_at' => '2021-08-08 02:50:03',
            ),
        ));
        
        
    }
}