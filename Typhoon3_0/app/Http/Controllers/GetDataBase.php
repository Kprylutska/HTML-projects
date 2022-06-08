<?php

namespace App\Http\Controllers;
use App\Models\Dishes;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GetDataBase extends Controller
{
    public function index(){
        $dishes = DB::table('dishes')->get();
        return view('menu', ['dishes'=>$dishes]);
        // return "Vadym";

        // return view('orders', ['data'=>DB::table('dishes')->get()]);
        // $date = DB::select('dishes') -> count();
        // echo $date;
        // $dishes=new Dishes();
        // $dishes->name_dishes=$req

    }
}
