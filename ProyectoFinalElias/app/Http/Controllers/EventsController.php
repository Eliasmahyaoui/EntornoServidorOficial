<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;


class EventsController extends Controller
{

    public function index():View
    {

    $events = Event::orderBy('date', 'asc')
                      ->get();

        return view('events.index', compact('events'));

    }


    public function create():view
    {
        return view('events.create');
    }


    public function store(Request $request):View
    {
        $event[''] = $request->input('');
        $event[''] = $request->input('');
        $event[''] = $request->input('');

        return view('events.store', compact('event'));

    }


    public function show(string $id):view
    {
        return view('events.show', compact('event'));
    }


    public function edit(string $id):view
    {
        return view('events.edit');
    }


    public function update(Request $request, string $id):view
    {
        return view('events.update');
    }


    public function destroy(string $id):view

    {


        return view('players.destroy', compact('event'));
    }
}
