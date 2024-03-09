@extends('layouts.css')
<link rel="icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<title>Completed</title>

         

<div class="container">
  <h1 class="mt-5">Project Details</h1>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="form theme-form">
            <div class="row">
              <div class="col">
                <div class="mb-3">
          <form action="{{ route('completed.store') }}" method="post">
              @csrf
              @method('post')
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Project Name:</label>
                  <input class="form-control" name="projectName" type="text" placeholder="Name client or company name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Description:</label>
                  <input class="form-control" name="description" type="text" placeholder="Name client or company name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="mb-3">
                  <label>Start Date:</label>
                  <input class="form-control" name="start" type="date" placeholder="Name client or company name" data-bs-original-title="" title="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3">
                  <label>End Date:</label>
                  <input class="form-control" name="end" type="date" placeholder="Name client or company name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Client:</label>
                  <input class="form-control" name="client" type="text" placeholder="Name client or company name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
              <div>
                  <button type="submit" class="btn btn-success me-3">Add</button>
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
     