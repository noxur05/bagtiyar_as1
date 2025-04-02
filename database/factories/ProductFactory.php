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
        $category = Category::inRandomOrder()->first();

        return [
            'name' => fake()->unique()->streetName(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(10, 999),
            'category_id' => $category->id,
        ];
    }
}
