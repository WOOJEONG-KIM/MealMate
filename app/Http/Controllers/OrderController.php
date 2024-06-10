<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\CartItem;
use App\Models\Meal;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

        foreach ($orders as $order) {
            foreach ($order->orderItems as $item) {
                if ($item->status == 'preparing') {
                    $readyTime = $order->created_at->addMinutes($item->prep_time);

                    if (Carbon::now() >= $readyTime) {
                        $item->update(['status' => 'ready']);
                    }
                }
            }
        }

        return view('orders', compact('orders'));
    }
}

