@extends('layouts.layout')

@section('content')

<div class = "row">
            <div class = "col-2">
                <h1>Welcome!</h1>
                <p>Experience the joy of simple cooking<br>with fresh ingredients</p>
                <a href = "/about" class = "button">ABOUT</a> 
            </div>
            <div class = "col-2">
                <img src = "img/Intro1.jpg" alt = "meal table">
            </div>
        </div>

<div class = "small-container">
    <h2 class = "title">Bestseller</h2>
    <div class="row">
        @foreach($meals as $meal)
        <div class="col-4">
            <a href="{{ route('meal.show', ['id' => $meal->id]) }}">
                <img src="{{ asset('img/' . $meal->image) }}" alt="{{ $meal->name }}">
                <h4>{{ $meal->name }}</h4>
                <p>{{ $meal->tag }}</p>
                <p>${{ $meal->price }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection