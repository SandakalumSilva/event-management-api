<?php 
namespace App\Interfaces\Api;

interface AttendeeInterface{
    public function index($event);
    public function store($request,$event);
    public function show($event, $attendee);
    public function destroy($event, $attendee);
}