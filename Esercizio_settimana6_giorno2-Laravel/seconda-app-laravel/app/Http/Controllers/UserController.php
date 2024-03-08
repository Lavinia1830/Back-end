<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $products = [
        ['id' => 1, 'marca' => 'Nutella', 'categoria' => 'alimentari', 'price' => '5,00€'],
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('products', ['title' => 'Product List', 'products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('createProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $products)
    {
        //
        return '<h1>Show</h1>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $products)
    {
        //
    }
}
