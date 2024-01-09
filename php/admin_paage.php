<?php
include 'databaseSign.php';

// Initialize an array to store messages
$message = [];

if (isset($_POST['add_car'])) {
    $car_name = $_POST['car_name'];
    $car_price = $_POST['car_price'];
    $car_description = $_POST['car_description'];
    $car_image = $_FILES['car_image']['name'];
    $car_image_tmp_name = $_FILES['car_image']['tmp_name'];
    $car_image_folder = 'images/' . $car_image; // Relative path to the image

    // Check if any required field is empty
    if (empty($car_name) or empty($car_price) or   empty($car_image) or empty($car_description)) {
        $message[] = 'Please fill out all fields';
    } else {
        // Use prepared statements to prevent SQL injection
        $insert = "INSERT INTO cars (name_car, price, image,description) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssss", $car_name, $car_price, $car_image_folder,$car_description );

        // Execute statement
        $upload = mysqli_stmt_execute($stmt);

        if ($upload) {
            // Move the uploaded file to the specified folder
            $destination = __DIR__ . '/images/' . $car_image_folder;
            $des = __DIR__ . 'images/' . $car_image_folder;
            // Ensure the directory exists
            if (!is_dir(dirname($destination))) {
                mkdir(dirname($destination), 0755, true);
            }

            move_uploaded_file($car_image_tmp_name, $destination);
            $message[] = 'New car added successfully';
        } else {
            // Capture the error message
            $message[] = 'Could not add the car. ' . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>

<?php
// Display messages
if (!empty($message)) {
    foreach ($message as $msg) {
        echo '<span class="message">' . $msg . '</span>';
    }
}
?>

<div class="container">
    <div class="admin-car-form-container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <h3>Add a new car</h3>
            <input type="text" placeholder="Enter car name" name="car_name" class="box">
            <input type="number" placeholder="Enter car price" name="car_price" class="box">
            <textarea name="car_description" placeholder="Enter car description" class="box"></textarea>
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="car_image" class="box">
            <input type="submit" class="btn" name="add_car" value="Add Car">
        </form>
    </div>

    <?php
    // Fetch cars from the database
    $select = mysqli_query($conn, "SELECT * FROM cars");
    ?>

    <div class="car-display">
        <table class="car-display-table" >
            <thead>
            <tr>
                <th>Car Image</th>
                <th>Car Name</th>
                <th>Car Price</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                <tr>
                <td><img src="<?php echo 'images/' . $row['image']; ?>" height="100" alt=""></td>


                    <td><?php echo $row['name_car']; ?></td>
                    <td>$<?php echo $row['price']; ?>/-</td>
                    <td><?php echo $row['description']; ?></td>
                    <td>
                        <a href="admin_update.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Edit </a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> Delete </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>