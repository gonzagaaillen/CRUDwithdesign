<?php
include("config.php");

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $due_date = $_POST["due_date"];

    $create_sql = "INSERT INTO tasks (title, description, priority, due_date) VALUES ('$title', '$description', '$priority', '$due_date')";
    $result = mysqli_query($conn, $create_sql);

    if($result) {

        echo "Success";

        header("Location: ../view_task.php");
    }else{
        echo "Failed creating task"  . mysqli_error($conn);
    }
}
?>