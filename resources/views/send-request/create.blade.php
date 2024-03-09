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
      <h5>Send Requests </h5>
    </div>
    <div class="card-body custom-input">
      <form class="form-wizard" id="regForm" action="{{ route("send-request.store") }}" method="POST">
         @csrf
          <div class="row 12-3">
            <div class="">
              <label for="">Project</label>
                <select class="form-control mb-2" name="project_id">
                    @foreach ($projects as $project)
                    <option value="{{$project->id}}">{{$project->projectTitle}}</option>
                    @endforeach
                </select>
               </div>
               <br>
              <p> This list will be send request to the following Sub-Module</p>
               <ul class="list-group">

                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>asset_inventory</li>
                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>supplier_vendor</li>
                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>subcontractor</li>
                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>budgeting_financial</li>
                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>facility_management</li>
                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>legal_contract</li>
                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>risk</li>
                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>communication_collab</li>
                <li class="list-group-item"> <i class="icofont icofont-arrow-right"></i>meetings_calendar</li>


              </ul>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Send Request</button>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
@endsection
