<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\cr;
use App\Models\DeveloperProject;
use App\Models\G57Task;
use Illuminate\Http\Request;

class DeveloperProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = DB::table('g57_tasks as a')->get();

        return response()->json([
            "type" => "success",
            "message" => "successfull fetch the project information",
            "count" => count($data),
            "data" => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        G57Task::insert([
            "project_name" => $request->project_name,
            "budget" => $request->budget,
            "status" => 0
        ]);

        return response()->json([
            "type" => true,
            "message" => "Request sent"
        ]);


    }


    public function hasNotification(Request $request)
    {
        $count = G57Task::where('status',0)->count();

        return response()->json([
            "message" => $count
        ]);


    }

}
