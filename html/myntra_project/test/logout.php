
<?php
session_start(); // Start the session
session_destroy(); // Destroy all session data
header("Location: welcome.php"); // Redirect to the login page after logout
exit;
?>