<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        $restaurant = Restaurant::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();

        return [
            'name' => fake()->unique()->streetName(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(10, 999),
            'restaurant_id' => $restaurant->id,
            'category_id' => $category->id,
        ];
    }
}
