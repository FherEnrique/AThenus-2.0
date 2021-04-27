<?php

namespace Database\Factories;

use App\Models\Auxiliar;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuxiliarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Auxiliar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_padre' => $this->faker->numberBetween(1, 20),
            'id_hijo' => $this->faker->numberBetween(21, 40)
        ];
    }
}
