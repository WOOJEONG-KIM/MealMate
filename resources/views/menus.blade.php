@extends('layouts.layout')

@section('content')

<div class = "small-container">
    <h2 class = "title">Menus</h2>
    
    <div class = "row">
        <div class = "col-4">
            <a href="{{ route('meal.show', $menu->id) }}">
                <img src="{{ asset('img/' . $menu->image) }}" alt="{{ $menu->name }}">
                <h4>{{ $menu->name }}</h4>
                <p>{{ $menu->tag }}</p>
                <p>${{ $menu->price }}</p>
            </a>
        </div>   
    </div>
    

@endsection