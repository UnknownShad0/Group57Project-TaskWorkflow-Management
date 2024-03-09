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

<style>
    .break-text {
        max-width: 300px;
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    /* Apply vertical alignment to all columns */
    td {
        vertical-align: top;
    }
</style>


<div class="col-md-12">
  <div class="container mt-5">
    <h2>Update a Worker:</h2><br>

    <form action="{{ route('dashboard.updateWorker', ['worker' => $worker])}}" method="POST">
      @csrf
      @method('put')

      {{-- <div class="form-group">
        <label>Project Name:</label><br>
        <select name="proj_name" class="form-control">
          @foreach($projects as $project)
            <option value="{{$project->current_project}}">{{$project->current_project}}</option>
          @endforeach
          </select>
      </div> --}}


      <div class="form-group">
        <label>Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name"  value="{{$worker->name}}" required>
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="name" placeholder="Enter Email"  value="{{$worker->email}}" required>
      </div>


      <div class="form-group">
        <label>Position:</label>
        <input type="text" class="form-control" name="position" placeholder="Enter Position" value="{{$worker->position}}" required>
      </div>
      <br>

      <button type="submit" class="btn btn-primary">Update</button>
    </form>

  </div>
</div>

@endsection

@section('script')
@endsection
