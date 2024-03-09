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
  <div class="card">
    <div class="card-header">
      <h5>Send Requests </h5>
    </div>
    <div class="card-body custom-input">
      <form class="form-wizard" id="regForm" action="" method="POST">
         @csrf
          <div class="row g-3">
            <div class="">
              <label for="">Project</label>
                <select class="form-control mb-2" name="project_id" disabled>
                    <option value="{{$project->project_id}}" selected>{{$project->projectTitle}}</option>
                </select>
               </div>
               <br>
              <p> This list will be send request to the following Sub-Module</p>
               <ul class="list-group">
                @foreach ($lists as $item)

                <li class="list-group-item d-flex justify-content-between">
                  <div>
                    <i class="icofont icofont-arrow-right"></i>{{ str_replace("_"," ",$item) }}
                  </div>
                  <div class=" {{ $project->$item == null ? "text-danger" : " text-success"  }}"> Status : {{ $project->$item == null ? "Pending" : "On going"  }} </div>
                </li>
                @endforeach

              </ul>
            </div>
            <br>
            {{-- <button type="submit" class="btn btn-success">Send Request</button> --}}
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
@endsection
