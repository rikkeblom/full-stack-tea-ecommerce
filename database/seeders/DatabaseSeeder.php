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
        $this->call(SmageSeeder::class);
        $this->call(KollektionerSeeder::class);
        $this->call(KurveSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(BaserSeeder::class);
        $this->call(ProdukterSeeder::class);
        $this->call(BillederSeeder::class);
        $this->call(ProduktionstyperSeeder::class);
        $this->call(OprindelseslandeSeeder::class);

        $this->call(Item_kurvSeeder::class);
        $this->call(VarianterSeeder::class);
        $this->call(OrdrerSeeder::class);
        $this->call(Kollektion_produktSeeder::class);
        $this->call(Produkt_smagSeeder::class);
        $this->call(Base_produktSeeder::class);
        $this->call(Produkt_produktionSeeder::class);
        $this->call(Oprindelsesland_produktSeeder::class);
        $this->call(Billede_produktSeeder::class);
    }
}
