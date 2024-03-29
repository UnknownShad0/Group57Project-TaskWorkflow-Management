@extends('layouts.css')
<link rel="icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-sm.png') }}" type="image/x-icon">
<title>Project</title>


<div class="container">
    <h1 class="mt-5">Edit Dashboard</h1>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="form theme-form">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <form action="{{ route('dashboard.updateProj', ['db' => $db] ) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <label>Ongoing Project:</label>
                                        <input class="form-control" name="current_project" type="text"
                                            placeholder="Project name" value="{{$db->current_project}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Completed Tasks:</label>
                                    <input class="form-control" name="completed_tasks" type="text"
                                        placeholder="No. of completed tasks " value="{{$db->completed_tasks}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label>Incomplete Tasks:</label>
                                    <input class="form-control" name="incomplete_tasks" type="text"
                                        placeholder="No. of incomplete tasks" value="{{$db->incomplete_tasks}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-4">
                              <div class="mb-3">
                                  <label>No. of Tasks:</label>
                                  <input class="form-control" name="total_tasks" type="text"
                                      placeholder="No. of tasks" value="{{$db->total_tasks}}">
                              </div>
                          </div>
                      </div>
                        <div>
                            <button type="submit" class="btn btn-success me-3">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
