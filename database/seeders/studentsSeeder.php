<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            "namalengkap" => "Nurul eka",
            "nis" => 123456,
            "jk"=> "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('students')->insert([
            "namalengkap" => "Dazai osamu",
            "nis" => 7654321,
            "jk"=> "l",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('students')->insert([
            "namalengkap" => "Chuya nakhara",
            "nis" => 86346863,
            "jk"=> "l",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
    }
}
