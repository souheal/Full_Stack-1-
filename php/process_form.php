<?php
// Assuming you have a MySQL database connection
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "signin/up";
$conn = mysqli_connect($hostName , $dbUser , $dbPassword , $dbName);
if (!$conn) {
    die("something went wrong");
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO get_in_touch (name, Email, Number, Message) VALUES ('$name', '$email', '$number', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
