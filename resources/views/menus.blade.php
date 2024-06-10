@extends('layouts.layout')

@section('content')
<head>
<style>
    .menu-item {
        border-radius: 15px; 
        overflow: hidden; 
    }

    .menu-item img {
        width: 100%; 
        height: 100%; 
        object-fit: cover; 
        border-radius: 15px;
    }
</style>
</head>
<body>
<div class="small-container">
    <h2 class="title">Menus</h2>
    
    <div class="row">
        @foreach($menus as $menu)
        <div class="col-4">
            <a href="{{ route('meal.show', $menu->id) }}">
                <div class="menu-item">
                    <img src="{{ asset('img/' . $menu->image) }}" alt="{{ $menu->name }}">
                    <h4>{{ $menu->name }}</h4>
                    <p>{{ $menu->tag }}</p>
                    <p>${{ $menu->price }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</body>

@endsection