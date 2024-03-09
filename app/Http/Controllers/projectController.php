<?php

namespace App\Http\Controllers;

use App\Models\G57Project;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {

        return view('projects.create');
    }

    public function storeProj(Request $request) {


        $data = $request->validate([
                'name' => 'nullable',
                'email' => 'nullable',
                'contactNumber' => 'nullable',
                'projectTitle' => 'nullable',
                'budget' => 'nullable',
                'deadline' => 'nullable',
                'location' => 'nullable',
                'other' => 'required',
        ]);

        G57Project::create($data);
        return redirect(route('admin.pending'));
    }

    public function adminPending() {
        $projects = G57Project::where("is_active",0)->orderBy("id","desc")->get();
        return view('projects.pending', ['projects' => $projects]);
    }



    public function rejectProj(G57Project $project) {

        $project->delete();

        return redirect(route('admin.pending'));
    }

    public function adminRequest() {

        $data = [
            "projects" =>   G57Project::all(),
            "asset_inventory" => [
                "metal",
                "woord",
                "cement"
            ],
            "sub_contractor" => [
                "grand monaco",
                "camella",
            ],
            "suppliers" => [
                "lafarge",
                "wood supplier",
            ],
            "budgetting" => [

            ],
            "document" => [

            ],
        ];

        return view('projects.select',$data);
    }


}