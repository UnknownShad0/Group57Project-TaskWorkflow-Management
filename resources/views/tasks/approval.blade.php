@extends('layouts.master')
<title>Approval</title>

<!-- Container-fluid starts-->
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Approval</h5>
                    </div>
                    <div class="card-body">
                        <div class="form theme-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <form action="{{ route('task.action', ['task' => $tasks->id]) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="projectName"   value="{{ $tasks->project_title ?? "" }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label>Task:</label>
                                        <input class="form-control" name="projectTask" type="text"  value="{{ $tasks->projectTask }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div>
                                        <label>Priority Level:</label>
                                        <input type="text" class="form-control" id="task" name="priority"
                                            value="{{ $tasks->priority }}" disabled>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-2">
                                        <label for="assign">Assigned:</label>
                                        <input type="text" class="form-control" id="assign" name="assign"
                                            value="{{ $tasks->assign }}" disabled>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="deadline">Deadline:</label>
                                        <input type="date" class="form-control" id="deadline" name="deadline"
                                            value="{{ $tasks->deadline }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="deadline">Deadline:</label>
                                        <input type="date" class="form-control" id="deadline" name="deadline"
                                            value="{{ $tasks->deadline }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="submitter">Submitter:</label>
                                        <input type="text" class="form-control" id="submitter" name="submitter"
                                            value="{{$tasks->submitter}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="document">Other:</label><br>
                                        <input type="text" class="form-control" value="{{$tasks->other ?? ""}}" disabled
                                        name="image" accept="*/*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="date">Date:</label>
                                        <input type="date" class="form-control" id="date" name="date" value="{{$tasks->date}}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label for="status">Status:</label>
                                        <select class="form-control" id="status" name="status" >
                                            <option selected disabled>Select Status</option>
                                            <option value="In Progress">In Progress</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Rejected">Rejected</option>
                                        </select>
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
