<?php
include 'databaseSign.php';

// Define $data to avoid an undefined variable warning
$data = [];

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Get the car ID from the URL parameter
    $ID = $_GET['id'];

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, "SELECT * FROM `cars` WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $ID);
    mysqli_stmt_execute($stmt);

    // Fetch the data as an associative array
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);

    // Check if the data is found
    if (!$data) {
        // Car not found, redirect to a specific page
        header("Location: car_not_found.php");
        exit();
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    // Car ID not provided, redirect to another page
    header("Location: car_id_not_provided.php");
    exit();
}

// Initialize variables to store form data
$car_name = htmlspecialchars($data['name_car'] ?? '');
$car_price = htmlspecialchars($data['price'] ?? '');

// Check if the form is submitted for updating
if (isset($_POST['update_car'])) {
    // Get updated values from the form
    $updated_car_name = isset($_POST['car_name']) ? htmlspecialchars($_POST['car_name']) : '';
    $updated_car_price = isset($_POST['car_price']) ? htmlspecialchars($_POST['car_price']) : '';
    $updated_car_description = isset($_POST['car_description']) ? htmlspecialchars($_POST['car_description']) : '';

    // Initialize variable for uploaded image
    $uploaded_image = '';

    // Check if a new image file is provided
    if ($_FILES['car_image']['size'] > 0) {
        $uploaded_image = $_FILES['car_image']['name'];
        $uploaded_image_tmp_name = $_FILES['car_image']['tmp_name'];
        $target_dir = "images/";
        $target_file = $target_dir . basename($uploaded_image);

        // TODO: Add file type and size validation here

        if (move_uploaded_file($uploaded_image_tmp_name, $target_file)) {
            // File is uploaded successfully
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Use prepared statement to update the database
    $update_stmt = mysqli_prepare($conn, "UPDATE `cars` SET name_car = ?, price = ?, image = ?, description = ? WHERE id = ?");
    mysqli_stmt_bind_param($update_stmt, "ssssi", $updated_car_name, $updated_car_price, $uploaded_image, $updated_car_description, $ID);
    mysqli_stmt_execute($update_stmt);

    // Close the statement
    mysqli_stmt_close($update_stmt);

    // Redirect to a page after the update
    header("Location: admin_paage.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Car</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
<div class="admin-car-form-container" style="margin-left: 100px">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?id=' . $ID); ?>" method="post" enctype="multipart/form-data">
        <h3>Edit Car</h3>
        <input type="text" placeholder="Enter car name" value="<?php echo $car_name; ?>" name="car_name" class="box" required>
        <input type="number" placeholder="Enter car price" value="<?php echo $car_price; ?>" name="car_price" class="box" required>
        <textarea name="car_description" placeholder="Enter car description" class="box" required><?php echo htmlspecialchars($data['description'] ?? ''); ?></textarea>
        <div>
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="car_image" class="box">
            <?php if (!empty($data['image'])) { ?>
                <img src="<?php echo htmlspecialchars('images/' . $data['image']); ?>" alt="Car Image" style="max-width: 100px; max-height: 100px;">
            <?php } ?>
        </div>
        <input type="submit" class="btn" name="update_car" value="Update Car">
    </form>
</div>
</body>
</html>
