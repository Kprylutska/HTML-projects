<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use Illuminate\Http\Request;

class DishesManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dishes::latest()->paginate(20);
    
        return view('admin.menu',compact('dishes'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'grams' => 'required',
        ]);
    
        Dishes::create($request->all());
     
        return redirect()->route('dishes.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dishes  $dishes
     * @return \Illuminate\Http\Response
     */
    public function show(Dishes $dishes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dishes  $dishes
     * @return \Illuminate\Http\Response
     */
    public function edit(Dishes $dishes)
    {
        return view('admin.update', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dishes  $dishes
     * @return \Illuminate\Http\Response
     */
    public function updateDish($id, Request $request)
    {
        $dishes = Dishes::find($id);
        $dishes->name = $request->input('name');
        $dishes->description = $request->input('description');
        $dishes->price = $request->input('price');
        $dishes->grams = $request->input('grams');

        $dishes->save();
     
        return redirect()->route('dishes.index')
                        ->with('success','Post updated successfully');
    }
    public function update($id)
    {
        $dishes = new Dishes;
        return view('admin.update', ['dishes' => $dishes->find($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dishes  $dishes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dishes=Dishes::findOrFail($id);
        $dishes->delete();
    
        return redirect()->route('dishes.index')
                        ->with('success','Post deleted successfully');
    }
}
