<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table pegawai 
        DB::table('detail_profile')->insert([
            'address'=>'Jember',
            'nomor_telepon'=> '0812345678',
            'ttl'=>'2000-11-26',
            'foto'=>'picture.png'
        ]);
    }
}
