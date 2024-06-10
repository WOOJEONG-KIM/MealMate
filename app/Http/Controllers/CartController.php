<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $cartItems = CartItem::where('user_id', $user->id)->get();
        $totalProduct = $cartItems ? $cartItems->sum('total') : 0;
        $shippingFee = 10;
        $total = $totalProduct + $shippingFee;

        return view('cart', compact('cartItems', 'totalProduct', 'shippingFee', 'total'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $cartItem = CartItem::where('user_id', $user->id)->findOrFail($id);
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
        $user = Auth::user();
        $cartItem = CartItem::where('user_id', $user->id)->findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart.index');
    }
}
