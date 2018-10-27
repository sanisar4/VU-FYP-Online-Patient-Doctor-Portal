<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
	
require('../connection.php');

	
$sql = "SELECT * FROM patient WHERE id = ".$_GET['patient_id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "0 results";
}
$conn->close();
	
?>
<div> 
<form action="update.php" method="post">
	<input type="hidden" name="patient_id" value="<?php echo $_GET['patient_id']?>">
	<p><label for="full_name">Full Name:</label>
	<input type="text" name="full_name" value="<?php echo $row["full_name"]?>"></p>
	<p><label for="email">Email:</label>
	<input type="email" name="email" value="<?php echo $row["email"]?>"></p>
	<p><label for="contact_number">Contact Number:</label>
	<input type="contact_number" name="contact_number" value="<?php echo $row["contact_number"]?>"></p>
	<p><label for="password">Password:</label>
	<input type="password" name="password" value="<?php echo $row["password"]?>"></p>
	<p><label for="confirm_password">Confirm Password:</label>
	<input type="confirm_password" name="confirm_password" value="<?php echo $row["confirm_password"]?>"></p>
	<p><label for="gender">Gender:</label>
	<input type="gender" name="gender" value="<?php echo $row["gender"]?>"></p>
	<p><label for="blood_group">Blood Group:</label>
	<input type="blood_group" name="blood_group" value="<?php echo $row["blood_group"]?>"></p>
	<input type="submit">
</form>
</div>


</body>
</html>