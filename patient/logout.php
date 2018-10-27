<?php
session_start();  // Inialize session
// Delete certain session
unset($_SESSION['login']);
unset($_SESSION['master_id']);

 session_destroy();

// Jump to login page
header('Location: login.php');
exit;
?>


