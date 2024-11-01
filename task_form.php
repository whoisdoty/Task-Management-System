<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="w3.css">
    
    <title>Task Management System</title>
</head>
<body>
    <div class="w3-container w3-display-middle w3-card-4 w3-padding-large w3-black">
        <form action="task_save.php" method="post">
            <h1>Add Task</h1>
            
            <label>Task:</label><br>
            <input type="text" name="task_txt" class="w3-input w3-white" required><br>
            
            
            <button type="submit" name="btn_submit" class="w3-button w3-green">Add Task</button>
            <a class="w3-btn w3-green" href="task_view.php?">View Task</a>
        </form>
    </div>
</body>
</html>
