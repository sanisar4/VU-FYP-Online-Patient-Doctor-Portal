<?php
require('../connection.php');

// sql to delete a record
$sql = "DELETE FROM doctor WHERE id = ".$_GET['doctor_id'];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
/*header('location:users.php')*/
?>
<br>
<br>
<a href="doctor.php">Back to doctors</a>