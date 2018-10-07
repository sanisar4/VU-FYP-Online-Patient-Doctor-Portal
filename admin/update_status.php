<?php
require('../connection.php');


$sql = "UPDATE `user` SET `status` = '".$_GET['status']."' WHERE id = ".$_GET['user_id'];

if ($conn->query($sql) === TRUE) {
    echo "Status updated successfully";
} else {
    echo "Error updating Status: " . $conn->error;
}

$conn->close();

?>
<br>
<br>
<a href="users.php">Back to users</a>
