<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\CartItem;

class MealController extends Controller
{
    public function show($id)
    {
        $meal = Meal::findOrFail($id);
        $relatedMeals = Meal::where('id', '!=', $id)->take(3)->get();
        return view('meal', compact('meal', 'relatedMeals'));
    }

    public function addToCart(Request $request, $id)
    {
        $meal = Meal::findOrFail($id);
        
        CartItem::create([
            'product' => $meal->name,
            'unit_price' => $meal->price,
            'quantity' => 1, // You can modify this to handle different quantities
            'total' => $meal->price,
        ]);

        return redirect()->route('cart.index');
    }
}
