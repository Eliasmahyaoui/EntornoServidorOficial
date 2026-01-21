<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;
use App\Models\Event;



class EventController extends Controller
{

    public function index(): View
    {

        $events = Event::get();

        return view('events.index', compact('events'));
    }


    public function create(): view
    {
        return view('events.create');
    }


    public function store(Request $request): View
    {
        $event['name'] = $request->input('name');
        $event['description'] = $request->input('description');
        $event['location'] = $request->input('location');
        $event['map'] = $request->input('map');
        $event['date'] = $request->input('hour');
        $event['type'] = $request->input('type');
        $event['tags'] = $request->input('tags');
        $event['visible'] = $request->input('visible');


        return view('events.store', compact('event'));
    }


    public function show(Event $event): view
    {
        return view('events.show', compact('event'));
    }


    public function edit(Event $event): view
    {
        return view('events.edit', compact('event'));
    }


    public function update(Request $request, Event $event): view
    {
        return view('events.update');
    }


    public function destroy(Event $event): view

    {


        return view('players.destroy', compact('event'));
    }
}
