<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('contacts.create');
    }


    public function store(Request $request):View
    {
        return view('contacts.store');
    }


    public function show(string $id):View
    {
        return view('contacts.show', compact('id'));
    }


    public function edit(string $id):View
    {
        return view('contacts.edit');
    }


    public function update(Request $request, string $id):View
    {
        return view('contacts.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):View
    {
        return view('contacts.destroy');
    }
}
