<!-- add task -->
<?php
 include 'Database.php';
 if(isset($_POST['submit'])){
 $task=$_POST['task'];
 $sql="INSERT INTO tasks(tasks) VALUES('$task')";
 mysqli_query($conn,$sql);
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TodoList.css">
    <title>Document</title>
</head>
<body>
    <form method="post">

        <input type="text" name="task" placeholder="enter your task" id="task">
        <button type="submit" name="submit"onClick="addTask()">Add Task</button>
        <ul id="taskList">
            <!-- Tasks will be added here -->
             </ul>
             <?php
$result=mysqli_query($conn,'SELECT * FROM tasks');
?>

<h2>Your Tasks</h2>

<!-- showtask.php -->
<?php

while($row=mysqli_fetch_assoc($result)){
    //mysqli_fect_assoc() function is used to fetch a result one at a time
    //using while loop to fetch all the result one by one
    echo $row['tasks'];
    echo "<br>";
}
?>
</form>
             
</body>
</html>
