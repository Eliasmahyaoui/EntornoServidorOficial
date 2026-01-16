<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\view;

use function Laravel\Prompts\form;

class PlayersController extends Controller
{

    public function index(): view
    {
        return view('players.index');
    }


    public function create()
    {
        return view('players.create');
    }


    public function store(Request $request)
    {
        $player['name'] = $request->input('name');
        $player['nacionality'] = $request->input('nacionality');
        $player['equipo'] = $request->input('equipo');

        return view('players.store', compact('player'));
    }


    public function show(string $id)
    {
        return view('players.show', compact('id'));
    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $player)
    {
         $player['name'] = $request->input('name');
        $player['nacionality'] = $request->input('nacionality');
        $player['equipo'] = $request->input('equipo');
        return view('players.update', compact('player'));
    }


    public function destroy(string $player)
    {
        return view('players.destroy', compact('player'));
    }
}
