<?php

include "connection.php";

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE from task_table WHERE id = ?");
$stmt->bind_param("i", $id);


if ($stmt->execute()) {
    echo "<script type='text/javascript'>
            alert('Delete completed successfully!');
             window.location.href = 'task_view.php';
          </script>";
} else {
    echo "<script type='text/javascript'>
            alert('Delete completed failed!');
             window.location.href = 'task_view.php';
          </script>";
}

$stmt->close();

?>