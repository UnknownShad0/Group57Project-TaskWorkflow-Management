<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Worker;
use App\Models\G57Task;
use App\Models\Dbproject;
use App\Models\Submitter;
use App\Models\G57Project;
use App\Models\G57SendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProjectTaskGroup57Dashboard;

class TaskController extends Controller
{
    public function index() {
        $tasks = DB::table("g57_tasks as a")
                ->select("a.*","b.id as project_id","b.projectTitle as project_title")
                ->leftJoin('g57_projects as b', 'a.projectId',"=","b.id")
                ->where("a.projectId","!=",0)
                ->orderBy("a.id","desc")
                ->get();

        return view('tasks.taskIndex', ['tasks' => $tasks]);
    }

    public function create($projectId = null) {

        $projects = DB::table("g57_projects as a")
        ->select("a.id","a.projectTitle")
        ->leftJoin("g57_send_requests as b","a.id","=","b.project_id")
        ->where("b.can_start_task",1)
        ->get();

        return view('tasks.create',[
            'projects' => $projects,
            'workers' => DB::table("g57_workers")->get(),
            'projectId' => $projectId
        ]);

    }
    public function submit(Request $request) {

        $data = $request->validate([
            'projectId' => 'required',
            'projectTask' => 'required',
            'assign' => 'required',
            'priority' => 'required',
            'deadline' => 'required',
        ]);

        G57Task::create($data);
        return redirect(route('task.index'));
    }

    public function edit(G57Task $task) {


        return view('tasks.taskEdit',['tasks' => $task]);
    }

    public function save(G57Task $task, Request $request) {

        $data = $request->validate([

            'submitter' => 'nullable',
            'date' => 'nullable',
            'other' => 'nullable'

        ]);

        if($request->hasFile('image')){
            $destinationPath = 'public/taskImages/';
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destinationPath, $imageName);

            $data['image'] = $imageName;

        }

        $task->update($data);


        return redirect(route('task.index'));
    }

    public function approval($id) {

        $task = DB::table("g57_tasks as a")
        ->select("a.*","b.id as project_id","b.projectTitle as project_title")
        ->leftJoin('g57_projects as b', 'a.projectId',"=","b.id")
        ->where("a.projectId","!=",0)
        ->where("a.id", $id)
        ->first();

        #dd($task);

        return view('tasks.approval',['tasks' => $task]);
    }

    public function action($taskId, Request $request) {

        $data = $request->validate([
            'status' => 'required',
        ]);

        $task = G57Task::find($taskId);
        $task->update($data);
        return redirect(route('task.index'));
    }

    public function destroy( $g57SendRequest) {

        G57Task::find($g57SendRequest)->delete();
        // revert the parent request or project to 0 state
        return redirect()->route('task.index')->with('message', 'Deleted Successfully');
    }

    public function timeline() {
        $data = G57Task::all()->select("id","projectTask","deadline","created_at")->toArray();

        $formated_timeline = array_map(function($row) use($data){
            return [
                "x" => $row['projectTask'],
                "y" => [
                    date('F d, Y', strtotime($row['created_at'])),
                    $row['deadline']

                ]
            ];
        },$data);

        // dd($formated_timeline);

        return view('tasks.timeline');
    }
}
