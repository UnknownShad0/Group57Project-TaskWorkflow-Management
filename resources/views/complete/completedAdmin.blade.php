<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Form</title>
    <style>
        form {
            max-width: 400px; /* Adjust the max-width as needed */
            margin: 0 auto; /* Center the form on the page */
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <p>ADMIN/</p>
    <h1>Create a New Project</h1>

    <form action="/submit_project" method="post">

        <label for="projectName">Project Name:</label>
        <input type="text" id="projectName" name="projectName" required>

        <label for="description">Project Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="completionDate">Completion Date:</label>
        <input type="date" id="completionDate" name="completionDate" required>

        <label for="client">Client:</label>
        <input type="text" id="client" name="client" required>

        <button type="submit">Submit to "Project Completed"</button>
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
