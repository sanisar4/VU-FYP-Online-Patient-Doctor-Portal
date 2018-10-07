<?php require('../connection.php'); ?>
<?php if(isset($_SESSION['logedin']) and !$_SESSION['logedin']) header( 'Location: login.php' ); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>User Managment</title>
</head>

<body>
	<div style="float:right">
		<a href="logout.php">Logout</a>
	</div>
	<div style="float: none;clear: both;"></div>

	<div class="">
		<h2>New users requests</h2>
		<table width="597" border="1" cellpadding="5" cellspacing="2">
				<tr>
					<th width="18" scope="col">ID</th>
					<th width="88" scope="col">User Name</th>
					<th width="65" scope="col">E-mail</th>
					<th width="66" scope="col">Status</th>
					<th width="96" scope="col">Your Choice</th>
				</tr>

				<?php 
	
$sql = "SELECT * FROM user WHERE `status` = 'pending'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>
		<td>'.$row["id"].'</td>
	    <td>'.$row["username"].'</td>
        <td>'.$row["email"].'</td>
		<td>'.$row["status"].'</td>
		<td><a href="update_status.php?user_id='.$row["id"].'&status=approved">Approved</a> 
		<a href="update_status.php?user_id='.$row["id"].'&status=rejected">Rejected</a></td>
      </tr>';
      
    }
} else {
    echo "There is no new user";
}
	
?>
		</table>
	</div>

	<div class="">
		<h2>All users</h2>
		<table width="597" border="1" cellpadding="5" cellspacing="2">
				<tr>
					<th width="18" scope="col">ID</th>
					<th width="88" scope="col">User Name</th>
					<th width="65" scope="col">E-mail</th>
					<th width="66" scope="col">Status</th>
					<th width="96" scope="col">Your Choice</th>
				</tr>

				<?php 
	
$sql = "SELECT * FROM user WHERE `status` != 'pending'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<tr>
		<td>'.$row["id"].'</td>
	    <td>'.$row["username"].'</td>
        <td>'.$row["email"].'</td>
		<td>'.$row["status"].'</td>
		<td><a href="update_status.php?user_id='.$row["id"].'&status=approved">Approved</a> 
		<a href="update_status.php?user_id='.$row["id"].'&status=rejected">Rejected</a></td>
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