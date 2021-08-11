<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bagos Bimo Yekti Wibowo',
                'phone' => '08988459002',
                'level' => 'admin',
                'jenis_kelamin' => 'Laki Laki',
                'username' => 'Bimo0108',
                'password' => '$2y$10$ExG4uyBH8GSzW9ThHNLJYemGfoAdDe9X9B7H.GQHy.vvSa.glsCsa',
                'remember_token' => 'EuGQCmyLZUsRyjw8ndv76AWNYUS9a4n3yM3B6ICoQn6Yxr8ceFaqe47x4ewx',
                'created_at' => '2021-07-27 10:07:02',
                'updated_at' => '2021-08-03 04:10:08',
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'Annisa Huljannah',
                'phone' => '085611165939',
                'level' => 'admin',
                'jenis_kelamin' => 'Perempuan',
                'username' => 'Annisa24',
                'password' => '$2y$10$.U5t2bVk5WzTgLLvUMbZoO2rTvJWd17RBqIAoGqy1Dt1KHuarrpRK',
                'remember_token' => NULL,
                'created_at' => '2021-07-28 08:45:45',
                'updated_at' => '2021-08-03 03:34:46',
            ),
            2 => 
            array (
                'id' => 14,
                'name' => 'Cahyani Triyati',
                'phone' => '1234564879',
                'level' => 'marketing',
                'jenis_kelamin' => 'Perempuan',
                'username' => 'Cahyani12',
                'password' => '$2y$10$ZBZOTEYBFXKndyzOA5WUr.zEutLzDB5NCwvEh.oTRfH7pzlRWFnP.',
                'remember_token' => NULL,
                'created_at' => '2021-08-03 04:12:01',
                'updated_at' => '2021-08-03 04:12:01',
            ),
            3 => 
            array (
                'id' => 17,
                'name' => 'angga',
                'phone' => '123456789',
                'level' => 'produksi',
                'jenis_kelamin' => 'Laki Laki',
                'username' => 'angga123',
                'password' => '$2y$10$eiGFagtcIBhYrJP6tljwf.c5dHjMUt1RKVyhYc.6cYXE5y1QSzacO',
                'remember_token' => NULL,
                'created_at' => '2021-08-03 04:21:30',
                'updated_at' => '2021-08-03 04:21:30',
            ),
            4 => 
            array (
                'id' => 18,
                'name' => 'Cahyani Triyati',
                'phone' => '1234564987',
                'level' => 'kepala produksi',
                'jenis_kelamin' => 'Perempuan',
                'username' => 'yaniyani',
                'password' => '$2y$10$AemGrRt7R/cCr3kYJ.uFJOnmHzYLgnCxPtBKtIEHzSRbdcPaHOhxq',
                'remember_token' => NULL,
                'created_at' => '2021-08-03 11:26:29',
                'updated_at' => '2021-08-03 11:31:31',
            ),
            5 => 
            array (
                'id' => 19,
                'name' => 'Yudha',
                'phone' => '12345678',
                'level' => 'admin',
                'jenis_kelamin' => 'Laki Laki',
                'username' => 'yuda1234',
                'password' => '$2y$10$98kb9s9LW9UU7nps2ZpDkOSnvF5grCjHCIRfzoVbppjnW1tjQDMvO',
                'remember_token' => NULL,
                'created_at' => '2021-08-05 07:49:39',
                'updated_at' => '2021-08-05 07:49:39',
            ),
        ));
        
        
    }
}