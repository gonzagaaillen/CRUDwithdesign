<?php
include("./config.php");
 
if (isset($_POST['editButton'])) {
    $id = $_POST['id']; 
    $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $due_date = $_POST['due_date'];

}else {
    echo "No data received";
}

$query = "UPDATE tasks SET title='$title', description='$description', priority='$priority', due_date='$due_date' WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        echo "Task updated successfully!";
        header("Location: ../view_task.php");
    } else {
        echo "Error updating task: " . mysqli_error($conn);
    }

?>
