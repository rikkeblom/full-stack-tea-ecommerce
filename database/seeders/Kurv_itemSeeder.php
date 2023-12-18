<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Kurv_itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kurv_item=array(
            array(
                'kurv_id'=>"1",
                'item_id'=>"1"
            ),
            array(
                'kurv_id'=>"1",
                'item_id'=>"2"
            )
        );
    }
}
