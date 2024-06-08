<?php

// app/Http/Controllers/MenuController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Meal::all(); // Assuming 'Meal' is the model for menu items
        return view('menus', compact('menus'));
    }
}
