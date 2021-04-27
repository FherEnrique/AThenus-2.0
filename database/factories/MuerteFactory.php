<?php

namespace Database\Factories;

use App\Models\Muerte;
use Illuminate\Database\Eloquent\Factories\Factory;

class MuerteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Muerte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->sentence(20),
        ];
    }
}
