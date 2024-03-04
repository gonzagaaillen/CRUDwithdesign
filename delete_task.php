<?php
include("./backend/config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_sql = "DELETE FROM tasks WHERE id=$id";
    $result = mysqli_query($conn, $delete_sql);

    if ($result) {
        header("Location: view_task.php");
    } else {
        die(mysqli_error($conn));
    }
}else {
    echo "Data not recevied";
}
?>
