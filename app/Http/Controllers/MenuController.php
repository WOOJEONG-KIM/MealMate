<?php

namespace App\Http\Controllers;

use App\Models\Meal;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Meal::all();
        return view('menus', compact('menus'));
    }
}