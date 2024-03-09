<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\G57Project;
use App\Models\G57SendRequest;
use App\Models\G57Task;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function getCalendar(){
        // $data = G57Project::all()->select("id","projectTitle","deadline","other");
        $data = G57Task::all()->select("id","projectTask","deadline","priority");
        return response()->json([
            "type" => "success",
            "data" => $data
        ]);
    }


    public function getCalendarRequests(){
        $data = G57SendRequest::all()->select("id","meetings_calendar");

        $array = [];
        foreach ($data as $key => $d) {
            $array = [
                "id" => $d['id'],
                "date_start" => $d['meetings_calendar'],
                "date_end" => $d['meetings_calendar'],
            ];
        }




        return response()->json([
            "type" => "success",
            "data" => $array
        ]);
    }




}
