<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BillederSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $billeder=array(
            array(
                'url'=>'https://cdn.shopify.com/s/files/1/0789/7730/2870/files/pexels-cottonbro-studio-5097281_8d29fc2c-bfa2-4b3d-a3d0-a7a8475184a4.jpg?v=1703006162',
                'alt_tekst'=>'brygget te'
            ),
            array(
                'url'=>'https://cdn.shopify.com/s/files/1/0789/7730/2870/files/green_tea_1234fa_80ef9934-dfb4-4cdb-80fe-dc1c5b41ec45.png?v=1703006162',
                'alt_tekst'=>'teblade'
            )
            );

        DB::table('billeder')->insert($billeder);
    }
}
