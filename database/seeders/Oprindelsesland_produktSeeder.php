<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Oprindelsesland_produktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $forbindelser=array(
            array(
                'oprindelsesland_id'=>"1",
                'produkt_id'=>"1"
            ),
            array(
                'oprindelsesland_id'=>"2",
                'produkt_id'=>"2"
            ),
            array(
                'oprindelsesland_id'=>"1",
                'produkt_id'=>"3"
            ),
            array(
                'oprindelsesland_id'=>"1",
                'produkt_id'=>"11"
            ),
            array(
                'oprindelsesland_id'=>"3",
                'produkt_id'=>"4"
            ),
            array(
                'oprindelsesland_id'=>"3",
                'produkt_id'=>"5"
            ),
            array(
                'oprindelsesland_id'=>"4",
                'produkt_id'=>"6"
            ),
            array(
                'oprindelsesland_id'=>"1",
                'produkt_id'=>"7"
            ),
            array(
                'oprindelsesland_id'=>"5",
                'produkt_id'=>"8"
            ),
            array(
                'oprindelsesland_id'=>"3",
                'produkt_id'=>"9"
            ),
            array(
                'oprindelsesland_id'=>"3",
                'produkt_id'=>"10"
            ),
            array(
                'oprindelsesland_id'=>"10",
                'produkt_id'=>"11"
            ),
            array(
                'oprindelsesland_id'=>"9",
                'produkt_id'=>"12"
            ),
            array(
                'oprindelsesland_id'=>"3",
                'produkt_id'=>"13"
            ),
            array(
                'oprindelsesland_id'=>"7",
                'produkt_id'=>"14"
            ),
            array(
                'oprindelsesland_id'=>"3",
                'produkt_id'=>"15"
            ),
            array(
                'oprindelsesland_id'=>"3",
                'produkt_id'=>"16"
            ),
            array(
                'oprindelsesland_id'=>"4",
                'produkt_id'=>"17"
            ),
            array(
                'oprindelsesland_id'=>"3",
                'produkt_id'=>"18"
            ),

            array(
                'oprindelsesland_id'=>"11",
                'produkt_id'=>"19"
            ),
        );

        DB::table('oprindelsesland_produkt')->insert($forbindelser);
    }
}
