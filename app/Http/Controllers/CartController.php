<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all();
        $totalProduct = $cartItems->sum('total');
        $shippingFee = 10; // Example static shipping fee
        $total = $totalProduct + $shippingFee;

        return view('cart', compact('cartItems', 'totalProduct', 'shippingFee', 'total'));
    }

    public function destroy($id)
    {
        CartItem::destroy($id);
        return redirect()->route('cart.index');
    }
}