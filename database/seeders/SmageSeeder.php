<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $smage=array(
            array(
                'navn'=>'lakrids'
            ),
            array(
                'navn'=>'lavendel'
            ),
            array(
                'navn'=>'mynte'
            ),
            array(
                'navn'=>'bergamotte'
            ),
            array(
                'navn'=>'ananas'
            ),
            array(
                'navn'=>'bær'
            ),
            array(
                'navn'=>'appelsin'
            ),
            array(
                'navn'=>'jasmin'
            ),
            array(
                'navn'=>'karamel'
            ),
            array(
                'navn'=>'pebermynte'
            ),
            array(
                'navn'=>'kanel'
            ),
            array(
                'navn'=>'ingefær'
            ),
            array(
                'navn'=>'sort peber'
            ),
            array(
                'navn'=>'nellike'
            ),
            array(
                'navn'=>'fennikel'
            ),
            array(
                'navn'=>'enebær'
            ),
            array(
                'navn'=>'vanilje'
            ),
            array(
                'navn'=>'kardemomme'
            ),
            array(
                'navn'=>'kornblomst'
            ),
            array(
                'navn'=>'mango'
            ),
            array(
                'navn'=>'papaya'
            ),
            array(
                'navn'=>'kirsebær'
            )
        );
        
        DB::table('smage')->insert($smage);
    }
}
