@extends('layouts.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Detail</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: auto; margin-top: 20px; }
        .meal-detail { display: flex; justify-content: flex-start; align-items: center; background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .meal-image { flex: 0 0 300px; display: flex; justify-content: center; align-items: center; }
        .meal-image img { width: 100%; height: 300px; object-fit: cover; border-radius: 15px; }
        .meal-info { flex: 1; padding-left: 20px; }
        .meal-info h2 { margin-bottom: 10px; }
        .meal-info p { margin: 5px 0; }
        .btn { background-color: #5F0080; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; }
        .btn:hover { opacity: 0.8; }
        .related-products { margin-top: 40px; }
        .related-products h3 { margin-bottom: 20px; }
        .row { display: flex; justify-content: space-between; }
        .col-4 { width: 30%; margin-right: 2%; }
        .col-4:last-child { margin-right: 0; }
        .related-products img { width: 100%; height: 300px; object-fit: cover; border-radius: 15px; }
        .quantity-counter { display: flex; align-items: center; margin-bottom: 10px; }
        .quantity-counter button { background-color: #5F0080; color: white; border: none; width: 30px; height: 30px; cursor: pointer; border-radius: 50%; margin: 0 5px; }
        .quantity-counter input { width: 40px; text-align: center; }
    </style>
</head>
<body>

<div class="container">
    <div class="meal-detail">
        <div class="meal-image">
            <img src="{{ asset('img/' . $meal->image) }}" alt="{{ $meal->name }}">
        </div>
        <div class="meal-info">
            <h2>{{ $meal->name }}</h2>
            <p><strong>Kid-Friendly</strong></p>
            <p>${{ $meal->price }}</p>
            <p>Total Time: {{ $meal->total_time }}</p>
            <p>Difficulty: {{ $meal->difficulty }}</p>
            <p>Ingredients: {{ $meal->ingredients }}</p>
            <p>Allergens: {{ $meal->allergens }}</p>
            <form action="{{ route('cart.add', $meal->id) }}" method="POST">
                @csrf
                <div class="quantity-counter">
                    <button type="button" onclick="decreaseQuantity()">-</button>
                    <input type="text" name="quantity" id="quantity" value="1" readonly>
                    <button type="button" onclick="increaseQuantity()">+</button>
                </div>
                <button type="submit" class="btn">Add to cart</button>
            </form>
        </div>
    </div>

    <div class="related-products">
        <h3>You Might Also Like...</h3>
        @if($relatedMeals->isEmpty())
            <p>No related meals found.</p>
        @else
            @foreach($relatedMeals->chunk(3) as $chunk)
                <div class="row">
                    @foreach($chunk as $relatedMeal)
                        <div class="col-4 product">
                            <a href="{{ route('meal.show', $relatedMeal->id) }}">
                                <img src="{{ asset('img/' . $relatedMeal->image) }}" alt="{{ $relatedMeal->name }}">
                                <h4>{{ $relatedMeal->name }}</h4>
                                <p>{{ $relatedMeal->tag }}</p>
                                <p>${{ $relatedMeal->price }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>
</div>

<script>
    function decreaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        var quantity = parseInt(quantityInput.value);
        if (quantity > 1) {
            quantityInput.value = quantity - 1;
        }
    }

    function increaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        var quantity = parseInt(quantityInput.value);
        quantityInput.value = quantity + 1;
    }
</script>

</body>
</html>

@endsection
