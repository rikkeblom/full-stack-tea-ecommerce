<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdrerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ordrer=array(
            array(
                'faktureringsadresse_id'=>1,
                'leveringsadresse_id'=>1,
                'betalingmetode_id'=>2,
                'betalingsstatus_id'=>4,
                'kurv_id'=>1,
                'leveringsstatus_id'=>1
            )
        );
        
        DB::table('ordrer')->insert($ordrer);
    }
}
