<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'id_type' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->sentence(),
            'unit_price' => $this->faker->randomFloat(2, 10000, 500000),
            'promotion_price' => $this->faker->randomFloat(2, 5000, 400000),
            'image' => $this->faker->imageUrl(200, 200, 'products'),
            'unit' => $this->faker->randomElement(['kg', 'box', 'piece']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}