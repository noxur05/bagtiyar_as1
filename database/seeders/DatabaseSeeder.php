<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(29)->create();
        $this->call([
            CategorySeeder::class,
            CitySeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Bagtiyar Rejepov',
            'email' => 'rejepowbagtiyar05@gmail.com',
        ]);

        Restaurant::factory(20)->create();
        $quantity = function () {
            return random_int(50, 100);
        };
        Product::factory($quantity())->create();
        Reservation::factory($quantity())->create();

        $restaurants = Restaurant::all();
        $products = function () {
            $random = rand(30, 50);
            return Product::all()->random($random)->pluck('id')->toArray();
        };
//        $products = Product::all()->random(rand(30, 60))->pluck('id')->toArray();
        foreach ($restaurants as $restaurant) {
                $restaurant->restaurantProducts()->attach($products());
        }
    }
}
