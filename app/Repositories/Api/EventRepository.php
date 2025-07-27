<?php

namespace App\Repositories\Api;

use App\Models\Event;
use App\Interfaces\Api\EventInterface;

class EventRepository implements EventInterface
{
    public function index()
    {
        return Event::orderBy('id','desc')->get();
    }

    public function show($event)
    {
        return $event;
    }

    public function store($request)
    {
        $event = Event::create([
            'user_id' => 1,
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return response()->json([
            'message' => 'Event created successfully.',
            'event' => $event,
        ], 201);
    }

    public function update($request, $event){
        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return response()->json([
            'message' => 'Event updated successfully.',
            'event' => $event,
        ], 200);
    }

    public function destroy($event){
        $event->delete();
        return response()->json([
            'message' => 'Event deleted successfully.',
        ], 200);
    }
}
