<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Item_variantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $forbindelser=array(
            array(
                'item_id'=>"1",
                'variant_id'=>"2"
            ),
            array(
                'item_id'=>"2",
                'variant_id'=>"6"
            )
        );

        DB::table('item_variant')->insert($forbindelser);
    }
}
