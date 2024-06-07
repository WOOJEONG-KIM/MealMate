<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;

class MealSeeder extends Seeder
{
    public function run()
    {
        Meal::create([
            'name' => 'Shiitake Mushroom',
            'image' => 'shiitake.jpg',
            'price' => 10.99,
            'total_time' => '30 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Shiitake, Olive Oil, Salt, Pepper',
            'allergens' => 'None'
        ]);

        Meal::create([
            'name' => 'Pear',
            'image' => 'pear.jpg',
            'price' => 10.99,
            'total_time' => '10 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Pear',
            'allergens' => 'None'
        ]);

        Meal::create([
            'name' => 'Watermelon',
            'image' => 'watermelon.jpg',
            'price' => 10.99,
            'total_time' => '15 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Watermelon',
            'allergens' => 'None'
        ]);

        Meal::create([
            'name' => 'Root Vegetables',
            'image' => 'root_vegetables.jpg',
            'price' => 10.99,
            'total_time' => '45 mins',
            'difficulty' => 'Medium',
            'ingredients' => 'Beetroot, Carrot, Potato',
            'allergens' => 'None'
        ]);
    }
}