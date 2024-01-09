<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other desired page after logout
    header("Location: sign.php");
    exit();
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: sign.php");
    exit();
}
?>
