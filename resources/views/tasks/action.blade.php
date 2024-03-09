<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form action="/task.html" method="post" enctype="multipart/form-data">
    <label for="submitter">Status:</label>
    <select id="status" name="status" required>
        <option value="pending">Pending</option>
        <option value="approved">Approved</option>
        <option value="rejected">Rejected</option>
      </select>
      

    <button type="submit">Save</button>
</form>

<div>
    <a href="login.html">Login</a><br>
    <a href="dashboard.html">Dashboard</a><br>
    <a href="create.html">Create a Project</a><br>
    <a href="projects.html">Projects/ Pending</a><br>
    <a href="select.html">Sub-systems</a><br>
    <a href="projectAdmin.html">Admin Create Task</a><br>
    <a href="task.html">Task Section</a> <br>
    <a href="taskEdit.html">User Submit/Edit</a><br>
    <a href="action.html">Admin/Client Action</a><br>
    <a href="completedAdmin.html">Admin Create Completed Projects</a><br>
    <a href="completed.html">Completed Projects</a><br>
</div>

</body>
</html>
