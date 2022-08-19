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


    <title>About</title>
</head>

<body>
    <!-- header section starts  -->

    <?php

    include 'nav.php';

    ?>

    <!-- about section starts -->
    <h1 class="heading" style="margin-bottom: 50px; margin-top: 50px;"> <span>About Us</span> </h1>

    <div class="about-section" id="about">
        <div class="inner-container">
            <h1>About</h1>
            <p class="text">
                Welcome to E-Book, your number one source for all reading material at one place. Our day and night research, and work hard,
                we can provide you the very best knowledge in the shape of E-Book.
                Our dedicate team has work hard and developed online E-Book store, you will inspire its aesthetic look and enjoy user friendly
                interface.
                We are dealing in selling of books in various classifications of Fiction, Non-Fiction, History, Religions, Self-Help.
                We hope you enjoy our books as much as we enjoy offering them to you. If you have any questions or comments, please don’t
                hesitate to
                write to us, we will be glade to answer your queries.
            </p>
        </div>
    </div>
    <!-- about section ends -->

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