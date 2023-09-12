<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listings>
 */
class ListingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'tags' => 'laravel ,php , backend',
            'company' => fake()->company(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(5),
        ];
    }
}
