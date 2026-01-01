<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudioController extends Controller
{

    public function index():View
    {
        return view('peliculas.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Studio $studio)
    {
        //
    }


    public function edit(Studio $studio)
    {
        //
    }


    public function update(Request $request, Studio $studio)
    {
        //
    }

    
    public function destroy(Studio $studio)
    {
        //
    }
}
