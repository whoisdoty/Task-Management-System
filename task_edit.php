<?php

include "connection.php";

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM task_table WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="w3.css">
    <title>EDIT TASK</title>
</head>

<body>
<div class =" w3-container w3-display-middle w3-card-4 w3-padding-large w3-black"> 
    <form method="POST" action="task_edit_save.php">
        <?php
        $row = $result->fetch_assoc()
            ?>
        <input type="hidden" class="w3-input" name="id" value="<?php echo $_GET['id']; ?>">

        <label for="">Task</label>
        <input type="text" class="w3-input" name="task_txt" value="<?php echo $row['task']; ?>"
            placeholder="<?php echo $row['task']; ?>">
        <br>
        <button class="w3-btn w3-blue w3-input" type="submit" name="btn-update">Update Task</button>
    </form>
</div>
</body>

</html>