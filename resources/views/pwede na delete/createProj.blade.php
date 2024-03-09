@extends('layouts.css')
<link rel="icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<title>Project</title>
         

<div class="container">
  <h1 class="mt-5"> Add a Project</h1>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="form theme-form">
            <div class="row">
              <div class="col">
                <div class="mb-3">
          <form action="{{ route('dashboard.addProj') }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('post')
                  <label>Project Name:</label>
                  <input class="form-control" name="proj_name" type="text" placeholder="Project name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label>Client name:</label>
                  <input class="form-control" name="cli_name" type="text" placeholder="Name client or company name" data-bs-original-title="" title="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>Choose File:</label>
                  <input type="file" class="form-control" name="image" required>
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
     

