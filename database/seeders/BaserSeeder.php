<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BaserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $baser = array(
            array(
                'navn'=>'Sort te',
            ),
            array(
                'navn'=>'Hvid te',
            ),
            array(
                'navn'=>'Grøn te',
            ),
            array(
                'navn'=>'Urte te',
            ),
            array(
                'navn'=>'Oolong',
            ),
            array(
                'navn'=>'Rooibos',
            ),
        );

        DB::table('baser')->insert($baser);
    }
}
