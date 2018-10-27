<?php require('../connection.php'); ?>
<?php if(isset($_SESSION['logedin']) and !$_SESSION['logedin']) header( 'Location: login.php' ); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
    if ( !empty( $_POST ) ) {
		// check empty post values and dispaly error 
		if ( empty( $_POST[ 'date' ] ) or empty( $_POST[ 'start_time' ] ) or empty( $_POST[ 'end_time' ] ) ) {
			echo 'Error: Please Enter Info.';
		} else {
				$sql = "INSERT INTO schedule (date, start_time, end_time) VALUES ('" . $_POST[ 'date' ] . "', '" . $_POST[ 'start_time' ] . "', '" . $_POST[ 'end_time' ] . "')";

				if ( $conn->query( $sql ) === TRUE ) {
					//$last_id = $conn->insert_id;
					echo "Your data has been saved.";
				} else {
					echo "Error: " . $conn->error . "<br>";
				}
			
			$conn->close();
		}
	}
	?>
   

   <form id="form1" action="" name="form1" method="post">
		<p>
			<label for="date">Date:</label>
			<input type="date" name="date" id="date">
		</p>
		<p>
			<label for="start_time">Start Time:</label>
			<input type="start_time" name="start_time" id="start_time">
		</p>
		<p>
			<label for="end_time">End Time:</label>
			<input type="end_time" name="end_time" id="end_time">
		</p>
		<input type="submit" name="submit" id="submit" value="Submit">
	</form>
</body>
</html>