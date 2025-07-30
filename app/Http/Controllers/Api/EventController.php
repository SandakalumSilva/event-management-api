<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Interfaces\Api\EventInterface;
use App\Models\Event;
use Dotenv\Util\Str;
use Illuminate\Http\Request;

class EventController extends Controller
{

    protected $eventRepository;
    public function __construct(EventInterface $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }
   
    public function index()
    {
        return $this->eventRepository->index();
    }

    public function store(EventRequest $request)
    {
        return $this->eventRepository->store($request);
    }

    public function show(Event $event)
    {
        return $this->eventRepository->show($event);
    }

    public function update(EventRequest $request, Event $event)
    {
        return $this->eventRepository->update($request, $event);
    }

    public function destroy(Event $event)
    {
        return $this->eventRepository->destroy($event);
    }
}
