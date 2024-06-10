@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: auto; }
        .cart { background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 20px; }
        .cart h2 { margin-bottom: 20px; }
        .cart table { width: 100%; border-collapse: collapse; }
        .cart table th, .cart table td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        .quantity-counter { display: flex; align-items: center; }
        .quantity-counter button { background-color: #5F0080; color: white; border: none; width: 30px; height: 30px; cursor: pointer; border-radius: 50%; margin: 0 5px; }
        .quantity-counter input { width: 40px; text-align: center; }
        .btn-delete, .btn-checkout { background-color: #5F0080; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; margin-top: 10px; display: block; margin: auto; }
        .btn-delete:hover, .btn-checkout:hover { opacity: 0.8; }
        .payment { margin-top: 20px; }
    </style>
</head>
<body>

    <div class="container">
        <div class="cart">
            <h2>My Cart</h2>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if($cartItems)
                    @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->product }}</td>
                        <td>${{ $item->unit_price }}</td>
                        <td>
                            <div class="quantity-counter">
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="quantity" value="{{ $item->quantity - 1 }}">
                                    <button type="submit">-</button>
                                </form>
                                <input type="text" value="{{ $item->quantity }}" readonly>
                                <form action="{{ route('cart.update', $item->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="quantity" value="{{ $item->quantity + 1 }}">
                                    <button type="submit">+</button>
                                </form>
                            </div>
                        </td>
                        <td>${{ $item->total }}</td>
                        <td>
                            <form action="{{ route('cart.delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                        <tr>
                            <td colspan="5">Your cart is empty.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

            <div class="payment">
                <p>Total Product: ${{ $totalProduct }}</p>
                <p>Shipping Fee: ${{ $shippingFee }}</p>
                <p>Total: ${{ $total }}</p>
                <form action="{{ route('checkout') }}" method="GET">
                    <button type="submit" class="btn-checkout" style="margin-top: 20px;">Check Out</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
