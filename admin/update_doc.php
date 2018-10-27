<?php
require('../connection.php');


$sql = "UPDATE `doctor` SET 
	`name` = '".$_POST['name']."', `email` = '".$_POST['email']."',
	`contact_number` = '".$_POST['contact_number']."', `password` = '".$_POST['password']."',
	`confirm_password` = '".$_POST['confirm_password']."', `speciality_in` = '".$_POST['speciality_in']."', `gender` = '".$_POST['gender']."'
WHERE id = ".$_POST['doctor_id'];

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
<a href="doctor.php">Back to doctors</a>