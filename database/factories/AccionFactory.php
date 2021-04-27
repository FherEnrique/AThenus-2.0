<?php

namespace Database\Factories;

use App\Models\Accion;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Accion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cant_personajes' => $this->faker->randomElement(['1', '2']),
            'salud' => $this->faker->numberBetween(-25, 25),
            'descripcion' => $this->faker->sentence(10)
        ];
    }
}
