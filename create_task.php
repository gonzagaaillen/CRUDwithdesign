<?php
include("./backend/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" href="css/task.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<header>
    <h1><a href="view_task.php" class="rounded-button"><i class="fa fa-chevron-left"></i></a> Add Task</h1>
</header>
    <form method="POST" action="./backend/create_task_backend.php">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <label for="priority">Priority:</label><br>
        <select id="priority" name="priority" required>
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select><br>
        <label for="due_date">Due Date:</label><br>
        <input type="date" id="due_date" name="due_date" required><br>
        
        <input type="submit" value="Submit" name="submit">
    
    </form>
</body>
</html>
