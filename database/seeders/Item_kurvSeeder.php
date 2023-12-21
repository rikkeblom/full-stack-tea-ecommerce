<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Item_kurvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item_kurv=array(
            array(
                'kurv_id'=>"1",
                'item_id'=>"1"
            ),
            array(
                'kurv_id'=>"1",
                'item_id'=>"2"
            )
        );

        DB::table('item_kurv')->insert($item_kurv);
    }
}
