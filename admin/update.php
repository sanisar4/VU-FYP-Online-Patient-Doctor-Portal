<?php
require('../connection.php');


$sql = "UPDATE `patient` SET 
	`full_name` = '".$_POST['full_name']."', `email` = '".$_POST['email']."',
	`contact_number` = '".$_POST['contact_number']."', `password` = '".$_POST['password']."',
	`confirm_password` = '".$_POST['confirm_password']."', `gender` = '".$_POST['gender']."', `blood_group` = '".$_POST['blood_group']."'
WHERE id = ".$_POST['patient_id'];

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
/*header('location:index.php')*/
?>
<br>
<br>
<a href="patient.php">Back to patients</a>