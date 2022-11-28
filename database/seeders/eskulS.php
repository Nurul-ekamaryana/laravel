<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class eskulS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    
        DB::table('eskul')->insert([
            "namaeskul" => "Pramuka",
            "namapembina" => "bu chaya",
            "jumlahanggota" => "50",
        ]);
        DB::table('eskul')->insert([
            "namaeskul" => "KIR",
            "namapembina" => "yuga",
            "jumlahanggota" => "50",
        ]);
    }
}
