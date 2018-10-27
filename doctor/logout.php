<?php
session_start();  // Inialize session
// Delete certain session
unset($_SESSION['login']);
unset($_SESSION['client_id']);

 session_destroy();

// Jump to login page
header('Location: login.php');
exit;
?>


