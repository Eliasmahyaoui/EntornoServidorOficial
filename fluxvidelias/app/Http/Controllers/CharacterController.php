<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{

    public function index()
    {

        $characters=Character::orderBy('name','ASC')->get();

        return view('characters.index', compact('characters'));
    }


    public function create()
    {
        $animes= Anime::get();
        return view('characters.create', compact('animes'));
    }


    public function store(Request $request)
    {
        $character= new Character();
        $character->name = $request->input('name');
        $character->age = $request->input('age');
        $character->gender = $request->input('gender');
        $character->roles = $request->input('roles');
        $character->description = $request->input('description');

    }


    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
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
