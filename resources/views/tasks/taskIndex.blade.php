@extends('layouts.master')
<title>Tasks</title>

@section('title', 'Default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Default</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item active">Default</li>
@endsection

@section('content')
    <div class="col-md-12">

        @if (Session::has('message'))
            <div class="alert alert-success">
                <ul>
                    <li>{{ Session::get('message') }}</li>
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header " style="display: flex; justify-content:space-between;">
                <h4>Task List</h4>
                <a href="{{ route('taskAdmin.create') }}" class="btn btn-primary">Create Task + </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Task No.</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Task</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Assigned</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Details</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($tasks as $key => $task)
                            <tr>
                                <td>{{ $task->project_title }}</td>
                                <td>{{ $task->projectTask }}</td>
                                <td>{{ $task->priority }}</td>
                                <td>{{ $task->assign }}</td>
                                <td>{{ $task->deadline }}</td>
                                <td>{{ $task->other }}</td>
                                <td>{{ $task->status }}</td>

                                <td >
                                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-xs d-inline">Submit</a>
                                    <a href="{{ route('task.approval', $task->id) }}"  class="btn btn-success btn-xs d-inline ">Approve/Reject</a>
                                    <form action="{{ route('task.destroy', $task->id) }}" method="post"
                                        class="mt-2  d-inline">
                                        @csrf
                                        @method('delete')
                                        <input class="btn-xs btn btn-danger" type="submit" value="remove">
                                    </form>
                                <td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection



@section('script')
@endsection
