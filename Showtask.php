<?php
include 'Database.php';
$result=mysqli_query($conn,'SELECT * FROM tasks');
?>

<h2>Your Tasks</h2>
<?php

while($row=mysqli_fetch_assoc($result)){
    //mysqli_fect_assoc() function is used to fetch a result one at a time
    //using while loop to fetch all the result one by one
    echo $row['task'];
    echo "<br>";
}
?>