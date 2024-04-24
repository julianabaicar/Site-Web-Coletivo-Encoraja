<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        // $data = $request->user()->id(); pegando informações do usuario logado
        // echo '<pre>';
        // die(print_r($data));
        return view('events.index', ['events' => $events]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // die(print_r($request->all()));
        if(Event::query()->create($request->all())) {
            return response()->redirectTo('/events');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // ver detalhes de um evento
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return response()->redirectTo('/events');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return response()->redirectTo('/events');
    }
}
