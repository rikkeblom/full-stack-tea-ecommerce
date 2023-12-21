<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produkt_produktionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $forbindelser=array(
            array(
                'produkt_id'=>1,
                'produktion_id'=>2,
            ),
            array(
                'produkt_id'=>2,
                'produktion_id'=>1,
            ),
        );

        DB::table('produkt_produktion')->insert($forbindelser);
    }
}
