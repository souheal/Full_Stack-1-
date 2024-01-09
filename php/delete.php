<?php
include 'databaseSign.php';

// Check if 'id' is set in the URL
if (isset($_GET['id'])) {
    // Get the ID from the URL
    $ID = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, "DELETE FROM cars WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $ID);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect back to admin_paage.php
        header('location:admin_paage.php');
        exit();
    } else {
        // Display an error message
        echo "Error deleting car: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    // Handle the case when 'id' is not set in the URL
    echo "Invalid request: Missing 'id' parameter";
}
?>
