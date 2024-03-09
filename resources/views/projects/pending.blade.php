@extends('layouts.master')
<title>Pending</title>

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
                <h4>Pending Projects</h4>
                <a href="{{ route('create.index') }}" class="btn btn-primary">Create + </a>
            </div>
            <div class="table-responsive text-center">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th>Project Title</th>
                            <th>Client</th>
                            <th>Email</th>
                            <th>Contact #</th>
                            <th>Estimated Budget</th>
                            <th>Target Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                                <td>{{ $project->projectTitle}}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->email }}</td>
                                <td>{{ $project->contactNumber }}</td>
                                <td>{{ $project->budget }}</td>
                                <td>{{ $project->deadline }}</td>
                                <td class="d-flex justify-between">
                                    <a href="http://127.0.0.1:8000/send-request/create"><button class="btn btn-success btn-xs">Request</button></a>
                                    <form action="{{ route('admin.rejectProj', ['project' => $project]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-xs">Reject</button>
                                    </form>
                                </td>
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
