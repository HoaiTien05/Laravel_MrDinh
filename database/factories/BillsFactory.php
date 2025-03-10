<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bills>
 */
class BillsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_customer' => $this->faker->numberBetween(1, 50),
            'date_order' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 50000, 5000000),
            'payment' => $this->faker->randomElement(['cash', 'credit card', 'bank transfer']),
            'note' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
