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
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>


<body>




    <!-- ////////////// header ////////////// -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>X</span>CAR</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#vehicles">Vehicles</a>
            <a href="#services">Services</a>
            <a href="#featured">Featured</a>
            <a href="#reviews">Reviews</a>
            <a href="#contact">Contact</a>
        </nav>
        
       
            


      
        <div id="login-btn">
            <button class="btn"><a href="logout.php">Logout</a></button>
            <a href="sign.php"><i class="far fa-user"></i></a>
        </div>
         
    </header>

    <!-- //////////////////// End header ///////////////////// -->

    <!-- ///////////////////////////////// homeee start ///////////////// -->

    <div class="home-part" id="home">
        <h1 class="home-parallelx" data-speed="-2">Find your car</h1>
        <img class="home-parallelx" data-speed="5" src="images/depositphotos_83370662-stock-photo-black-and-red-car.jpg" alt="">
        <a href="#" class=" btn home-parallax" data-speed="7">Explore Cars</a>
    </div>

    <!-- ///////////////////////////////// homeee endd ///////////////// -->


    <!-- ////////////////////////////////// iconss -->
    <div class="icon-container">
        <div class="icon">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>150+</h3>
                <p>Branches</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>Cars Sold</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>590+</h3>
                <p>Happy Clients</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>890+</h3>
                <p>New Cars</p>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////// end iconss -->

    <!-- ////////////////////vehicles start/////////////////// -->

    <form action="admin_paage.php" method="post">
    <div class="vehicles" id="vehicles">
        <h1 class="heading">Popular <span>Vehicles</span></h1>
        <div class="swiper vehicles-sliders">
            <div class="swiper-wrapper">
            <?php
            // Fetch cars from the database
            $select = mysqli_query($conn, "SELECT * FROM cars");

            // Loop through the results
            while ($row = mysqli_fetch_assoc($select)) {
                $imagePath = 'images' . DIRECTORY_SEPARATOR . $row['image'];
                $imageAlt = $row['name_car'];
            $price = $row['price'];
            ?>

    <div class="swiper-slide box">
        <?php if (file_exists($imagePath)) : ?>
            <img src="<?php echo $imagePath; ?>" alt="<?php echo $imageAlt; ?>">
        <?php else : ?>
            <p class="image-not-found">Image Not Found For Car: <?php echo $imageAlt; ?></p>
        <?php endif; ?>

        <div class="content">
            <h3><?php echo $row['name_car']; ?></h3>
            <div class="price"> <span>Price :</span> $<?php echo $price; ?>/-</div>
            <a href="ProductPage.php?id=<?php echo $row['id']; ?>" class="btn">Check Out</a>
        </div>
    </div>

<?php
}
?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</form>
    
    <!-- //////////////////////////////  Vehicles enddddd ////////////////  -->


    <div class="services" id="services">
        <h1 class="heading">Our <span>Services</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-car"></i>
                <h3>Car Selling</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae?</p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>Parts Repair</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae?</p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>Car Insurance</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae?</p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="box">
                <i class="fas fa-car-battery"></i>
                <h3>battery replacement</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae?</p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>Oil change</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae?</p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae?</p>
                <a href="#" class="btn">Read more</a>
            </div>
        </div>
    </div>

    <!-- /////////////////////// services enddddddddd//////////// -->

    <!-- /////////////////// featured//////// -->


    <div class="featured" id="featured">
        <h1 class="heading"><span>featured</span> Cars</h1>
        <div class=" swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/pngimg.com - honda_PNG102938.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/pngimg.com - ford_PNG102947.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/a10e19c0354de63803091dedd6dba0ca.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/pngimg.com - rolls_royce_PNG18.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/Maserati-PNG-File.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/pngimg.com - rolls_royce_PNG32.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/purepng.com-blue-honda-accord-hybrid-carcarvehicletransporthonda-961524653570veqwm.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/WRX-STI-EJ25-Final-Edition-4.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/pngimg.com - tesla_car_PNG49.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/Tesla-Car-Transparent-Background.png" alt="">
                    <h3>New Model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">$55,000/-</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>



    <!-- ///////////////////////////// featured endddddddd //////////////////////// -->

    <!-- //////////////////// review //////////////////////// -->

    <div class="reviews" id="reviews">
        <h1 class="heading">Cleint’s <span>Review</span> </h1>
        <div class=" swiper reviews-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="images/review photo/63706.jpg" alt="">
                    <div class="content">
                        <p>The Best Cars Store hehehe suiiiiiii</p>
                        <h3>CR7</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/review photo/photo_2023-12-27_14-31-19.jpg" alt="">
                    <div class="content">
                        <p>If it`s created by souheal ... does it even need a review ?</p>
                        <h3>Omar Al-Khateeb</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/review photo/photo_2023-12-27_14-32-32.jpg" alt="">
                    <div class="content">
                        <p>Momtaz Captin</p>
                        <h3>Omar Al-soma</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/review photo/photo_2023-12-27_14-31-56.jpg" alt="">
                    <div class="content">
                        <p>keep going..</p>
                        <h3>N</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/review photo/pngimg.com - donald_trump_PNG54.png" alt="">
                    <div class="content">
                        <p>Billions and Billions...</p>
                        <h3>Donald Trump</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/review photo/21487-3-vin-diesel.png" alt="">
                    <div class="content">
                        <p>Cars is My family ... Thank you</p>
                        <h3>Vin Diesel</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- /////////////////////////////Contact/////////////////// -->

    <div class="contact" id="contact">
        <h1 class="heading"><span>Contact </span>Us</h1>
        <div class="row">

            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26618.66912921981!2d36.247436949999994!3d33.492695649999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518de1e9b0110e9%3A0x6841a070df887531!2sAl%20Mazzeh%2C%20Damascus%2C%20Syria!5e0!3m2!1sen!2s!4v1703664973807!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>


    <form action="process_form.php" method="post">
    <h3>Get in touch</h3>
    <input type="text" name="name" placeholder="Name" class="box">
    <input type="email" name="email" placeholder="Email" class="box">
    <input type="number" name="number" placeholder="Number" class="box">
    <textarea name="message" placeholder="Message" class="box" cols="30" rows="10"></textarea>
    <input type="submit" value="Send message" class="btn">
</form>


        </div>
    </div>
    <!-- //////////////////////////////// contact enddddddddddddd////////////////////// -->

    <div class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Our Branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt">Syria</i> </a>
                <a href="#"> <i class="fas fa-map-marker-alt">USA</i> </a>
                <a href="#"> <i class="fas fa-map-marker-alt">India</i> </a>
                <a href="#"> <i class="fas fa-map-marker-alt">France</i> </a>
                <a href="#"> <i class="fas fa-map-marker-alt">Portugal</i> </a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#home"> <i class="fas fa-arrow-right">Home</i> </a>
                <a href="#vehicles"> <i class="fas fa-arrow-right">Vehicles</i> </a>
                <a href="#services"> <i class="fas fa-arrow-right">Services</i> </a>
                <a href="#featured"> <i class="fas fa-arrow-right">Featuerd</i> </a>
                <a href="#reviews"> <i class="fas fa-arrow-right">Reviews</i> </a>
                <a href="#contact"> <i class="fas fa-arrow-right">Contact</i> </a>
            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#"> <i class="fas fa-phone">+123-456-789</i> </a>
                <a href="#"> <i class="fas fa-phone">+777-777-777</i> </a>
                <a href="#"> <i class="fas fa-envelope">CristinoRonaldo@gmail.com</i> </a>
                <a href="#"> <i class="fas fa-map-marker-alt">portugal ,madiera</i> </a>

            </div>

            <div class="box">
                <h3>Quick Links</h3>
                <a href="#"> <i class="fab fa-facebook">facebook</i> </a>
                <a href="#"> <i class="fab fa-twitter">twitter</i> </a>
                <a href="#"> <i class="fab fa-instagram">instagram</i> </a>
                <a href="#"> <i class="fab fa-linkedin">linkedin</i> </a>
            </div>

        </div>
        <div class="credit">
            Create By Souheal.CR7 & Aziz & Barhome | All Rights Reserved
        </div>
    </div>



    <!-- /////////////////////// JavaScript /////////////////////////////// -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="Ronaldo.js"></script>
</body>

</html>