<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BillDetails>
 */
class BillDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_bill' => $this->faker->numberBetween(1, 50),
            'id_product' => $this->faker->numberBetween(1, 100),
            'quantity' => $this->faker->numberBetween(1, 10),
            'unit_price' => $this->faker->randomFloat(2, 10000, 1000000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}