<!-- resources/views/cart.blade.php -->
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
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; }
        .container { width: 80%; margin: auto; }
        .header, .footer { background-color: #5F0080; color: white; text-align: center; padding: 20px 0; }
        .header nav a, .footer a { color: white; text-decoration: none; margin: 0 10px; }
        /* .header nav a:hover, .footer a:hover { text-decoration: underline; } */
        .cart { background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 20px; }
        .cart h2 { margin-bottom: 20px; }
        .cart table { width: 100%; border-collapse: collapse; }
        .cart table th, .cart table td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        .quantity-counter { display: flex; align-items: center; }
        .quantity-counter button { background-color: #5F0080; color: white; border: none; width: 30px; height: 30px; cursor: pointer; }
        .quantity-counter input { width: 40px; text-align: center; }
        .btn { background-color: #5F0080; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; margin-top: 20px; }
        .btn:hover { opacity: 0.8; }
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
                                    <button type="submit" class="btn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="payment">
                <p>Total Product: ${{ $totalProduct }}</p>
                <p>Shipping Fee: ${{ $shippingFee }}</p>
                <p>Total: ${{ $total }}</p>
                <button class="btn">Check Out</button>
            </div>
        </div>
    </div>

</body>
</html>

@endsection