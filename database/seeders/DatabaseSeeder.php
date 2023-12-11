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
        \App\Models\Produkt::factory(10)->create();

        \App\Models\Produkt::factory()->create([
            'titel' => 'Test Produkt',
            'type' => 'ren te',
            'beskrivelse' => 'test beskrivelse'
        ]);
    }
}
