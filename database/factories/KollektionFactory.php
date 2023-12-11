<?php

namespace Database\Factories;

use App\Models\Kollektion;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kollektion>
 */
class KollektionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */

    protected $model = Kollektion::class;

    public function definition(): array
    {
        return [
            'titel' => $this->faker()->words(2),
            'beskrivelse' =>  $this->faker()->text(),
            'billede' =>  $this->faker()->word(),
        ];
    }
}
