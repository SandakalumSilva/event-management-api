<?php 
namespace App\Repositories\Api;

use App\Interfaces\Api\AttendeeInterface;

class AttendeeRepository implements AttendeeInterface{
    
    public function check(){
        return response()->json([
            'msg' => 'Test msg',
            'code' => '200'
        ]);
    }
}