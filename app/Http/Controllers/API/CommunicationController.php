<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\G57SendRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CommunicationController extends Controller
{
    private $notNullColumns = [
        "supplier_vendor",
        "asset_inventory",
        "subcontractor",
        "budgeting_financial",
        "facility_management",
        "legal_contract",
        "risk",
    ];

    private $currentColumn = "communication_collab";

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = DB::table('g57_send_requests as a')
            ->select("b.*","a.*")
            ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
            ->whereNotNull($this->notNullColumns)
            ->whereNotNull($this->currentColumn)
            ->get();

        return response()->json([
            "type" => "success",
            "message" => "successfull fetch the project message",
            "count" => count($data),
            "data" => $data,
        ]);
    }

    public function pending()
    {
        $data = DB::table('g57_send_requests as a')
            ->select("b.*","a.*")
            ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
            ->whereNotNull($this->notNullColumns)
            ->whereNull($this->currentColumn)
            ->get();

        return response()->json([
            "type" => "success",
            "message" => "successful fetch the project information",
            "count" => count($data),
            "data" => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // validation only for field of inventory
        $row = G57SendRequest::find($id);
        $json = [];

        if(!$row){
            $json["type"] = "error";
            $json["message"] = "resources not found please try again";
            return response()->json($json);
        }

        $row->update([
            $this->currentColumn => $request->{$this->currentColumn}
        ]);

        $json["type"] = "success";
        $json["message"] = "successfully update data";
        $json["data"] = $row;


        return response()->json($json);
    }

    public function show($id){

         $data = DB::table('g57_send_requests as a')
         ->select("b.*","a.*")
         ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
         ->whereNotNull($this->notNullColumns)
         ->whereNotNull($this->currentColumn)
         ->where("a.id", $id)
         ->get();

        return response()->json([
            "type" => "success",
            "message" => "successfull fetch the project message",
            "count" => count($data),
            "data" => $data,
     ]);


    }
}
