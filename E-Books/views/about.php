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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum,
                eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi
                neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
                <span>Web Design</span>
                <span>Photoshop & Illustrator</span>
                <span>Coding</span>
            </div>
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