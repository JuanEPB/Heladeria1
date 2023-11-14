<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('carrito');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            Cart::add(array(
                'id' => $request->id?$request->id:'1', // inique row ID
                'name' => $request->name?$request->name:'example',
                'price' =>$request->price?$request->price:20.20,
                'quantity' => $request->quantity?$request->quantity:1,
                'attributes' => array(
                    'color' => $request->color?$request->color:'green',
                    'size' => $request->size?$request->size:'Big',
                )
            ));
            return back();
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
