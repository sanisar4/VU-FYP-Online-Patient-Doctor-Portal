<?php
session_start();  // Inialize session
// Delete certain session
unset($_SESSION['signin']);
unset($_SESSION['client_id']);

 session_destroy();

// Jump to login page
header('Location: signin.php');
exit;
?>


