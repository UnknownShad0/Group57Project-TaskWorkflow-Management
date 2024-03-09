<?php

namespace App\Http\Controllers;

use App\Models\Complete;
use App\Models\DbProject;
use App\Models\G57Project;
use App\Models\G57Task;
use App\Models\Project;
use App\Models\ProjectTaskGroup57Dashboard;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Queue\Worker as QueueWorker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $workers = DB::table('g57_workers')->get();
        $dashboard = ProjectTaskGroup57Dashboard::all();
        $ongoing_project = DB::table('g57_send_requests as a')
                            ->select("b.*","a.*")
                            ->leftJoin('g57_projects as b', 'a.project_id', '=', 'b.id')
                            ->where("a.can_start_task",1)
                            ->groupBy("a.project_id")
                            ->get();

        $completed_tasks = DB::table("g57_tasks")->where("status","Completed")->count();
        $incomplete_tasks = DB::table("g57_tasks")
                            ->where("status","!=","Completed")
                            ->orWhere("status","=",null)
                            ->count();
        $total_tasks = DB::table("g57_tasks")->count();
        $res = DB::table('g57_projects as a')
                ->leftJoin('g57_tasks as b', 'a.id', '=', 'b.projectId')
                ->where("b.projectId", "!=", null)
                ->groupBy("b.projectId")
                ->get()->toArray();

        $projects_progress = array_map(function($row) use($res) {
            return [
                "project_title" => ucwords($row->projectTitle),
                "progress" =>  $this->computeProgressPercentage($row->projectId),
            ];
        },$res);

        $project_title = array_column($projects_progress,"project_title");
        $project_progress = array_column($projects_progress,"progress");

        return view('admin.index',[
            "ongoing_project" => count($ongoing_project),
            "completed_tasks" => $completed_tasks,
            "incomplete_tasks" => $incomplete_tasks,
            "total_tasks" => $total_tasks,
            'workers' => $workers,
            'projects_progress' => $projects_progress,
            'project_title' => $project_title,
            'project_progress' => $project_progress
        ]);
    }

    public function computeProgressPercentage($projectId){
        $countCompleted = G57Task::where("projectId", $projectId)->where("status","Completed")->count();
        $countNotCompleted = G57Task::where("projectId", $projectId)->where("status","!=","Completed")->count();

        $total = $countCompleted + $countNotCompleted;
        if($total > 0){
            $ratio = 100/$total * $countCompleted;
        }else{
            $ratio = 0;
        }
        return round($ratio);

    }


    public function createProj()
    {
        return view('createProj');
    }

    public function addProj(Request $request)
    {
        $data = $request->validate([
            'current_project' => 'required',
            'completed_tasks' => 'required',
            'incomplete_tasks' => 'required',
            'total_tasks' => 'required',
        ]);

        $newData = ProjectTaskGroup57Dashboard::create($data);
        return redirect(route('dashboard.index'))->with('projectsuccess', 'Project Added Successfully');
    }

    public function editProj(ProjectTaskGroup57Dashboard $db)
    {

        return view('editProj', ['db' => $db]);
    }

                    // public function editDb(Worker $worker)
                    // {
                    //     $projects = ProjectTaskGroup57Dashboard::all();

                    //     return view('workerEdit', ['worker' => $worker,
                    //                             'projects' => $projects]);
                    // }

                    public function updateProj(ProjectTaskGroup57Dashboard $db, Request $request)
                    {
                        $data = $request->validate([
                            'current_project' => 'nullable',
                            'completed_tasks' => 'nullable',
                            'incomplete_tasks' => 'nullable',
                            'total_tasks' => 'nullable',
                        ]);

                        $db->update($data);
                        return redirect(route('dashboard.index'));
                    }

    // public function destroyProj(DbProject $dbProject)
    // {
    //     $dbProject->delete();

    //     return redirect(route('dashboard.index'))->with('projectsuccess', 'Project Deleted Successfully');
    // }

    ///////////////////////////////////////////////////////////worker

    public function createWorker()
    {
       # $projects = ProjectTaskGroup57Dashboard::all();
        $projects = G57Project::all();
        return view('worker', ['projects' => $projects]);
    }

    public function addWorker(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'position' => 'required'
        ]);

        DB::table('g57_workers')->insert($data);
        // $newData = Worker::create($data);
        return redirect(route('dashboard.index'))->with('workersuccess', 'Worker Added successfully');
    }

    public function editWorker(Worker $worker)
    {
        $projects = ProjectTaskGroup57Dashboard::all();
        return view('workerEdit', [
            'worker' => $worker,
            'projects' => $projects
        ]);
    }

    public function updateWorker(Worker $worker, Request $request)
    {
        $data = $request->validate([
            'proj_name' => 'required',
            'name' => 'required',
            'position' => 'required'
        ]);

        $worker->update($data);
        return redirect(route('dashboard.index'))->with('workersuccess', 'Worker Updated successfully');
    }

    public function destroyWorker(Worker $worker)
    {
        $worker->delete();

        return redirect(route('dashboard.index'))->with('workersuccess', 'Worker Deleted successfully');
    }
}


                            //     public function completed()
                            //     {
                            //         return view('completed');
                            //     }

                            //     public function store(Request $request)
                            //     {
                            //         $data = $request->validate([
                            //             'projectName' => 'required',
                            //             'description' => 'required',
                            //             'start' => 'required',
                            //             'end' => 'required',
                            //             'client' => 'required'
                            //         ]);

                            //         $newData = Complete::create($data);
                            //         return redirect(route('dashboard.index'))->with('completedsuccess', 'Added Successfully');
                            //     }

                            //     public function edit(Complete $complete)
                            //     {
                            //         return view('edit', ['complete' => $complete]);
                            //     }

                            //     public function submit(Complete $complete, Request $request)
                            //     {
                            //         $data = $request->validate([
                            //             'projectName' => 'required',
                            //             'description' => 'required',
                            //             'start' => 'required',
                            //             'end' => 'required',
                            //             'client' => 'required',
                            //         ]);

                            //         $complete->update($data);
                            //         return redirect(route('dashboard.index'))->with('completedsuccess', 'Updated successfully');
                            //     }

                            //     public function destroy(Complete $complete)
                            //     {
                            //         $complete->delete();

                            //         return redirect(route('dashboard.index'))->with('completedsuccess', 'Deleted Successfully');
                            //     }
                            // }
