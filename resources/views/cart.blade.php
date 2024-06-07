<!-- resources/views/cart.blade.php -->
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
        .header nav a:hover, .footer a:hover { text-decoration: underline; }
        .cart-table, .payment { margin-top: 20px; }
        .cart-table table { width: 100%; border-collapse: collapse; background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .cart-table th, .cart-table td { border: 1px solid #ddd; padding: 15px; text-align: center; }
        .cart-table th { background-color: #f2f2f2; }
        .payment { text-align: left; background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .payment div { margin-bottom: 10px; }
        .btn { background-color: #5F0080; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; }
        .btn-delete { background-color: #d9534f; padding: 5px 10px; }
        .btn:hover, .btn-delete:hover { opacity: 0.8; }
        .footer div { padding: 20px 0; }
        .footer a { color: white; margin: 0 10px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Meal Mate</h1>
        <nav>
            <a href="#">ABOUT</a>
            <a href="#">MENUS</a>
            <a href="#">MY CART</a>
            <a href="#" class="btn">Login (Optional)</a>
        </nav>
    </div>

    <div class="container">
        <h2>MY CART</h2>
        <div class="cart-table">
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
                            <td>{{ $item->unit_price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->total }}</td>
                            <td>
                                <form action="{{ route('cart.delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="payment">
            <h3>Payment</h3>
            <div>Total Product: {{ $totalProduct }}</div>
            <div>Shipping Fee: {{ $shippingFee }}</div>
            <div>Total: {{ $total }}</div>
            <button class="btn">Check Out</button>
        </div>
    </div>

    <div class="footer">
        <div>Site name</div>
        <div>Topic | Topic | Topic</div>
        <div>
            <a href="#">Facebook</a>
            <a href="#">LinkedIn</a>
            <a href="#">YouTube</a>
            <a href="#">Instagram</a>
        </div>
    </div>
</body>
</html>
