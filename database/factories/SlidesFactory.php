<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slides>
 */
class SlidesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'link' => $this->faker->url(),
            'image' => $this->faker->imageUrl(800, 400, 'slides'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}