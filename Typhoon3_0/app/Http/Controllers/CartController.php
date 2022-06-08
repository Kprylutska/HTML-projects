<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes;

class CartController extends Controller
{
    public function index(){
        return view('cart');
    }
    public function addToCart($id)
    {
        $dish = Dishes::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $dish->name,
                "quantity" => 1,
                "description" => $dish->description,
                "price" => $dish->price
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function indexUser(){
        return view('user.cart');
    }
    public function addToCartUser($id)
    {
        $dish = Dishes::findOrFail($id);

        $cart = session()->get('user.cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $dish->name,
                "quantity" => 1,
                "description" => $dish->description,
                "price" => $dish->price
            ];
        }

        session()->put('user.cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function updateUser(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('user.cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('user.cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function removeUser(Request $request)
    {
        if($request->id) {
            $cart = session()->get('user.cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('user.cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
