@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-san">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold my-4">Checkout</h2>
        <form action="{{ route('checkout.process') }}" method="POST" class="max-w-sm mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="card_number" class="block text-gray-700">Card Number</label>
                <input type="text" id="card_number" name="card_number" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="expiry_date" class="block text-gray-700">Expiry Date</label>
                <input type="text" id="expiry_date" name="expiry_date" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="cvv" class="block text-gray-700">CVV</label>
                <input type="text" id="cvv" name="cvv" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit"
                class="btn-checkout bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Pay Now
            </button>
        </form>
    </div>
</body>

</html>
@endsection
