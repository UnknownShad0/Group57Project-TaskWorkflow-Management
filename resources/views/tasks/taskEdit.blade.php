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


<div class="container">
  <h1 class="mt-5"> Submit a Task </h1>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="form theme-form">
            <div class="row">
              <div class="col">
                <div class="mb-3">
          <form action="{{ route('task.save', ['task' => $tasks])}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('put')
                  <label>Submitter:</label>
                  <input class="form-control" name="submitter" type="text" placeholder="Name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>

            <div class="row">
                <div class="">
                  <div class="mb-3">
                    <label>Other Details:</label>
                    <input type="text" class="form-control" name="other" required>
                  </div>
                </div>
              </div>


            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Date:</label>
                  <input class="form-control" name="date" type="date" placeholder="Name client or company name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>

            </div>
                <button type="submit" class="btn btn-success me-3">Submit</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')
@endsection
