<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CharacterController extends Controller
{

    public function index():View
    {
        $characters =Character::orderBy('name', 'asc')
                    ->get();
        return view('Character.index',compact('characters'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Character $character)
    {
        return view('Character.show', compact('character'));
    }


    public function edit(Character $character)
    {
        //
    }


    public function update(Request $request, Character $character)
    {
        //
    }


    public function destroy(Character $character)
    {
        //
    }
}
