<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class pesertaS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('pesertadidik')->insert([
            "namalengkap" => "wananda",
            "nis" => 936273,
            "jk"=> "P",
            "kelas"=> "11rpl1",
            "alamat"=> "subang",
            "satatus"=> "Pelajar",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('pesertadidik')->insert([
            "namalengkap" => "Tassya",
            "nis" => 754781364,
            "jk"=> "P",
            "kelas"=> "11rpl1",
            "alamat"=> "subang",
            "satatus"=> "Pelajar",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
    }
}
