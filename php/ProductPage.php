<?php
include 'databaseSign.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XCAR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="styleProduct.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,400&family=Quicksand:wght@300;400;500;600;700&family=Roboto:ital@1&family=Ubuntu:ital@1&display=swap');


* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}

#login-btn .btn a {
    text-decoration: none;
    font-size: large;
    color: black;
}

.btn {
    display: inline-block;
    margin-top: 1rem;
    border-radius: 0.5rem;
    background: red;
    color: black;
    font-weight: 500;
    font-size: 1.7rem;
    cursor: pointer;
    padding: .8rem 3rem;

}

.btn:hover {
    background: rgb(239, 10, 10);
}
.header #login-btn {
    margin-right: 20px; 
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
    background: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 3rem 9%;

}

.header .logo {
    padding: 0 20px;
    font-size: 2.5rem;
    color: black;
    font-weight: bolder;
}

.header .logo span {
    color: red;
}

.header .navbar a {
    font-size: 1.7rem;
    margin: 0 1rem;
    color: black;
}

.header .navbar a:hover {
    color: red;

}
.header .btn {
    margin-top: 0;
}

.header #login-btn i {
    display: none;
    font-size: 2.5rem;
    color: red;
    cursor: pointer;
}

#menu-btn {
    font-size: 2.5rem;
    color: rgb(162, 140, 140);
    cursor: pointer;
    display: none;
}

.header.active {
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    padding: 2rem;
}

/* ////////////////////// homePart */




/* ///////////////////popular vehicles/////////// */
.heading {
    text-align: center;
    padding-bottom: 2rem;
    font-size: 4.5rem;
    color: black;

}

.heading span {
    color: rgb(130, 36, 36);
}




@media(max-width:980px) {
    html {
        font-size: 55%;
    }

    .header {
        padding: 2rem;
    }

    .header.active {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        padding: 2rem;
    }

    .home-part {
        padding: 2rem;
    }

}





@media(max-width:877px) {
    .header #login-btn i {
        display: block;
    }

    #menu-btn {
        display: block;
        
    }

    #menu-btn.fa-times {
        transform: rotate('180deg');
    }

    .header .navbar {
        position: absolute;
        top: 99%;
        left: 0;
        right: 0;
        background: white;
        border-top: 1rem solid rgba(0, 0, 0, 0.1);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header #login-btn .btn {
        display: none;
    }

    .header .navbar.active {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    .header .navbar a {
        display: block;
        margin: 1rem;
        font-size: 2rem;

    }
}



.car-details-container {
    max-width: 600px;
    margin: 80px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
}


.car-details {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.car-details th, .car-details td {
    text-align: left;
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

.car-details th {
    background-color: #f8f8f8;
}

.car-image {
    width: 100%;
    max-width: 300px; /* Adjust the size of the image */
    height: auto;
    display: block;
    margin: 10px auto;
    border-radius: 4px;
}

/* Header Styles */
.header {
    background: ;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

.header a {
    color: #fff;
    text-decoration: none;
}

/* Navbar Styles */
.navbar a {
    margin: 0 10px;
    color: #fff;
    text-decoration: none;
}

/* Adjust the button style */



@media(max-width:450px) {
    html {
        font-size: 50%;
    }

    .heading {
        font-size: 3rem;
    }
}

@media(max-width:450px) {
    html {
        font-size: 50%;
    }

    .heading {
        font-size: 3rem;
    }
    
}


        
    </style>

</head>

<body>
    <!-- ////////////// header ////////////// -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="index.php" class="logo"><span>X</span>CAR</a>
        <nav class="navbar" style="margin-left:50px; ">
            <a href="index.php" style="font-size:20px">Home</a>
            
        </nav>
        


    
        <div id="login-btn">
            <button class="btn"><a href="logout.php">Logout</a></button>
            <a href="sign.php"><i class="far fa-user"></i></a>
        </div>
    
         
    </header>
    <!-- ////////////// header End ////////////// -->

    <!-- ////////////////////vehicles start/////////////////// -->
    <?php
    if (isset($_GET['id'])) {
        $car_id = $_GET['id'];
        $stmt = mysqli_prepare($conn, "SELECT * FROM cars WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $car_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $car = mysqli_fetch_assoc($result);

        if (!$car) {
            echo "<p>Car not found</p>";
        } else {
            echo "<div class='car-details-container'>";
            echo "<h1>Car Details</h1>";
            echo "<table class='car-details'>";
            echo "<tr><td><b>Name:</b></td><td>" . htmlspecialchars($car['name_car']) . "</td></tr>";
            echo "<tr><td><b>Price:</b></td><td>$" . htmlspecialchars($car['price']) . "</td></tr>";

            $imagePath = 'images/' . htmlspecialchars($car['image']);
            if (file_exists($imagePath)) {
                echo "<tr><td colspan='2'><img src='$imagePath' alt='" . htmlspecialchars($car['name_car']) . "' class='car-image' /></td></tr>";
            } else {
                echo "<tr><td colspan='2'>Image not available</td></tr>";
            }

            if (!empty($car['description'])) {
                echo "<tr><td><b>Description:</b></td><td>" . htmlspecialchars($car['description']) . "</td></tr>";
            }
            echo "</table>";
            echo "</div>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<p>No car selected</p>";
    }
    ?>
    <!-- //////////////////////////////  Vehicles enddddd ////////////////  -->
</body>
</html>
