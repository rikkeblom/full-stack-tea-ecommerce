<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OprindelseslandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lande=array(
            array(
                'navn'=>'Indien'
            ),
            array(
                'navn'=>'Sri Lanka'
            ),
            array(
                'navn'=>'Kina'
            ),
            array(
                'navn'=>'Indonesien'
            ),
            array(
                'navn'=>'Iran'
            ),
            array(
                'navn'=>'Tyrkiet'
            ),
            array(
                'navn'=>'Kenya'
            ),
            array(
                'navn'=>'Vietnam'
            ),
            array(
                'navn'=>'Argentina'
            ),
            array(
                'navn'=>'Japan'
            ),
            array(
                'navn'=>'Sydafrika'
            ),
        );
        
        DB::table('oprindelseslande')->insert($lande);
    }
}
