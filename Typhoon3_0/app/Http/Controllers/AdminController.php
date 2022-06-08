<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function dishes($dish_id){
        $dishes = Dishes::where('id', $dish_id)->first();
        return view('admin.show',
        [
            'dishes' => $dishes
        ]);
    }
    public function menu(){
        $dishes = Dishes::latest()->paginate(20);
        return view('admin.menu',
        [
            'dishes' => $dishes
        ]);
    }
    public function order(){
        return view('admin.order');
    }
    public function home(){
        $dishes = Dishes::latest()->paginate(20);
        return view('admin.home',
        [
            'dishes' => $dishes
        ]);
    }

}

