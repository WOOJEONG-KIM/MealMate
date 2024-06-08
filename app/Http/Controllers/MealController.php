<?php

// app/Http/Controllers/MealController.php
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

        $cartItem = CartItem::where('product_id', $meal->id)->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->total = $cartItem->unit_price * $cartItem->quantity;
            $cartItem->save();
        } else {
            CartItem::create([
                'product_id' => $meal->id,
                'product' => $meal->name,
                'unit_price' => $meal->price,
                'quantity' => 1,
                'total' => $meal->price,
            ]);
        }

        return redirect()->route('cart.index');
    }
}
