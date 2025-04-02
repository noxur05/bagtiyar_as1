<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    public function definition(): array
    {
        $city = City::inRandomOrder()->first();

        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'city_id' => $city->id,
            'description' => fake()->text(),
        ];
    }
}
