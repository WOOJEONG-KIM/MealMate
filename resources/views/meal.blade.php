<!-- resources/views/meal.blade.php -->
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
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; }
        .container { width: 80%; margin: auto; }
        .header, .footer { background-color: #5F0080; color: white; text-align: center; padding: 20px 0; }
        .header nav a, .footer a { color: white; text-decoration: none; margin: 0 10px; }
        .header nav a:hover, .footer a:hover { text-decoration: underline; }
        .meal-detail { display: flex; justify-content: space-between; margin-top: 20px; background-color: white; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .meal-image img { width: 100%; height: auto; }
        .meal-info { width: 50%; padding-left: 20px; }
        .meal-info h2 { margin-bottom: 10px; }
        .meal-info p { margin: 5px 0; }
        .btn { background-color: #5F0080; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; }
        .btn:hover { opacity: 0.8; }
        .related-products { margin-top: 40px; }
        .related-products h3 { margin-bottom: 20px; }
        .related-products .product { display: inline-block; width: 30%; margin-right: 2%; vertical-align: top; }
        .related-products img { width: 100%; height: auto; }
        .footer div { padding: 20px 0; }
        .footer a { color: white; margin: 0 10px; }
    </style>
</head>
<body>

    <div class="container">
        <div class="meal-detail">
            <div class="meal-image">
                <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
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
                    <button type="submit" class="btn">Add to cart</button>
                </form>
                <p>Text box for additional details or fine print</p>
            </div>
        </div>

        <div class="related-products">
            <h3>You Might Also Like...</h3>
            @foreach($relatedMeals as $relatedMeal)
                <div class="product">
                    <a href="{{ route('meal.show', $relatedMeal->id) }}">
                        <img src="{{ asset('images/' . $relatedMeal->image) }}" alt="{{ $relatedMeal->name }}">
                        <h4>{{ $relatedMeal->name }}</h4>
                        <p>Body text for {{ $relatedMeal->name }}</p>
                        <p>${{ $relatedMeal->price }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>

@endsection