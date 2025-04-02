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
            'password' => bcrypt('admin')
        ]);

        Restaurant::factory(20)->create();
        $quantity = function () {
            return random_int(50, 100);
        };
        Product::factory($quantity())->create();
        Reservation::factory($quantity())->create();
    }
}
