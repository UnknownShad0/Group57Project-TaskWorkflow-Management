<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">z
    <title>Admin</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div>
        @extends('layouts.master')
    </div>
    @section('content')
<br>

<h1 style="font-size: 20px" class="text-center mb-4">Submodules</h1><br>

    <form action="">
    <div class="container text-center card">

        <div class="card-body row">
            <div class="col-md-4">
                <label for="">Project</label>
                <select class="form-control mb-2">
                    @foreach ($projects as $project)
                    <option value="{{$project->id}}" >{{$project->name}}</option>
                    @endforeach
                   
                </select>
            </div>
        </div>
    <div>
        <button type="button" class="btn btn-success mb-4">Send</button>
    </div>
    </div><br>
    </form>

    {{-- <form action="">
        <div class="container text-center card">
    
            <div class="card-body row">
                    <div class="col-md-4">
                    </div>
                <div class="col-md-4">
                    <label for="">Budget Management</label>
                    <select class="form-control mb-1">
                        <option value="option4"></option>
                        <option value="option5">#</option>
                        <option value="option6">#</option>
                    </select>
                </div>

            </div>
        <div>
            <button type="button" id="middlefinger" class="btn btn-success mb-4">Request</button>
        </div>
        </div><br>
    </form>

    <form action="">
        <div class="container text-center card">
    
            <div class="card-body row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <label for=""> Document and Legal Contract</label>
                    <select class="form-control mb-1">
                        <option value="option4"></option>
                        <option value="option5">#</option>
                        <option value="option6">#</option>
                    </select>
                </div>

            </div>
        <div>
            <button type="button" class="btn btn-success mb-4">Request</button>
        </div>
        </div><br>
    </form> --}}

    {{-- <form action="">
        <div class="container text-center card">
    
            <div class="card-body row">
                <div class="col-md-4">
                    <label for=""> Risk Management</label>
                    <select class="form-control mb-1">
                        <option value="option1"></option>
                        @foreach ($asset_inventory as $item)
                        <option value="option2">{{$item}}</option>
                        @endforeach
                       
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Meetings and Calendars</label>
                    <select class="form-control mb-3">
                        <option value="option4"></option>
                        <option value="option5">#</option>
                        <option value="option6">#</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="">Communication and Collaboration</label>
                    <select class="form-control mb-3">
                        <option value="option7"></option>
                        <option value="option8">#</option>
                        <option value="option9">#</option>
                    </select>
                </div>
            </div>
        <div>
            <button type="button" class="btn btn-success mb-4">Request</button>
        </div>
        </div><br>
        </form> --}}
    


   
        @endsection

    <!-- Bootstrap JS and Popper.js CDN (for optional features) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
