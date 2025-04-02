<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            "Appetizers",
            "Main Courses (Entrées)",
            "Soups & Salads",
            "Sandwiches & Burgers",
            "Pizza & Pasta",
            "Desserts",
            "Beverages",
            "Sides & Extras",
            "Kids’ Menu",
            "Specials/Seasonal Dishes"
        ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        }
    }
}
