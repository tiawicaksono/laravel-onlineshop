<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(1),
            'description' => $this->faker->sentence(3),
            'price' => rand(10000, 20000),
            'qty' => rand(0, 20),
            'image' => ''
        ];
    }
}
