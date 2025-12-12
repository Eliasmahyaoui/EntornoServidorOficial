<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RickMortyController extends Controller
{

    public function getCharacter()
    {
        $response = Http::get('http://rickandmortyapi.com/api/character');
        $characters = collect($response->json('results'))
                        ->map(fn($item)=>(object) $item);


        do {
            # code...
        } while ($characters <= 10);




        return view('rickmorty.index',compact('characters'));
    }
}
