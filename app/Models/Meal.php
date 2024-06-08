<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'price', 'total_time', 'difficulty', 'ingredients', 'allergens', 'tag'];
}


use App\Models\Meal;

// Menu 1: Avocado Tomato Wrap
$meal1 = new Meal();
$meal1->name = 'Avocado Tomato Wrap';
$meal1->image = 'menus/menu1.jpg';
$meal1->price = 10.00;
$meal1->total_time = '10 Min';
$meal1->difficulty = 'Easy';
$meal1->ingredients = 'Avocado, Tomato, Flour Tortillas';
$meal1->allergens = 'None';
$meal1->tag = 'Vegan';
$meal1->save();

// Menu 2: Chicken Dumpling Soup
$meal2 = new Meal();
$meal2->name = 'Chicken Dumpling Soup';
$meal2->image = 'menus/menu2.jpg';
$meal2->price = 12.50;
$meal2->total_time = '30 Min';
$meal2->difficulty = 'Medium';
$meal2->ingredients = 'Chicken, Dumplings, Vegetables, Broth';
$meal2->allergens = 'Gluten';
$meal2->tag = 'Halal';
$meal2->save();

// Menu 3: Pancake
$meal3 = new Meal();
$meal3->name = 'Pancake';
$meal3->image = 'menus/menu3.jpg';
$meal3->price = 8.99;
$meal3->total_time = '20 Min';
$meal3->difficulty = 'Easy';
$meal3->ingredients = 'Flour, Milk, Eggs, Butter, Maple Syrup';
$meal3->allergens = 'Gluten, Dairy';
$meal3->tag = 'Kid-Friendly';
$meal3->save();

// Menu 4: Egg in Hell
$meal4 = new Meal();
$meal4->name = 'Egg in Hell';
$meal4->image = 'menus/menu4.jpg';
$meal4->price = 9.50;
$meal4->total_time = '15 Min';
$meal4->difficulty = 'Easy';
$meal4->ingredients = 'Tomatoes, Eggs, Onion, Garlic, Chili Peppers';
$meal4->allergens = 'None';
$meal4->tag = 'Halal';
$meal4->save();

// Menu 5: Spinach Cream Penne
$meal5 = new Meal();
$meal5->name = 'Spinach Cream Penne';
$meal5->image = 'menus/menu5.jpg';
$meal5->price = 13.99;
$meal5->total_time = '35 Min';
$meal5->difficulty = 'Medium';
$meal5->ingredients = 'Penne Pasta, Spinach, Cream Sauce, Parmesan Cheese';
$meal5->allergens = 'Dairy';
$meal5->tag = 'Kid-Friendly';
$meal5->save();

// Menu 6: Pumpkin Soup
$meal6 = new Meal();
$meal6->name = 'Pumpkin Soup';
$meal6->image = 'menus/menu6.jpg';
$meal6->price = 9.99;
$meal6->total_time = '40 Min';
$meal6->difficulty = 'Easy';
$meal6->ingredients = 'Pumpkin, Onion, Vegetable Broth, Cream';
$meal6->allergens = 'Dairy';
$meal6->tag = 'Kid-Friendly';
$meal6->save();

// Menu 7: Cheese Salad
$meal7 = new Meal();
$meal7->name = 'Cheese Salad';
$meal7->image = 'menus/menu7.jpg';
$meal7->price = 11.50;
$meal7->total_time = '15 Min';
$meal7->difficulty = 'Easy';
$meal7->ingredients = 'Lettuce, Tomatoes, Cucumbers, Cheese, Dressing';
$meal7->allergens = 'Dairy';
$meal7->tag = 'Halal';
$meal7->save();

// Menu 8: Soy Sauce Chicken
$meal8 = new Meal();
$meal8->name = 'Soy Sauce Chicken';
$meal8->image = 'menus/menu8.jpg';
$meal8->price = 13.75;
$meal8->total_time = '50 Min';
$meal8->difficulty = 'Medium';
$meal8->ingredients = 'Chicken, Soy Sauce, Garlic, Ginger, Rice';
$meal8->allergens = 'Soy';
$meal8->tag = 'Halal';
$meal8->save();

// Menu 9: Margherita Pizza
$meal9 = new Meal();
$meal9->name = 'Margherita Pizza';
$meal9->image = 'menus/menu9.jpg';
$meal9->price = 14.99;
$meal9->total_time = '30 Min';
$meal9->difficulty = 'Medium';
$meal9->ingredients = 'Pizza Dough, Tomato Sauce, Mozzarella Cheese, Basil';
$meal9->allergens = 'Gluten, Dairy';
$meal9->tag = 'Kid-Friendly';
$meal9->save();

// Menu 10: Shrimp Poke
$meal10 = new Meal();
$meal10->name = 'Shrimp Poke';
$meal10->image = 'menus/menu10.jpg';
$meal10->price = 17.99;
$meal10->total_time = '20 Min';
$meal10->difficulty = 'Medium';
$meal10->ingredients = 'Shrimp, Rice, Avocado, Cucumber, Soy Sauce';
$meal10->allergens = 'Shellfish, Soy';
$meal10->tag = 'Halal';
$meal10->save();

// Menu 11: Salmon Wrap
$meal11 = new Meal();
$meal11->name = 'Salmon Wrap';
$meal11->image = 'menus/menu11.jpg';
$meal11->price = 16.50;
$meal11->total_time = '15 Min';
$meal11->difficulty = 'Easy';
$meal11->ingredients = 'Salmon, Tortilla, Lettuce, Tomato, Avocado';
$meal11->allergens = 'Fish';
$meal11->tag = 'Halal';
$meal11->save();

// Menu 12: Cream Gnocchi
$meal12 = new Meal();
$meal12->name = 'Cream Gnocchi';
$meal12->image = 'menus/menu12.jpg';
$meal12->price = 15.00;
$meal12->total_time = '25 Min';
$meal12->difficulty = 'Medium';
$meal12->ingredients = 'Gnocchi, Cream Sauce, Parmesan Cheese, Spinach';
$meal12->allergens = 'Dairy';
$meal12->tag = 'Kid-Friendly';
$meal12->save();