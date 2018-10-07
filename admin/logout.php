<?php
session_start();  // Inialize session
// Delete certain session
unset($_SESSION['logedin']);
unset($_SESSION['user_id']);
 session_destroy();

// Jump to login page
header('Location: login.php');
exit;
?>


