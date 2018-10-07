<?php require('connection.php'); ?>
<?php if(!isset($_SESSION['signin']) or !$_SESSION['signin']) header( 'Location: signin.php' ); ?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>

<body>
	<div style="float:right">
		<form align="right" name="form1" method="post" action="logout.php">
			<input name="submit" type="submit" id="submit" value="Log out">
		</form>
	</div>
	<p>
		<center><h1>Welcome to the Application</h1></center>
	</p>
	<P><h3>Hello Viewers,</h3></P>
	<p>Here you are learning something interesting like, Hand made cards, Hand embroidery
	and Creative mirror work designing.</P>

</body>

</html>