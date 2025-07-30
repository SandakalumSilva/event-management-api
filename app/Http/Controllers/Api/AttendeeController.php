<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\Api\AttendeeInterface;
use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    protected $attendeeRepository;
    public function __construct(AttendeeInterface $attendeeRepository)
    {
        $this->attendeeRepository = $attendeeRepository;
    }
    public function index(Event $event)
    {
        return $this->attendeeRepository->index($event);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Event $event)
    {
        return $this->attendeeRepository->store($request,$event);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event,Attendee $attendee)
    {
        return $this->attendeeRepository->show($event,$attendee);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $event,Attendee $attendee)
    {
        return $this->attendeeRepository->destroy($event,$attendee);
    }
}
