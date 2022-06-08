<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function orders(){
        $orders = Order::latest()->paginate(20);
        return view('admin.order',
        [
            'orders' => $orders
        ]);
    }
    public function order($total){
    dd($total);
    }
}
