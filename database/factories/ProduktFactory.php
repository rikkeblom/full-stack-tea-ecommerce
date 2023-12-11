<?php

namespace Database\Factories;

use App\Models\Produkt;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produkt>
 */
class ProduktFactory extends Factory
{
    protected $model = Produkt::class;

    public function definition(): array
    {
        return [
            'titel' => $this->faker()->words(2),
            'beskrivelse' =>  $this->faker()->text(),
            'type' =>  $this->faker()->word(),
        ];
    }
}
