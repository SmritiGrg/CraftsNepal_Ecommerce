<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true), // Generate a product name with 3 words
            'description' => $this->faker->sentence(10), // Generate a sentence with 10 words
            'price' => $this->faker->randomFloat(2, 10, 1000), // Generate a price between 10 and 1000
            'stock' => $this->faker->numberBetween(0, 100), // Generate stock between 0 and 100
            'image' => $this->faker->imageUrl(640, 480, 'products', true), // Generate a product image URL
            'category_id' => \App\Models\ProductCategory::inRandomOrder()->first()->id,
        ];
    }
}
