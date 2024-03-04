<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="./css/task.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <h1><a href="view_task.php" class="rounded-button"><i class="fa fa-chevron-left"></i></a> Edit Task</h1>
    </header>
    <form method="POST" action="./backend/edit_task_backend.php">
        <input hidden name="id" value="<?php echo $_GET['id']; ?>">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $_GET['title']; ?>"><br>
        <label for="description">Description:</label><br>
        <textarea name="description"><?php echo $_GET['description']; ?></textarea><br>
        <label for="priority">Priority:</label><br>
        <select id="priority" name="priority" required value="<?php echo $_GET['priority']; ?>">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select><br>
        <label for="due_date">Due Date:</label><br>
        <input type="date" id="due_date" name="due_date" required value="<?php echo $_GET['due_date']; ?>"><br>
        
        <input type="submit" value="Submit" name="editButton">
    </form>
</body>
</html>
