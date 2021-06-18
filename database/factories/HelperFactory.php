<?php

namespace Database\Factories;

use App\Models\Helper;
use Illuminate\Database\Eloquent\Factories\Factory;

class HelperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Helper::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_dad' => $this->faker->numberBetween(1, 20),
            'id_son' => $this->faker->numberBetween(21, 40)
        ];
    }
}
