<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //table
        $this->call(AdresserSeeder::class);
        $this->call(BetalingsmetoderSeeder::class);
        $this->call(ItemsSeeder::class);
        $this->call(KollektionerSeeder::class);
        $this->call(KurveSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(ProdukterSeeder::class);

        $this->call(Item_kurvSeeder::class);
        $this->call(VarianterSeeder::class);
        $this->call(OrdrerSeeder::class);
        $this->call(Kollektion_produktSeeder::class);
    }
}
