<?php


include "connection.php";

$task = $_POST['task_txt'];
$id = $_POST['id'];


$stmt = $conn->prepare("UPDATE task_table SET task= ? WHERE id=?");

$stmt->bind_param("si", $task, $id);
if ($stmt->execute()) {
    echo "<script type='text/javascript'>
            alert('Updated successfully!');
             window.location.href = 'task_view.php';
          </script>";
} else {
    echo "<script type='text/javascript'>
            alert('Update failed!');
             window.location.href = 'task_edit.php';
          </script>";
}
$stmt->close();


?>