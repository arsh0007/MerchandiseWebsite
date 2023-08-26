<?php
    $insert = false;
    if (isset($_POST['name'])) 
    {   
        // Set Connection variables
        $server = "localhost";
        $username = "root";
        $password = "";
        
        // Create a database connection
        $con = mysqli_connect($server, $username, $password);

        // Check For Connection Success
        if(!$con)
        {
            die("Connection to this database failed due to ". mysqli_connect_error());
        }

        // echo "Success Connect to the db"
        // Collect POST variable
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `trip`.`trip2` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";
        // echo $sql;

        // Execute the Query
        if($con->query($sql)==true)
        {
            //Flag for successful insertion
            $insert = true;
            //echo "successfully inserted";

        }
        else
        {
            echo "Error: $sql <br> $con->error";
        }

        //Close the database connection
        $con->close();
    }
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>
                E-Commercial
            </title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        </head>

        <body>

            <section id="header">
                <a href="#">
                    <img src="image/logo.png" class="logo"alt="">
                </a>

                <div>
                    <ul id="navbar">
                        <li>
                           <a  href="index.html">HOME</a> 
                        </li>
                        <li>
                            <a href="shop .html">SHOP</a> 
                        </li>
                        <li>
                           <a  href="blog.html">BLOG </a> 
                        </li>
                        <li>
                           <a   href="about.html">ABOUT</a> 
                        </li>
                        <li>
                           <a class="active" href="contact.html">CONTACT</a> 
                        </li>
                        <li id="lg-bag">
                            <a href="cart.html"> <i class="far fa-shopping-bag"></i> </a>
                        </li>
                        <a href="#" id="close"><i class="far fa-times"></i></a>
                        
                    </ul>
                </div>
                <div id="mobile">
                    <a href="cart.html">
                        <i class="far fa-shopping-bag">
                        </i>
                    </a>
                    <i id="bar" class="fas fa-outdent">
                    </i> 
                </div>
            </section> 

            <section id="page-header" class="about-header">
                
                <h2>
                    #Let's_talk
                </h2>
                
                <p>
                    LEAVE A MESSAGE. We love to hear from you!
                </p>
                
            </section>

            <section id="contact-details" class="section-p1">
                <div class="details">
                    <span>GET IN TOUCH</span>
                    <h2>
                        Visit one of our agency locations or contact us today
                    </h2>
                    <h3>
                        Head Office
                    </h3>
                    <div>
                        <li>
                            <i class="fal fa-map">
                            </i>
                            <p>
                                56 Glassford street Glasgow G1 1UL New York
                            </p>
                        </li>
                        <li>
                            <i class="fal fa-envelope">
                            </i>
                            <p>
                                Contact@example.com
                            </p>
                        </li>
                        <li>
                            <i class="fal fa-phone-alt">  
                            </i>
                            <p>
                                contact@example.com
                            </p>
                        </li>
                        <li>
                            <i class="fal fa-clock">
                            </i>
                            <p>
                                Monday to Saturday: 9:00am to 16:00pm
                            </p>
                        </li>
                    </div>
                </div>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.8338612143825!2d-1.2550437!3d51.754361499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversity%20of%20Oxford!5e0!3m2!1sen!2sin!4v1688826029669!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
            <section id="form-details" class="section-p1">
                <form action="contact.php" method="post">
                    <span>
                        LEAVE A MESSAGE
                    </span>
                    <h2>
                        We love to hear from you
                    </h2>
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="text" name="email" placeholder="E-mail">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" name="message"></textarea>
                    <button class="normal">
                        Submit
                    </button>
                    <?php
                        if ($insert == true) 
                        {
                        echo "<p class='submitMsg'>
                        Thanks for submitting the form.
                        </p>";
                        }
                    ?>
                </form>
                <div class="people">
                    <div>
                        <img src="image/people/1.png" alt="">
                        <p>
                            <span>
                                Jhon Deo
                            </span>
                            Senior Marketing Manager <br>
                            Phone + 000 123 456 78 90 <br>
                            E-mail: contact@gmail.com
                        </p>
                    </div>
                    <div>
                        <img src="image/people/2.png" alt="">
                        <p>
                            <span>
                               Willim
                            </span>
                            Senior Marketing Manager <br>
                            Phone + 000 123 456 78 90 <br>
                            E-mail: contact@gmail.com
                        </p>
                    </div>
                    <div>
                        <img src="image/people/3.png" alt="">
                        <p>
                            <span>
                                Jhon Deo
                            </span>
                            Senior Marketing Manager <br>
                            Phone + 000 123 456 78 90 <br>
                            E-mail: contact@gmail.com
                        </p>
                    </div>
                </div>
            </section>

            <section id="newsletter" class="section-p1" class=".section-m1 ">
                <div class="newstext">
                    <h4>
                        Sign Up For Newsletters
                        <p>
                            Get E-Mail updates about our latest shop and <span>special offers</span>.
                        </p>
                    </h4>
                </div>
                <div class="form">
                    <input type="text" placeholder="Your Email Address" >
                    <button class="normal">
                        Sign Up
                    </button>
                </div>

            </section>

            <footer class="section-p1">
                <div class="col">
                    <img class="logo" src="image/logo.png" alt="">
                    <h4>
                        Contact
                    </h4>
                    <p>
                         <strong>Address:</strong> 562 Welington Road, Street 32, san Francisco
                    </p>
                    <p>
                        <strong>
                            Phone:
                        </strong>
                        +01 2222 365/ (+91)0123456789
                    </p>
                    <p>
                        <strong>
                            Hours:
                        </strong>
                        10:00 - 18:00, Mon - Sat 
                    </p>
                    <div class="follow">
                        <h4>
                            Follow us
                        </h4>
                        <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4>
                        About
                    </h4>
                    <a href="#">About us</a>
                    <a href="#">Delivery Information</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & conditions</a>
                    <a href="#">Contact us</a>
                </div>
                <div class="col">
                    <h4>
                        My Account 
                    </h4>
                    <a href="#">Account</a>
                    <a href="#">Sign In</a>
                    <a href="#">View Cart</a>
                    <a href="#">My Wishlist</a>
                    <a href="#">Track My order</a>
                    <a href="#">Help</a>
                </div>
                <div class="col install">
                    <h4>
                        Install App 
                    </h4>
                    <p>
                        From App Store or Google Play
                    </p>
                    <div class="row">
                        <img src="image/pay/app.jpg" alt="">
                        <img src="image/pay/play.jpg" alt="">
                    </div>
                    <p>
                        Secure Payment Gateways
                    </p>
                    <img src="image/pay/pay.png" alt="">
                </div>

                <div class="copyright">
                    <p>
                        2021, Tech etc - HTML CSS Ecommerce Template
                    </p>
                </div>
            </footer>

            <script src="script.js"></script>

        </body>
</html>