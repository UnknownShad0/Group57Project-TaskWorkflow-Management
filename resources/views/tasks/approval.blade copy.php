<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <form action="{{ route('task.action',['task' => $tasks]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="projectName" value="{{$tasks->projectName}}">
        </div>

        <div class="form-group">
            <label for="task">Task:</label>
            <input type="text" class="form-control" id="task" name="projectTask" value="{{$tasks->projectTask}}" >
        </div>

        <div class="form-group">
            <label>Priority:</label><br>
           <select name="priority">   
              <option value="High">High</option>
              <option value="Moderate">Moderate</option>
              <option value="Low">Low</option>
            </select>
          </div>

        <div class="form-group">
            <label for="assign">Assign:</label>
            <input type="text" class="form-control" id="assign" name="assign" value="{{$tasks->assign}}" >
        </div>

        <div class="form-group">
            <label for="deadline">Deadline:</label>
            <input type="date" class="form-control" id="deadline" name="deadline" value="{{$tasks->deadline}}">
        </div>

        <div class="form-group">
            <label for="submitter">Submitter:</label>
            <input type="text" class="form-control" id="submitter" name="submitter" value="{{$tasks->submitter}}">
        </div>

        <div class="form-group">
            <label for="document">Documents:</label>
            <input type="text" class="form-control-file" value="{{$tasks->image}}"  name="image" accept="*/*">
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{$tasks->date}}">
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status" value="{{$tasks->status}}">
                <option value=""> </option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
                <option value="Rejected">Rejected</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
