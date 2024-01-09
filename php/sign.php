<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn-SignUp</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    
<div class="container">
<?php
if (isset($_POST["submit"])) {
    
    $Username = $_POST["txt"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if ($number !== 0 && (empty($Username) or empty($email) or empty($password) or $number === null)) {
        array_push($errors, "All fields are required");
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    

    require_once "databaseSign.php"; // Make sure this file is correctly configured with your database connection

    $sql="SELECT * FROM users WHERE email = '$email'";
    $result=mysqli_query($conn,$sql);
    $rowCount =mysqli_num_rows($result);
    if ($rowCount>0) {
        array_push($errors,"Email already exists!");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger error-message'>$error</div>";
        }
    } else {

        $is_admin = ($number == 1) ? 1 : 0; // Convert $number to 1 or 0
        $sql = "INSERT INTO users (Username, email, password,is_admin) VALUES (?, ?, ? ,?)";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 'sssi', $Username, $email, $passwordHash, $is_admin);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are registered successfully.</div>";
        } else {
            die("Something went wrong");
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>

    <input type="checkbox" id="check" aria-hidden="true">
    <div class="signup">
        <form action="sign.php" method="post">
            <label for="check"  aria-hidden="true"> Sign up</label>
            <input type="text" name="txt" placeholder="User name" required style="margin-top: -5px;">
            <input type="email" name="email" placeholder="Email" required style="margin-top: -5px;">
            <input type="password" name="password" placeholder="Password" required style="margin-top: -5px;">
            <input type="number" name="number" placeholder="1/0" required class="cr7" style="margin-top: -5px;">
            <button name="submit" type="submit" style="margin-top: -5px;">Sign up</button>
        </form>
    </div>

    <?php
if (isset($_POST["sub"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "databaseSign.php";
    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if (password_verify($password, $user["password"])) {
                // session_start();
                // $_SESSION['Username'] = $result['Username'];
                if ($user["is_admin"] == 1) {
                    // Redirect to admin page
                    header("Location: admin_paage.php");
                    exit();
                } else {
                    // Redirect to regular user page
                    header("Location: index.php");
                    exit();
                }
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }

        mysqli_stmt_close($stmt);
    } else {
        die("Statement preparation failed");
    }
}
?>


    

    <div class="login">
        <form action="" method="post">
            <label for="check"  aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="sub">Login</button>
        </form>
    </div>
</div>

</body>
</html>
