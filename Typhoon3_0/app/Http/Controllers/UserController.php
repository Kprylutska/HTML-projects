<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function dishes($dish_id){
        $dishes = Dishes::where('id', $dish_id)->first();
        return view('user.show',
        [
            'dishes' => $dishes 
        ]);
    }
    public function menu(){
        $dishes = Dishes::latest()->paginate(20);
        return view('user.menu',
        [
            'dishes' => $dishes
        ]);
    }
    public function orders(){
        return view('user.order');
    }
    public function home(){
        $dishes = Dishes::latest()->paginate(20);
        return view('user.home',
        [
            'dishes' => $dishes
        ]);
    }
    public function contact(){
        return view('user.contact');
    }
}
