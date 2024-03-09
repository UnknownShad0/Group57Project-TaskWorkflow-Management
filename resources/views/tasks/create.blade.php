@extends('layouts.master')
<title>Create Task</title>

<!-- Container-fluid starts-->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Task</h4>
                    </div>
                    <div class="card-body">
                        <div class="form theme-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <form action="{{ route('task.submit') }}" method="post">
                                            @csrf
                                            @method('post')
                                            <label>Project Name:</label><br>
                                            <select class="col-md-12" name="projectId">
                                                @foreach ($projects as $project)
                                                    <option value="{{ $project->id }}" {{ $projectId == $project->id ? "selected" : "" }}>{{ $project->projectTitle }}
                                                    </option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label>Task:</label>
                                        <input class="form-control" name="projectTask" type="text"
                                            data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div>
                                        <label>Priority Level:</label>
                                        <select class="col-md-12" name="priority">
                                            <option value=""></option>
                                            <option value="High">High</option>
                                            <option value="Moderate">Moderate</option>
                                            <option value="Low">Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-2">
                                        <label for="workerSelect">Select Worker/s:</label>
                                        <select class="col-md-12" id="workerSelect" onchange="updateInput()">
                                            <option value="" disabled selected >Select Worker</option>
                                            @foreach ($workers as $worker)
                                                <option value="{{ $worker->name }}">{{ $worker->name }} -
                                                    {{ $worker->position }}</option>
                                            @endforeach
                                            <option value="Everyone">Everyone</option>
                                            <option value="DeselectAll">Deselect All</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="mb-2 col-md-12">
                                        <label for="assignedWorkers">Assigned Workers:</label>
                                        <input type="text" class="form-control" id="assignedWorkers" name="assign">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label>Deadline:</label>
                                        <input class="datepicker-here form-control" name="deadline" type="date"
                                            data-language="en" data-bs-original-title="" title="">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success me-3">Create Task</button>
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

<script>
    function updateInput() {
        // Get the selected value from the dropdown
        var selectedOption = document.getElementById("workerSelect").value;

        // Get the current value of the input field
        var currentAssignedWorkers = document.getElementById("assignedWorkers").value;

        // Handle different options
        if (selectedOption === 'Everyone') {
            // If "Everyone" is selected, add all workers
            document.getElementById("assignedWorkers").value = "Everyone";
        } else if (selectedOption === 'DeselectAll') {
            // If "Deselect All" is selected, clear the input field
            document.getElementById("assignedWorkers").value = "";
        } else {
            // For individual workers, append the selected worker to the input field value
            var updatedValue = currentAssignedWorkers + (currentAssignedWorkers.length > 0 ? ', ' : '') +
                selectedOption;

            // Set the input field value to the updated value
            document.getElementById("assignedWorkers").value = updatedValue;
        }
    }
</script>
