<?php require('../connection.php'); ?>
<?php if(isset($_SESSION['signin']) and $_SESSION['signin'] == TRUE) header( 'Location: home.php' ); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sign Up Page</title>
</head>

<body>
	<?php
	if ( !empty( $_POST ) ) {
		// check empty post values and dispaly error 
		if ( empty( $_POST[ 'full_name' ] ) or empty( $_POST[ 'email' ] ) or empty( $_POST[ 'password' ] ) or empty( $_POST[ 'confirm_password' ] ) or empty( $_POST[ 'contact_number' ] ) or empty( $_POST[ 'gender' ] ) or empty( $_POST[ 'blood_group' ] ) ) {
			echo 'Error: Please Enter Info.';
		} else {

			// check username already exist if yes then show error 
			// other wise insert user data
			$sql = "SELECT full_name FROM patient WHERE full_name = '" . $_POST[ 'full_name' ] . "' ";
			$result = $conn->query( $sql ); // database query
			
			if ( $conn->error )echo 'Error: ' . $conn->error; // DB query handler
			else if ( $result->num_rows >= 1 )echo "Error: Please change full_name";
			else {
				$sql = "INSERT INTO patient (full_name, email, password, confirm_password, contact_number, gender, blood_group) VALUES ('" . $_POST[ 'full_name' ] . "', '" . $_POST[ 'email' ] . "', '" . $_POST[ 'password' ] . "', '" . $_POST[ 'confirm_password' ] . "', '". $_POST['contact_number']."', '". $_POST['gender']."', '". $_POST['blood_group']."')";

				if ( $conn->query( $sql ) === TRUE ) {
					//$last_id = $conn->insert_id;
					echo "Your data has been saved. Please wait for admin approval.";
				} else {
					echo "Error: " . $conn->error . "<br>";
				}
			}
			$conn->close();
		}
	}
	?>
	<form id="form1" name="form1" method="post">
		<p>
			<label for="full_name">Full Name:</label>
			<input type="text" name="full_name" id="full_name">
		</p>
		<p>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email">
		</p>
		<p>
			<label for="contact_number">Contact Number:</label>
			<input type="contact_number" name="contact_number" id="contact_number">
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
		</p>
		<p>
			<label for="confirm_password">Confirm Password:</label>
			<input type="confirm_password" name="confirm_password" id="confirm_password">
		</p>
		<p>
			<label for="gender">Gender:</label>
			<input type="gender" name="gender" id="gender">
		</p>
		<p>
			<label for="blood_group">Blood Group:</label>
			<input type="blood_group" name="blood_group" id="blood_group">
		</p>
		<input type="submit" name="submit" id="submit" value="Submit">
	</form>
	<p><a href="index.php">Go back to the index page:</a>
	</p>

</body>

</html>