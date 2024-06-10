@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .order {
            border: 1px solid #e2e8f0;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 0.25rem;
            background-color: #ffffff;
        }

        .order h3 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #4a5568;
            margin-bottom: 10px;
        }

        .order table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .order th,
        .order td {
            border: 1px solid #cbd5e0;
            padding: 8px;
            text-align: left;
            width: 25%;
        }

        .order th {
            background-color: #edf2f7;
            font-weight: bold;
            color: #4a5568;
        }

        .order td {
            color: #4a5568;
        }

        hr {
            border-top: 1px solid #cbd5e0;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="font-sans bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold my-4">Your Orders</h2>
        @if ($orders->isEmpty())
        <p>No orders found.</p>
        @else
        @foreach ($orders as $order)
        <div class="order">
            <h3>Order #{{ $order->id }} (Placed on {{ $order->created_at->format('M d, Y') }})</h3>
            <table>
                <thead>
                    <tr>
                        <th>Meal</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->orderItems as $item)
                    <tr>
                        <td>{{ $item->meal->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>${{ $item->total_price }}</td>
                        <td>
                            @if ($item->status == 'preparing')
                                Preparing
                            @elseif ($item->status == 'ready')
                                Ready
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <hr>
        @endforeach
        @endif
    </div>
</body>

</html>
@endsection
