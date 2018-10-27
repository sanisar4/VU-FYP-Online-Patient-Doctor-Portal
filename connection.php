<?php
error_reporting(9999999);
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doc_appointment";

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}


function print_rt($arr){
	echo '<pre>'; 
	print_r($arr);
	echo '</pre>';
}

?>