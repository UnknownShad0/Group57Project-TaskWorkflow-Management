<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("employee.index",[
            "employees" => \App\Models\User::where("userType", "!=","admin")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("employee.create",[
            "employees" =>""
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "userType" => "user",
            "phone" => $request->phone,
            "address" => $request->address,
            "password" => Hash::make('password')
        ]);

        return redirect()->route("employees.index")->with("message","Succesfully created");

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view("employee.show",[
            "employee" => User::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        User::find($id)->update($request->all());
        return redirect()->route("employees.index")->with("message","Succesfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
