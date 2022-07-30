<?php

    include "../apis/connection.php";
    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- short icon link -->
    <link rel="shortcut icon" type="image/png" href="image/loader-img.gif">

    <!-- bootstrap 5 css link -->
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contact</title>
    <style>
        *{
            text-transform: lowercase;
        }
    </style>
</head>

<body>
    <!-- header section starts  -->

    <?php

    include 'nav.php';

    ?>

    <!-- contact form starts -->

    <h1 class="heading" style="margin-bottom: 50px; margin-top: 70px;"> <span>Contact Us</span> </h1>

    <section class="contact" id="contact">

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>
                            Block 6 Saddar Bazar Road,<br>Shop No. 7899 Streat No. 43,<br>Saddar Karachi.
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>
                            e.bookstore@ebooks.com
                        </p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>
                            +92-317-0100122
                        </p>
                    </div>
                </div>

            </div>

            <div class="contactForm">
                <form action="../apis/user_apis/insert_contact.php" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required 
                            <?php
                                if(isset($_SESSION["userid"])!=null){
                                    echo  'value="'.$_SESSION["name"].'" ';
                                }
                            ?>
                        >
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required 
                        <?php
                            if(isset($_SESSION["userid"])!=null){
                                echo  'value="'.$_SESSION["email"].'" ';
                            }
                        ?>
                        >
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required name="message"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="send" value="Send">
                    </div>

                </form>
            </div>

        </div>

    </section>

    <!-- contact form ends -->


    <!-- footer section starts  -->

    <?php

    include 'footer.php';

    ?>

    <!-- footer section ends -->

    <!-- loader  -->
    <!--
    <div class="loader-container">
        <img src="image/loader-img.gif" alt="">
    </div> -->















    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>