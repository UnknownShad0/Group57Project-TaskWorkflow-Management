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
  <div class="card ">
    <div class="card-header">
      <h5>Create Employee </h5>
    </div>
    <div class="card-body custom-input">
      <form action="{{ route("employees.store") }}" method="POST">
        @csrf
        <div class="form-group my-2">
          <label for="">Name</label>
          <input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp" placeholder="Enter Employee Name">
        </div>
        <div class="form-group my-2">
          <label for="">Email address</label>
          <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" placeholder="Enter Employee Email">
        </div>
        <div class="form-group my-2">
          <label for="">Phone</label>
          <input type="text" class="form-control" id="" name="phone" aria-describedby="emailHelp" placeholder="Enter Employee Phone">
        </div>
        <div class="form-group my-2">
          <label for="">Address</label>
          <textarea name="address" id="" class="form-control" cols="2" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
@endsection
