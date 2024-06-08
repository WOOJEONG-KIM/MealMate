<?php

// app/Http/Controllers/CartController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all();
        $totalProduct = $cartItems->sum('total');
        $shippingFee = 50; // Example static shipping fee
        $total = $totalProduct + $shippingFee;

        return view('cart', compact('cartItems', 'totalProduct', 'shippingFee', 'total'));
    }

    public function update(Request $request, $id)
    {
        $cartItem = CartItem::findOrFail($id);
        $quantity = $request->input('quantity');

        if ($quantity <= 0) {
            $cartItem->delete();
        } else {
            $cartItem->quantity = $quantity;
            $cartItem->total = $cartItem->unit_price * $quantity;
            $cartItem->save();
        }

        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
        CartItem::destroy($id);
        return redirect()->route('cart.index');
    }
}
