<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Interfaces\Api\EventInterface;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    protected $eventRepository;
    public function __construct(EventInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->eventRepository->index();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        return $this->eventRepository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return $this->eventRepository->show($event);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        return $this->eventRepository->update($request, $event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        return $this->eventRepository->destroy($event);
    }
}
