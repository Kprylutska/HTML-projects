<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes;

class DishController extends Controller
{
    public function show($dish_id){
        $item = Dishes::where('id', $dish_id)->first();
        return view('dishes.show',
        [
            'item' => $item 
        ]);
    }
    public function index()
    {
        $dishes = Dishes::latest()->paginate(20);
        return view('menu',
        [
            'dishes' => $dishes
        ]);
    }
    public function showAdmin($dish_id){
        $item = Dishes::where('id', $dish_id)->first();
        return view('admin.showDish',
        [
            'item' => $item 
        ]);
    }
    public function indexAdmin()
    {
        $dishes = Dishes::latest()->paginate(20);
        return view('admin.menu',
        [
            'dishes' => $dishes
        ]);
    }

    
}

