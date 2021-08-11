<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id_status' => 1,
                'nama' => 'Sudah Dikerjakan',
            ),
            1 => 
            array (
                'id_status' => 2,
                'nama' => 'Sedang Dikerjakan',
            ),
            2 => 
            array (
                'id_status' => 3,
                'nama' => 'Belum Dikerjakan',
            ),
        ));
        
        
    }
}