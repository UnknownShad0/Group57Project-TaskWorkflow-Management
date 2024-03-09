@extends('layouts.master')

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
        <h4>Employees</h4>
        <a href="{{route("employees.create")}}" class="btn btn-primary">Add + </a>
    </div>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($employees as $employee)
              <tr>
                <th>{{ $employee->name }}</th>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone ?? 'N/A' }}</td>
                <td>{{ $employee->address ?? "N/A" }} </td>
                <td>
                  <a href="{{ route("employees.show", $employee->id) }}" class="btn btn-primary btn-xs">Edit</a>
                  {{-- <button class="btn btn-danger btn-xs">Remove</button> --}}
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
