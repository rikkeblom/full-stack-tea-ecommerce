<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status=array(
            array(
                'navn'=>'Begyndt'
            ),
            array(
                'navn'=>'Fejl'
            ),
            array(
                'navn'=>'Afbrudt'
            ),
            array(
                'navn'=>'Success'
            ),
        );
        
        DB::table('status')->insert($status);
    }
}
