<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Project Form</title>
</head>
<body>

<div class="container mt-4">
  <h2>Project Details</h2><br>
  <form action="{{ route('completed.submit',['complete' => $complete])}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="projectName">Project Name:</label>
      <input type="text" name="projectName" class="form-control" id="projectName" placeholder="Enter project name" value="{{$complete->projectName}}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter project description"> {{$complete->description}}</textarea>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="startDate">Start Date:</label>
        <input type="date" name="start" class="form-control" id="startDate" value="{{$complete->start}}">
      </div>
      <div class="form-group col-md-6">
        <label for="endDate">End Date:</label>
        <input type="date" name="end" class="form-control" id="endDate" value="{{$complete->end}}">
      </div>
    </div>
    <div class="form-group">
      <label for="client">Client:</label>
      <input type="text" class="form-control" name="client" id="client" placeholder="Enter client name" value="{{$complete->client}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
