<?php
include ("connection.php");
$stmt = $conn->prepare("SELECT * FROM task_table");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task View </title>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="w3-container w3-black w3-centered">
        
        <h2>Added Task</h2>
        <a class="w3-btn w3-green w3-display-top-left" href="task_form.php?">Add Task</a>
        <table class="w3-table w3-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Task</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['task']; ?></td>
                        <td>
                            <a class="w3-btn w3-red" href="task_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            <a class="w3-btn w3-green" href="task_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>