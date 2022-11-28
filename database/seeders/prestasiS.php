<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class prestasiS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestasi')->insert([
            "namaprestasi" => "LKBB(paskibra)",
            "tingkat" => "se-pulau jawa",
            "juarake" => "juara umum",
            "namapeserta" => "Egi,dkk",
        ]);
    }
}
