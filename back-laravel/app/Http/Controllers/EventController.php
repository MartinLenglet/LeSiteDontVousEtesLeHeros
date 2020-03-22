<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function show(Event $event)
    {
        $event->choices = Event::findChoices($event);
        $event->adventure = Event::findAdventure($event);
        return response()->json($event, 200);
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());

        return response()->json($event, 201);
    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        return response()->json($event, 200);
    }

    public function delete(Event $event)
    {
        // On supprime aussi tous les choix vers ou depuis cet event
        $choicesFrom = Event::findChoices($event);
        foreach ($choicesFrom as $choice) {
            $choice->delete();
        }
        $choicesTo = Event::findChoicesTo($event);
        foreach ($choicesTo as $choice) {
            $choice->delete();
        }

        $event->delete();

        return response()->json(null, 204);
    }
}
