<?php

namespace App\Http\Controllers;

use App\Models\G57Project;
use App\Models\G57SendRequest;
use App\Models\Project;
use App\Models\SendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SendRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = DB::table('g57_send_requests as a')
        ->select("b.*","a.*")
        ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
        ->orderBy("a.id","desc")
        ->get();

        // dd($projects);

        return view("send-request.index",[
            "projects" => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $projects = G57Project::where("is_active",0)->get();
        return view("send-request.create",['projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'project_id' => 'required'
        ]);

        $project = G57Project::find($data)->first();
        $project->update([
            "is_active" => 1
        ]);

        G57SendRequest::create($data);

        // set to is_active = 1 when created request

        return redirect()->route('send-request.index')->with("message","Success sent Request");
    }

    /**
     * Display the specified resource.
     */
    public function show( $projectId)
    {
        // $G57Project = G57Project::find($projectId);
        // dd($G57Project);

        $project = DB::table('g57_send_requests as a')
        ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
        ->select("b.*","a.*")
        ->where("b.id", $projectId)
        ->first();

        $data = [
            "projects" => G57Project::all(),
            "project" => $project,
            "lists" => [
                "asset_inventory",
                "supplier_vendor",
                "subcontractor",
                "budgeting_financial",
                "facility_management",
                "legal_contract",
                "risk",
                "communication_collab",
                "meetings_calendar",
            ]
        ];
        return view("send-request.show",$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SendRequest $sendRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SendRequest $sendRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sendRequest = G57SendRequest::find($id);
        // update project to inactive when delete
        $projectId = $sendRequest->project_id;
        $project = G57Project::find($projectId);
        $project->update([
            "is_active" => 0
        ]);
        //delete send request
        $sendRequest->delete();
        return redirect()->route('send-request.index')->with("message","Success delete request");

    }
}
