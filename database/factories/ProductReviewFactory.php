<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductReview>
 */
class ProductReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => $this->faker->sentence(), 
            'rating' => $this->faker->numberBetween(1, 5), // rating out of 5
            'product_id' => \App\Models\product::inRandomOrder()->first()->id, // Will create a product instance
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
