<?php
require('../connection.php');

// sql to delete a record
$sql = "DELETE FROM patient WHERE id = ".$_GET['patient_id'];

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
<a href="patient.php">Back to patients</a>