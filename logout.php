<?php
// Start the session
session_start();
session_unset();
// Destroy the session and all its data
session_destroy();

// Redirect the user to the login page
header("location: login.php");

exit();
?>