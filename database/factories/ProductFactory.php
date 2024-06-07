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
            'product_name' => fake()->word(5),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(50, 1000),
            'stock' => fake()->numberBetween(1, 100),
            'manufacturer' => fake()->name(),
            'manufacturer_address' => fake()->address(),
            'manufacturer_contact' => fake()->phoneNumber(),
            'manufacturer_email' => fake()->email(),
        ];
    }
}
