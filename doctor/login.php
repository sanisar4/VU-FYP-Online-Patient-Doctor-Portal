<?php require('../connection.php'); ?>
<?php if(isset($_SESSION['login']) and $_SESSION['login'] == TRUE) header( 'Location: home.php' ); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Doctor login Page</title>
</head>

<body>

<?php
if(!empty($_POST))
{
	if(!empty($_POST['email']) and !empty($_POST['password']))
	{
		$sql = "SELECT status FROM doctor WHERE email = '".$_POST['email']."' and password = '".$_POST['password']."' ";

		$result = $conn->query($sql);
		if ($conn->error) echo 'Error: '.$conn->error;
    	else if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			if($row["status"] == 'pending') echo 'User request is pending.';
			else if($row["status"] == 'rejected') echo 'User request is rejected by admin.';
			else if($row["status"] == 'approved') {
				$_SESSION['login'] = TRUE;
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
			<label for="email">Email address:</label>
			<input type="email" name="email" id="email">
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