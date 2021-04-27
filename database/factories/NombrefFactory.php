<?php

namespace Database\Factories;

use App\Models\Nombref;
use Illuminate\Database\Eloquent\Factories\Factory;

class NombrefFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nombref::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstNameFemale,
            'sexo' => 'f'
        ];
    }
}
