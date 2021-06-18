<?php

namespace Database\Factories;

use App\Models\Death;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeathFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Death::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(20),
        ];
    }
}
