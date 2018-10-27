<?php require('../connection.php'); ?>
<?php if(isset($_SESSION['logedin']) and !$_SESSION['logedin']) header( 'Location: login.php' ); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Patient Management</title>
</head>

<body>
	<div style="float:right">
		<a href="logout.php">Logout</a>
	</div>
	<div style="float:left">
		<a href="add.php">Add</a>
	</div>
	<div style="float: none;clear: both;"></div>
	
	<div class="">
		<h2>All Patients Information</h2>
		<table width="597" border="1" cellpadding="5" cellspacing="2">
				<tr>
					<th width="18" scope="col">ID</th>
					<th width="88" scope="col">Full Name</th>
					<th width="65" scope="col">E-mail</th>
					<th width="88" scope="col">Contact Number</th>
					<th width="65" scope="col">Gender</th>
					<th width="65" scope="col">Blood Group</th>
					<th width="66" scope="col">Status</th>
					<th width="96" scope="col">Your Choice</th>
				</tr>

		<?php 
	
$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>
		<td>'.$row["id"].'</td>
	    <td>'.$row["full_name"].'</td>
        <td>'.$row["email"].'</td>
		<td>'.$row["contact_number"].'</td>
		<td>'.$row["gender"].'</td>
		<td>'.$row["blood_group"].'</td>
		<td>'.$row["status"].'</td>
		<td>
		<a href="delete.php?patient_id='.$row["id"].'&status=delete">Delete</a>
		<a href="update_status.php?patient_id='.$row["id"].'&status=update">Update</a>
		<a href="edit.php?patient_id='.$row["id"].'&status=Edit">Edit</a>
		</td>
      </tr>';
    }
} else {
    echo "0 results";
}
$conn->close();
	
?>
		</table>
	</div>

</body>
</html>