<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes;

class HomeController extends Controller
{
    public function __construct()
    {
        return view('home');
    }
    // public function index()
    // {
    //     // $dishes = Dishes::orderBy('created_at')->take(8)->get();
    //     // return view('home',
    //     // [
    //     //     'dishes' => $dishes
    //     // ]);
    //     return view('home');
    // }
    public function initHome(){
        $dishes = Dishes::latest()->paginate(6);
        return view('home',
        [
            'dishes' => $dishes
        ]);
    }
}
