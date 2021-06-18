<?php

namespace Database\Factories;

use App\Models\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

class NameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Name::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'sex' => $this->faker->randomElement(['m','f']),
        ];
    }
}
