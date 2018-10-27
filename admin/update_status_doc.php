<?php
require('../connection.php');


$sql = "UPDATE `doctor` SET 
	`status` = '".$_GET['status']."' 
    WHERE id = ".$_GET['doctor_id'];

if ($conn->query($sql) === TRUE) {
    echo "Status updated successfully";
} else {
    echo "Error updating Status: " . $conn->error;
}

$conn->close();

?>
<br>
<br>
<a href="doctor.php">Back to doctors</a>
