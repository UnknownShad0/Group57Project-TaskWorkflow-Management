<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/x-icon">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @extends('layouts.master')


    @section('content')
        <div class="container">
            <header class="text-center bg-primary text-white p-3 rounded rounder-lg" style="color: rgb(80, 95, 226)">
                <h1 style="font-size: 30px">Dashboard</h1>
            </header>

            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="col-sm-2">
                        @if (session()->has('projectsuccess'))
                            <div class="alert alert-info"> {{ session('projectsuccess') }}</div>
                        @endif
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2 style="font-size: 20px">Ongoing Project</h2>
                        </div>
                        <div class="card-body">
                            @foreach ($projects as $project)
                                <div class="row">
                                    <div class="col-md-6">
                                        <strong class="">Project Title:</strong> <br>{{ $project->proj_name }}<br>
                                        <strong class="">Client:</strong><br> {{ $project->cli_name }}<br>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>View Project:</strong><br>
                                        <a href="{{ asset('storage/projectImages/' . $project->image) }}"><u>Click Here to
                                                View Project</u></a><br>
                                        <div>
                                            <strong class="mt-1">Progress:</strong><br>
                                            <a href="{{ route('task.index') }}"><u>Click Here to View Progress</u></a>
                                        </div>
                                    </div>
                                    <form action="{{ route('dashboard.destroyProj', ['dbProject' => $project]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger btn-xs" value="Delete">
                                    </form> <br> <br>

                                </div>
                                <hr>
                            @endforeach
                            <a href="{{ route('dashboard.createProj') }}">Add a Project</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="col-sm-2">
                        @if (session()->has('workersuccess'))
                            <div class="alert alert-info"> {{ session('workersuccess') }}</div>
                        @endif
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2 style="font-size: 20px">Workers</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Project Title</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Position</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workers as $worker)
                                        <tr>
                                            <td>{{ $worker->proj_name }}</td>
                                            <td>{{ $worker->name }}</< /td>
                                            <td>{{ $worker->email }}</td>
                                            <td>{{ $worker->position }}</< /td>
                                            <td><a href="{{ route('dashboard.editWorker', ['worker' => $worker]) }}"
                                                    class="btn btn-primary btn-xs">Edit</a></td>
                                            <td>
                                                <form
                                                    action="{{ route('dashboard.destroyWorker', ['worker' => $worker]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger btn-xs" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="mt-3">
                                <a href="{{ route('dashboard.createWorker') }}">Add a Worker</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-12 mt-5">
                    <div class="col-sm-2">
                        @if (session()->has('completedsuccess'))
                            <div class="alert alert-info"> {{ session('completedsuccess') }}</div>
                        @endif
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2 style="font-size: 20px">Completed Projects</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Project Title</th>
                                        <th>Description</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Client</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($completes as $complete)
                                        <tr>
                                            <td>{{ $complete->projectName }}</td>
                                            <td>{{ $complete->description }}</td>
                                            <td>{{ $complete->start }}</td>
                                            <td>{{ $complete->end }}</td>
                                            <td>{{ $complete->client }}</td>
                                            <td><a href="{{ route('dashboard.edit', ['complete' => $complete]) }}"
                                                    class="btn btn-primary btn-xs">Edit</a></td>
                                            <td>
                                                <form action="{{ route('dashboard.destroy', ['complete' => $complete]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" class="btn btn-danger btn-xs" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="mt-3">
                                <a href="{{ route('dashboard.completed') }}">Add a Completed Project</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div><br>
    @endsection


    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
