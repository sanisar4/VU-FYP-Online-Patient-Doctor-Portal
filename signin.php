<?php require('connection.php'); ?>
<?php if(isset($_SESSION['signin']) and $_SESSION['signin'] == TRUE) header( 'Location: home.php' ); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sign in Page</title>
</head>

<body>

<?php
if(!empty($_POST))
{
	if(!empty($_POST['username']) and !empty($_POST['password']))
	{
		$sql = "SELECT status FROM user WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."' ";

		$result = $conn->query($sql);
		if ($conn->error) echo 'Error: '.$conn->error;
    	else if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			if($row["status"] == 'pending') echo 'User request is pending.';
			else if($row["status"] == 'rejected') echo 'User request is rejected by admin.';
			else if($row["status"] == 'approved') {
				$_SESSION['signin'] = TRUE;
			    $_SESSION['client_id'] = $row['id'];
				header( 'Location: home.php' );
			}
		} else {
    		echo "Error: Username does not match with the records in database <br>";
			//exit;
		}
		$conn->close();
	}
	else{
		echo 'Error: Please Enter Info.';
	}
}
?>
	<form id="form1" action="" name="form1" method="post">
		<p>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username">
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
		</p>
		<input type="submit" name="submit" id="submit" value="Submit">
	</form>
	<p><a href="index.php">Go back to the index page:</a>
	</p>
	
	
</body>
</html>