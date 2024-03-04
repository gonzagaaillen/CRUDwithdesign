<?php
include("backend/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tasks</title>
    <link rel="stylesheet" href="css\task.css">
    <link rel="stylesheet" href="css\table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <header>
    <h1>Task Manager</h1>
    <nav class="add-task-button">
      <ul>
        <li><a href="create_task.php" class="rounded-button"><i class="fas fa-plus"></i>Task</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Today's Task</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Due Date</th>
            <th class="icon-cell">Actions</th>
        </tr>
        <?php include("backend/view_task_backend.php");
         foreach ($tasks as $task): ?>
            <tr>
            <td><?php echo $task["id"]; ?></td>
                <td><?php echo $task["title"]; ?></td>
                <td><?php echo $task["description"]; ?></td>
                <td><?php echo $task["priority"]; ?></td>
                <td><?php echo $task["due_date"]; ?></td>
                <td class="icon-cell">
                    <a href="edit_task.php?id=<?php echo $task["id"]; ?> &title=<?php echo $task['title']; ?>&description=<?php echo $task['description']; ?>&due_date=<?php echo $task['due_date']; ?>" class="edit-icon"><i class="fas fa-edit"></i></a>
                    <a href="delete_task.php?id=<?php echo $task["id"]; ?>" class="delete-icon"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
  </main>

  <footer>
    <p>&copy; 2024 Aillen Gonzaga & Ivan Joshua Ladera</p>
  </footer>
</body>
</html>
