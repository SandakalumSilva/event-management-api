<?php

namespace App\Repositories\Api;

use App\Http\Resources\EventResource;
use App\Http\Traits\CanLoadRelationships;
use App\Models\Event;
use App\Interfaces\Api\EventInterface;

class EventRepository implements EventInterface
{
    use CanLoadRelationships;
    public function index()
    {

        $relations = ['user', 'attendees', 'attendees.user'];
        $query = $this->loadRelationships(Event::query(), $relations);

        return EventResource::collection(
            $query->latest()->paginate()
        );
    }

    public function show($event)
    {
        $event->load('user', 'attendees');
        return new EventResource($event);
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
            'event' => new EventResource($event),
        ], 201);

        // return new EventResource($event);
    }

    public function update($request, $event)
    {
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

    public function destroy($event)
    {
        $event->delete();
        return response()->json([
            'message' => 'Event deleted successfully.',
        ], 200);
    }
}
