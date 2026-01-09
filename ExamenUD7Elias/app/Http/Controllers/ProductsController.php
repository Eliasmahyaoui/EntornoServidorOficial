<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Products::get();
        //dd($products);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Products();

        $product['name'] = $request->input('name');
        $product['brand'] = $request->input('brand');
        $product['description'] = $request->input('description');
        $product['price'] = $request->input('price');
        $product['stock'] = $request->input('stock');
        $product['disponible'] = $request->input('disponible');
        $product['image'] = $request->input('image');

        $product->save();


        return redirect()->route('products.show', compact('product'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        return redirect()->route('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product): View
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {


        $products->name = $request->input('name');
        $products->brand = $request->input('brand');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->stock = $request->input('stock');
        $products->disponible = $request->input('disponible');
        $products->image = $request->input('image');

        $products->update();
        return redirect()->route('products.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        // return view('products', compact('products'));
    }
}
