<?php

include("connection.php");

$task = $_POST["task_txt"];


$stmt = $conn ->prepare("INSERT INTO task_table (task) values (?)");
$stmt ->bind_param("s", $task);

if ($stmt -> execute())
{echo 
    "<script type='text/javascript'>
    alert('Updated successfully!');
    window.location.href = 'task_form.php';
    </script>";
} else 
{echo 
    "<script type='text/javascript'>
    alert('Update failed!');
    window.location.href = 'task_form.php';
    </script>";
}
$stmt -> close();