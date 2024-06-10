<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CartItem;
use App\Models\Meal;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function process(Request $request)
    {
        $user = Auth::user();

        $cartItems = CartItem::where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        $order = Order::create(['user_id' => $user->id]);

        foreach ($cartItems as $cartItem) {
            $meal = Meal::findOrFail($cartItem->product_id);
            $prepTime = $this->parseTotalTime($meal->total_time);
            OrderItem::create([
                'order_id' => $order->id,
                'meal_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'total_price' => $cartItem->total,
                'prep_time' => $prepTime,
            ]);

            $cartItem->delete();
        }

        return redirect()->route('checkout.success')->with('success', 'Payment successful and order created.');
    }

    private function parseTotalTime($totalTime)
    {
        preg_match('/(\d+)/', $totalTime, $matches);
        if (!empty($matches)) {
            return (int) $matches[0]; 
        } else {
            return 0; 
        }
    }

    public function success()
    {
        return view('checkout-success');
    }
}
