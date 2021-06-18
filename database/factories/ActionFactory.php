<?php

namespace Database\Factories;

use App\Models\Action;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Action::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number_character' => $this->faker->randomElement(['1', '2']),
            'health' => $this->faker->numberBetween(-25, 25),
            'description' => $this->faker->sentence(10)
        ];
    }
}
