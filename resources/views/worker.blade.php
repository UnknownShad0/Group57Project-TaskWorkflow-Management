@extends('layouts.css')
<link rel="icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('assets/images/logo/logo-sm.png')}}" type="image/x-icon">
<title>Worker</title>


<div class="container">
    <h1 class="mt-5"> Add a Worker</h1>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="form theme-form">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <form action="{{ route('dashboard.addWorker') }}" method="post">
                                        @csrf
                                        @method('post')
                                        {{-- <label>Project Name:</label><br>
                                        <select name="proj_name">
                                            @foreach ($projects as $project)
                                                <option value="{{ $project->projectTitle }}">{{ $project->projectTitle }}
                                                </option>
                                            @endforeach
                                        </select> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Name:</label>
                                    <input class="form-control" name="name" type="text" placeholder="Name"
                                        data-bs-original-title="" title="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Email:</label>
                                    <input class="form-control" name="email" type="text"
                                        placeholder="ex.juan@gmail.com" data-bs-original-title="" title="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label>Position:</label>
                                    <input class="form-control" name="position" type="text" placeholder="Position"
                                        data-bs-original-title="" title="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success me-3">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
