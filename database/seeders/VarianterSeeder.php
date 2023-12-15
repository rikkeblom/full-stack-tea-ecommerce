<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VarianterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $varianter=array(
            array(
                'id'=>1,
                'titel'=>'50g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>27.5
            ),
            array(
                'id'=>2,
                'titel'=>'100g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>55
            ),
            array(
                'id'=>3,
                'titel'=>'250g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>137.5
            ),
            array(
                'id'=>4,
                'titel'=>'500g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>275
            ),
            array(
                'id'=>5,
                'titel'=>'1000g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>550
            ),
            array(
                'id'=>6,
                'titel'=>'50g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>24.5
            ),
            array(
                'id'=>7,
                'titel'=>'100g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>49
            ),
            array(
                'id'=>8,
                'titel'=>'250g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>122.5
            ),
            array(
                'id'=>9,
                'titel'=>'500g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>245
            ),
            array(
                'id'=>10,
                'titel'=>'1000g',
                'lager'=>100,
                'type'=>'vægt',
                'pris'=>490
            ),
        );

        DB::table('varianter')->insert($varianter);
    }
}
