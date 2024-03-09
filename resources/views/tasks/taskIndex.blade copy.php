@extends('layouts.master')
@section('content')
    
    <div class="container mt-4">
        <h1 style="font-size: 20px" class="m-5"> Assigned Task View</h1> <br>
        <table class="table table-hover" id="myTable">
            <thead>
                <tr class="text-center">
                    <th scope="col">Project Name</th>
                    <th scope="col">Task</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Assigned</th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Submit</th>
                    <th scope="col">Submitter</th>
                    <th scope="col">Others</th>
                    <th scope="col"> Date</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($tasks as $task)
                        <td>{{ $task->projectName }}</td>
                        <td>{{ $task->projectTask }}</td>
                        <td>{{ $task->priority }}</td>
                        <td>{{ $task->assign }}</td>
                        <td>{{ $task->deadline }}</td>
                        <td><a href="{{ route('task.edit', ['task' => $task]) }}" class="btn btn-primary btn-xs">Submit</a>
                        </td>
                        <td>{{ $task->submitter }}</td>
                        <td><a href="{{ asset('storage/taskImages/' . $task->image) }}"><u>{{ $task->image }}</u></a><br>
                            </a></td>
                        <td>{{ $task->date }}</td>
                        <td><a href="{{ route('task.approval', ['task' => $task]) }}"
                                class="btn btn-success btn-xs ">Approve/Reject</a></td>
                        <td class="status-cell">{{ $task->status }}</td>
                        <td>
                            <form action="{{ route('task.destroy', ['task' => $task]) }}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn-xs" type="submit" value="remove">
                            </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>



        <div class="progress-container">
            <div class="progress text-center">
                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="100">
                    <span class="progress-bar-text">0%</span>
                </div>
            </div><br>

        </div>






        <p><a href="{{ route('taskAdmin.create') }}">Create New Task</a></p>
    </div>
@endsection
