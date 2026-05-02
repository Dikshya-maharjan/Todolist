<?php
 include 'Database.php';
 $task=$_POST['task'];
 $sql="INSERT INTO tasks(task) VALUES('$task')";
 mysqli_query($conn,$sql);
 header("Location:TodoList.html");
?>