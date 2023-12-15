<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BetalingsmetoderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $betalingsmetoder=array(
            array(
                'navn'=>'MobilePay'
            ),
            array(
                'navn'=>'Dankort'
            ),
        );

        DB::table('betalingsmetoder')->insert($betalingsmetoder);
    }
}
