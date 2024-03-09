@extends('layouts.master')
<title>Create Project</title>


          <!-- Container-fluid starts-->
          @section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4>Create Project</h4>
      </div>
        <div class="card-body">
          <div class="form theme-form">
            <div class="row">
              <div class="col">
                <div class="mb-3">
          <form action="{{ route('create.storeProj') }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('post')
                  <label>Project Title</label>
                  <input class="form-control" name="projectTitle" type="text" placeholder="Project name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Client name</label>
                  <input class="form-control" name="name" type="text" placeholder="Client Name or Company Name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Contact #</label>
                  <input class="form-control" name="contactNumber" type="text" placeholder="Enter Contact #</" data-bs-original-title="" title="">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Email</label>
                  <input class="form-control" name="email" type="text" placeholder="Enter Email" data-bs-original-title="" title="">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Estimated Budget</label>
                  <input class="form-control" name="budget" type="text" placeholder="Enter project Rate" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Target Deadline</label>
                  <input class="datepicker-here form-control" name="deadline" type="date" data-language="en" data-bs-original-title="" title="">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Location</label>
                  <input class="form-control" name="location" type="text" placeholder="Enter Location" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Enter some Details</label>
                  <textarea name="other" class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
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
          <!-- Container-fluid Ends-->
          @endsection