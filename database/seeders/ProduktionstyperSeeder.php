<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduktionstyperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typer=array(
            array(
                'navn'=>'fairtrade'
            ),
            array(
                'navn'=>'økologisk'
            ),
        );
        
        DB::table('produktionstyper')->insert($typer);
    }
}
