<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdresserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adresser=array(
            array(
                'fornavn'=>'Rikke',
                'efternavn'=>'Blom',
                'land'=>'Danmark',
                'adresse_1'=>'Vejnavn 12',
                'adresse_2'=>'2th',
                'by'=>'København',
                'postnummer'=>'2000',
                'firma'=>''
            ),
            array(
                'fornavn'=>'Victoria',
                'efternavn'=>'Bührmann',
                'land'=>'Danmark',
                'adresse_1'=>'Gadenavn 3',
                'adresse_2'=>'1tv',
                'by'=>'Roskilde',
                'postnummer'=>'4000',
                'firma'=>''
            ),
        );

        DB::table('adresser')->insert($adresser);
    }
}
