<?php

namespace App\Repositories\Api;

use App\Http\Resources\AttendeeResource;
use App\Interfaces\Api\AttendeeInterface;

class AttendeeRepository implements AttendeeInterface
{

    public function index($event)
    {
        $attendees = $event->attendees()->latest();
        return AttendeeResource::collection($attendees->paginate(5));
    }

    public function store($request,$event)
    {
        $attendee = $event->attendees()->create([
            'user_id'=> 1
        ]);
        return new AttendeeResource($attendee);
    }

    public function show($event,$attendee)
    {
        return new AttendeeResource($attendee);
    }

    public function destroy($event,$attendee)
    {
       $attendee->delete();
       return response()->json([
           'message' => 'Attendee deleted successfully'
       ],204);
    }
}
