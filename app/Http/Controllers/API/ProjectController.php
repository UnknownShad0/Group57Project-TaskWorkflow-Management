<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\G57Project;
use App\Models\Project;
use App\Models\rc;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = G57Project::where("is_active",1)->get();

        return response()->json([
            "type" => "success",
            "message" => "successfull fetch all active project ",
            "data" => $data,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $formData = [
            'name' => $request->name,
            'email' => $request->email,
            'contactNumber' => $request->contactNumber,
            'projectTitle' => $request->projectTitle,
            'budget' => $request->budget,
            'deadline' => $request->deadline,
            'location' => $request->location,
            'other' => $request->other,
            "is_active" => 0,
        ];

        // $formData = $request->validate($formData);
        G57Project::create($formData);
        return response()->json([
            "type" => "success",
            "message" => "successfull created project ",
            "data" => $formData,
        ]);

    }


    public function show(G57Project $project)
    {
        return response()->json([
            "type" => "success",
            "message" => "successfull fetch project ",
            "data" => $project,
        ]);
    }


    public function pending()
    {
        $data = G57Project::where("is_active",0)->get();

        return response()->json([
            "type" => "success",
            "message" => "successfull fetch all pending project ",
            "data" => $data,
        ]);

    }



}
