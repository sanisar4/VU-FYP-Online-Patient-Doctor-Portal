<?php
require('../connection.php');


$sql = "UPDATE `patient` SET 
	`status` = '".$_GET['status']."' 
    WHERE id = ".$_GET['patient_id'];

if ($conn->query($sql) === TRUE) {
    echo "Status updated successfully";
} else {
    echo "Error updating Status: " . $conn->error;
}

$conn->close();

?>
<br>
<br>
<a href="patient.php">Back to patients</a>
