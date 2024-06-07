@extends('layouts.layout')

@section('content')

<div class = "small-container">
    <h2 class = "title">Menus</h2>

    <div class = "row">
        <div class = "col-4">
            <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
            <h4>{{ $meal->name }}</h4>
            <p>${{ $meal->price }}</p>
        </div>

        <div class = "col-4">
            <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
            <h4>{{ $meal->name }}</h4>
            <p>${{ $meal->price }}</p>
        </div>

        <div class = "col-4">
            <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
            <h4>{{ $meal->name }}</h4>
            <p>${{ $meal->price }}</p>
        </div>

        <div class = "col-4">
            <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
            <h4>{{ $meal->name }}</h4>
            <p>${{ $meal->price }}</p>
        </div>

        <div class = "col-4">
            <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
            <h4>{{ $meal->name }}</h4>
            <p>${{ $meal->price }}</p>
        </div>

        <div class = "col-4">
            <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
            <h4>{{ $meal->name }}</h4>
            <p>${{ $meal->price }}</p>
        </div>

        <div class = "col-4">
            <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
            <h4>{{ $meal->name }}</h4>
            <p>${{ $meal->price }}</p>
        </div>

        <div class = "col-4">
            <img src="{{ asset('images/' . $meal->image) }}" alt="{{ $meal->name }}">
            <h4>{{ $meal->name }}</h4>
            <p>${{ $meal->price }}</p>
        </div>
    </div>

@endsection