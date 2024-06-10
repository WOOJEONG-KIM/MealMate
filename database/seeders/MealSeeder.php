<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;

class MealSeeder extends Seeder
{
    public function run()
    {
        Meal::create([
            'name' => 'Avacados Tomato Wrap',
            'image' => 'menus/menu1.jpg',
            'price' => 10.00,
            'total_time' => '10 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Avocado, Tomato, Flour Tortillas',
            'allergens' => 'None',
            'tag' => 'Vegan'
        ]);

        Meal::create([
            'name' => 'Chicken Dumpling Soup',
            'image' => 'menus/menu2.jpg',
            'price' => 12.50,
            'total_time' => '30 mins',
            'difficulty' => 'Medium',
            'ingredients' => 'Chicken, Dumplings, Vegetables, Broth',
            'allergens' => 'Gluten',
            'tag' => 'Halal'
        ]);

        Meal::create([
            'name' => 'Pancakes',
            'image' => 'menus/menu3.jpg',
            'price' => 8.99,
            'total_time' => '20 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Flour, Milk, Eggs, Butter, Maple Syrup',
            'allergens' => 'Gluten, Dairy',
            'tag' => 'Kid-Friendly'
        ]);

        Meal::create([
            'name' => 'Egg in Hell',
            'image' => 'menus/menu4.jpg',
            'price' => 9.50,
            'total_time' => '15 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Tomatoes, Eggs, Onion, Garlic, Chili Peppers',
            'allergens' => 'None',
            'tag' => 'Halal'
        ]);

        Meal::create([
            'name' => 'Spinach Cream Penne',
            'image' => 'menus/menu5.jpg',
            'price' => 13.99,
            'total_time' => '35 mins',
            'difficulty' => 'Medium',
            'ingredients' => 'Penne Pasta, Spinach, Cream Sauce, Parmesan Cheese',
            'allergens' => 'Dairy',
            'tag' => 'Kid-Friendly'
        ]);

        Meal::create([
            'name' => 'Pumpkin Soup',
            'image' => 'menus/menu6.jpg',
            'price' => 9.99,
            'total_time' => '40 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Pumpkin, Onion, Vegetable Broth, Cream',
            'allergens' => 'Dairy',
            'tag' => 'Kid-Friendly'
        ]);

        Meal::create([
            'name' => 'Cheese Salad',
            'image' => 'menus/menu7.jpg',
            'price' => 11.50,
            'total_time' => '15 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Lettuce, Tomatoes, Cucumbers, Cheese, Dressing',
            'allergens' => 'Dairy',
            'tag' => 'Halal'
        ]);

        Meal::create([
            'name' => 'Soy Sauce Chicken',
            'image' => 'menus/menu8.jpg',
            'price' => 13.75,
            'total_time' => '50 mins',
            'difficulty' => 'Medium',
            'ingredients' => 'Chicken, Soy Sauce, Garlic, Ginger, Rice',
            'allergens' => 'Soy',
            'tag' => 'Halal'
        ]);

        Meal::create([
            'name' => 'Margherita Pizza',
            'image' => 'menus/menu9.jpg',
            'price' => 14.99,
            'total_time' => '30 mins',
            'difficulty' => 'Medium',
            'ingredients' => 'Pizza Dough, Tomato Sauce, Mozzarella Cheese, Basil',
            'allergens' => 'Gluten, Dairy',
            'tag' => 'Kid-Friendly'
        ]);

        Meal::create([
            'name' => 'Shrimp Poke',
            'image' => 'menus/menu10.jpg',
            'price' => 17.99,
            'total_time' => '20 mins',
            'difficulty' => 'Medium',
            'ingredients' => 'Shrimp, Rice, Avocado, Cucumber, Soy Sauce',
            'allergens' => 'Shellfish, Soy',
            'tag' => 'Halal'
        ]);

        Meal::create([
            'name' => 'Salmon Wrap',
            'image' => 'menus/menu11.jpg',
            'price' => 16.50,
            'total_time' => '15 mins',
            'difficulty' => 'Easy',
            'ingredients' => 'Salmon, Tortilla, Lettuce, Tomato, Avocado',
            'allergens' => 'Fish',
            'tag' => 'Halal'
        ]);

        Meal::create([
            'name' => 'Cream Gnocchi',
            'image' => 'menus/menu12.jpg',
            'price' => 15.00,
            'total_time' => '25 mins',
            'difficulty' => 'Medium',
            'ingredients' => 'Gnocchi, Cream Sauce, Parmesan Cheese, Spinach',
            'allergens' => 'Dairy',
            'tag' => 'Kid-Friendly'
        ]);

    }
}