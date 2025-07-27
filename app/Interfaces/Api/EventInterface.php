<?php 
namespace App\Interfaces\Api;

interface EventInterface{
    public function index();
    public function store($request);
    public function show($event);
    public function update($request, $event);
    public function destroy($event);
}