<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items=array(
            array(
                'id'=>1
            ),
            array(
                'id'=>2
            ),
        );

        DB::table('items')->insert($items);
    }
}
