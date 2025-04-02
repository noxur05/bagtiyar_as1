<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $restaurant = Restaurant::inRandomOrder()->first();
        return [
            'restaurant_id' => $restaurant->id,
            'user_id' => $user->id,
            'guest_count' => fake()->numberBetween(1, 7),
            'time' => $this->faker->dateTimeBetween('now', '+2 weeks'),
        ];
    }
}
