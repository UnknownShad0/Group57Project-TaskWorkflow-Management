<?php

namespace App\Http\Controllers\API;

use App\Models\SendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\G57Task;

class TaskListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('g57_tasks as a')
            ->select("b.*","a.*")
            ->leftJoin('g57_projects as b', 'a.projectId', '=', 'b.id')
            ->where("projectId","!=",0)
            ->get();

        return response()->json([
            "type" => "success",
            "message" => "successful fetch all tasks",
            "count" => count($data),
            "data" => $data,
        ]);
    }

}
