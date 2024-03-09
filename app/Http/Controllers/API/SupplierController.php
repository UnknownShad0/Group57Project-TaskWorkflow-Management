<?php

namespace App\Http\Controllers\API;

use App\Models\SendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\G57SendRequest;

class SupplierController extends Controller
{

    private $currentColumn = "supplier_vendor";

    public function index()
    {
        $data = DB::table('g57_send_requests as a')
            ->select(
                "b.*",
                "a.*")
            ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
            ->whereNotNull($this->currentColumn)
            ->get();

        return response()->json([
            "type" => "success",
            "message" => "successful fetch the project information",
            "count" => count($data),
            "data" => $data,
        ]);
    }


    public function pending()
    {
        $data = DB::table('g57_send_requests as a')
            ->select("b.*","a.*")
            ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
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
        $row = G57SendRequest::find($id);
        $json = [];

        if(!$row){
            $json["type"] = "error";
            $json["message"] = "successfull update the supplier";

            return response()->json($json);
        }

        $row->update([
            $this->currentColumn => $request->supplier_vendor //7:42 am mar 8
        ]);

        $json["type"] = "success";
        $json["message"] = "successfull update the supplier";
        $json["data"] =  $row;


        return response()->json($json);
    }

    public function show($id){
        $data = DB::table('g57_send_requests as a')
        ->select("b.*","a.*")
        ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
        ->whereNotNull($this->currentColumn)
        ->where("a.id", $id)
        ->get();

        return response()->json([
            "type" => "success",
            "message" => "successful fetch the project information",
            "data" => $data,
        ]);

    }

}
