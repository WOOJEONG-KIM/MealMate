<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class MealController extends Controller
{
    public function welcome()
    {
        $meals = Meal::take(4)->get();

        return view('welcome', ['meals' => $meals]);
    }

    public function show($id)
    {
        $meal = Meal::findOrFail($id);
        $relatedMeals = Meal::where('id', '!=', $id)->where('tag', $meal->tag)->get();
        return view('meal', compact('meal', 'relatedMeals'));
    }

    public function addToCart(Request $request, $id)
    {
        $meal = Meal::findOrFail($id);
        $user = Auth::user();
        $quantity = $request->input('quantity', 1); 

        $cartItem = CartItem::where('user_id', $user->id)->where('product_id', $meal->id)->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->total = $cartItem->unit_price * $cartItem->quantity;
            $cartItem->save();
        } else {
            CartItem::create([
                'user_id' => $user->id,
                'product_id' => $meal->id,
                'product' => $meal->name,
                'unit_price' => $meal->price,
                'quantity' => $quantity,
                'total' => $meal->price * $quantity,
            ]);
        }

        return redirect()->route('cart.index');
    }
}

