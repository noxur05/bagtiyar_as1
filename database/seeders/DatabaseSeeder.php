<?php

namespace Database\Seeders;

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
    }
}
