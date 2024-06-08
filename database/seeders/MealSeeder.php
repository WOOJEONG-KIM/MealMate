<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;


// // Menu 5: Spinach Cream Penne
// $meal5 = new Meal();
// $meal5->name = 'Spinach Cream Penne';
// $meal5->image = 'menus/menu5.jpg';
// $meal5->price = 13.99;
// $meal5->total_time = '35 Min';
// $meal5->difficulty = 'Medium';
// $meal5->ingredients = 'Penne Pasta, Spinach, Cream Sauce, Parmesan Cheese';
// $meal5->allergens = 'Dairy';
// $meal5->tag = 'Kid-Friendly';
// $meal5->save();

// // Menu 6: Pumpkin Soup
// $meal6 = new Meal();
// $meal6->name = 'Pumpkin Soup';
// $meal6->image = 'menus/menu6.jpg';
// $meal6->price = 9.99;
// $meal6->total_time = '40 Min';
// $meal6->difficulty = 'Easy';
// $meal6->ingredients = 'Pumpkin, Onion, Vegetable Broth, Cream';
// $meal6->allergens = 'Dairy';
// $meal6->tag = 'Kid-Friendly';
// $meal6->save();

// // Menu 7: Cheese Salad
// $meal7 = new Meal();
// $meal7->name = 'Cheese Salad';
// $meal7->image = 'menus/menu7.jpg';
// $meal7->price = 11.50;
// $meal7->total_time = '15 Min';
// $meal7->difficulty = 'Easy';
// $meal7->ingredients = 'Lettuce, Tomatoes, Cucumbers, Cheese, Dressing';
// $meal7->allergens = 'Dairy';
// $meal7->tag = 'Halal';
// $meal7->save();

// // Menu 8: Soy Sauce Chicken
// $meal8 = new Meal();
// $meal8->name = 'Soy Sauce Chicken';
// $meal8->image = 'menus/menu8.jpg';
// $meal8->price = 13.75;
// $meal8->total_time = '50 Min';
// $meal8->difficulty = 'Medium';
// $meal8->ingredients = 'Chicken, Soy Sauce, Garlic, Ginger, Rice';
// $meal8->allergens = 'Soy';
// $meal8->tag = 'Halal';
// $meal8->save();

// // Menu 9: Margherita Pizza
// $meal9 = new Meal();
// $meal9->name = 'Margherita Pizza';
// $meal9->image = 'menus/menu9.jpg';
// $meal9->price = 14.99;
// $meal9->total_time = '30 Min';
// $meal9->difficulty = 'Medium';
// $meal9->ingredients = 'Pizza Dough, Tomato Sauce, Mozzarella Cheese, Basil';
// $meal9->allergens = 'Gluten, Dairy';
// $meal9->tag = 'Kid-Friendly';
// $meal9->save();

// // Menu 10: Shrimp Poke
// $meal10 = new Meal();
// $meal10->name = 'Shrimp Poke';
// $meal10->image = 'menus/menu10.jpg';
// $meal10->price = 17.99;
// $meal10->total_time = '20 Min';
// $meal10->difficulty = 'Medium';
// $meal10->ingredients = 'Shrimp, Rice, Avocado, Cucumber, Soy Sauce';
// $meal10->allergens = 'Shellfish, Soy';
// $meal10->tag = 'Halal';
// $meal10->save();

// // Menu 11: Salmon Wrap
// $meal11 = new Meal();
// $meal11->name = 'Salmon Wrap';
// $meal11->image = 'menus/menu11.jpg';
// $meal11->price = 16.50;
// $meal11->total_time = '15 Min';
// $meal11->difficulty = 'Easy';
// $meal11->ingredients = 'Salmon, Tortilla, Lettuce, Tomato, Avocado';
// $meal11->allergens = 'Fish';
// $meal1->tag = 'Halal';
// $meal11->save();

// // Menu 12: Cream Gnocchi
// $meal12 = new Meal();
// $meal12->name = 'Cream Gnocchi';
// $meal12->image = 'menus/menu12.jpg';
// $meal12->price = 15.00;
// $meal12->total_time = '25 Min';
// $meal12->difficulty = 'Medium';
// $meal12->ingredients = 'Gnocchi, Cream Sauce, Parmesan Cheese, Spinach';
// $meal12->allergens = 'Dairy';
// $meal12->tag = 'Kid-Friendly';
// $meal12->save();

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
    }
}