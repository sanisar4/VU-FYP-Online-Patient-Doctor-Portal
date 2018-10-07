<?php require('../connection.php'); ?>
<?php if(isset($_SESSION['logedin']) and $_SESSION['logedin'] == TRUE) header( 'Location: users.php' ); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Admin Signin Page</title>
</head>

<body>

	<?php
	if ( !empty( $_POST ) ) {
		if ( !empty( $_POST[ 'username' ] )and!empty( $_POST[ 'password' ] ) ) {
			$sql = "SELECT * FROM admin WHERE username = '" . $_POST[ 'username' ] . "' and password = '" . $_POST[ 'password' ] . "' ";

			$result = $conn->query( $sql );
			if ( $conn->error )echo 'Error: ' . $conn->error;
			else if ( $result->num_rows == 1 ) {
				$row = $result->fetch_assoc();
				$_SESSION[ 'logedin' ] = TRUE;
				$_SESSION[ 'user_id' ] = $row[ 'id' ];

				header( 'Location: users.php' );
			} else {
				echo "Error: Username does not match with the records in database <br>";

			}
			$conn->close();
		} else {
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


</body>

</html>