<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="css/swiper.css" />


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <!-- bootstrap 5 css link -->
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <title>Document</title>

    <style>
        .modal-title{
            text-transform: uppercase;
            margin-left: 22px;
        }
        .heading span{
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <header class="header">

        <div class="header-1">

            <a href="index.php" class="logo"> <i class="fas fa-book"></i> e-books </a>
            <!-- id="search-box" -->
            <form class="search-form">
                <input type="search" id="ser" name="search" placeholder="search here...">
                <button name="search-btn" style="background-color: transparent;">
                    <label for="search-box" class="fas fa-search"></label>
                </button>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <a href="cart.php" class="fas fa-shopping-cart"></a>
                <?php
                if (isset($_SESSION["userid"]) != null) {
                    echo '<div class="fas nui online" onclick="settingsMenuToggle()">
                    <img  src="' . $_SESSION["image"] . '" class="rounded-circle">
                    </div>';
                } else {
                    echo '<div id="login-btn" class="fas fa-user"></div>';
                }
                ?>

            </div>

        </div>

        <?php
        echo '
                    <div class="list-group cat-d" style="display: none;margin-left:505px;margin-top:-15px;" id="list-ser">';
        $fetch_category = mysqli_query($con, "select * from tbl_book_detail");
        while ($cat_row = mysqli_fetch_array($fetch_category)) {
            echo '<a href="#" data-bs-toggle="modal" data-bs-target="#catModal' . $cat_row[0] . '" class="list-group-item list-group-item-action cat-i" style="z-index:+3;width:500px;">' . $cat_row[1] . '</a>';
        };
        echo '
                    </div>'
        ?>
        <!----------- settings-menu---------------  -->

        <div class="sm">

            <div id="drk-bnt">
                <span></span>
            </div>

            <div class="smi">
                <?php

                if (isset($_SESSION["userid"]) != null) {
                    echo '
                        <div class="up">
                            <img src="' . $_SESSION["image"] . '" class="rounded-circle">
                            <div>
                                <p>' . $_SESSION["name"] . '</p>
                                <a href="profile.php">See Your Profile</a>
                            </div>
                        </div>';
                } else {
                    echo '
                        <div class="up">
                            <img src="image/Ammar.jpg" class="rounded-circle">
                            <div>
                                <p>Login</p>
                                <a href="#">See Your Profile</a>
                            </div>
                        </div>';
                }

                ?>
                <hr>
                <div class="sl">
                    <img src="image/setting.png" class="si">
                    <a href="#">Settings & Privacy <img src="image/arrow.png" width="10px"></a>
                </div>
                <div class="sl">
                    <img src="image/help.png" class="si">
                    <a href="#">Help & Support <img src="image/arrow.png" width="10px"></a>
                </div>
                <div class="sl">
                    <img src="image/logout.png" class="si">
                    <a href="../apis/user_apis/logout_user.php">Logout <img src="image/arrow.png" width="10px"></a>
                </div>
            </div>
        </div>



        <div class="header-2">
            <nav class="navbar-n">
                <a href="index.php#home">home</a>
                <a style="cursor:pointer;" id="cat">Categories</a>
                <!-- <a href="#bestselling">Best Selling</a> -->
                <a href='index.php#bestselling'>Best Selling</a>
                <a href="index.php#arrivals">arrivals</a>
                <a href="index.php#reviews">reviews</a>
                <!-- <a href="#blogs">blogs</a> -->
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="competition.php">competition</a>
            </nav>
            <?php
            echo '
            <div class="list-group cat-d" style="display: none;" id="list">';
            $fetch_category = mysqli_query($con, "select * from tbl_book_category");
            while ($cat_row = mysqli_fetch_array($fetch_category)) {
                echo '<a href="#" data-bs-toggle="modal" data-bs-target="#catModal' . $cat_row[0] . '" class="list-group-item list-group-item-action cat-i" style="z-index:+3;">' . $cat_row[1] . '</a>
                    ';
            };
            echo '
            </div>'
            ?>

            <?php
            $fetch_category = mysqli_query($con, "select * from tbl_book_category 
            ");
            while ($cat_row = mysqli_fetch_array($fetch_category)) {
                echo '
            <div class="modal fade" id="catModal' . $cat_row[0] . '" role="dialog" style="left: 5px;right:5px;">
                <div class="modal-dialog" style="max-width:3000px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" style="color:green;">' . $cat_row[1] . '</h2>
                            <button type="button" class="btn-close" style="margin-right:8px;" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <section class="featured container-fluid" style="padding-bottom:0px;padding-top:28px;">
                                <h1 class="heading"><span>' . $cat_row[1] . '</span> </h1>
                                <div class="swiper featured-slider">
                                    <div class="swiper-wrapper">';
                $fetch_book = mysqli_query($con, 'SELECT * FROM tbl_book_detail
                                    WHERE book_category_1=' . $cat_row[0] . ' OR book_category_2=' . $cat_row[0] . ' OR book_category_3=' . $cat_row[0] . '
                                    ');
                while ($row = mysqli_fetch_array($fetch_book)) {
                    echo '
                                        <div class="swiper-slide box">
                                            <div class="icons">
                                                <a href="#" class="fas fa-search"></a>
                                                <a href="#" class="fas fa-heart"></a>
                                                <button data-bs-toggle="modal" data-bs-target="#myModal' . $row[0] . '">
                                                    <a class="fas fa-eye" data-bs-toggle="tooltip" title="Book Details"></a>
                                                </button>
                                            </div>
                                            <div class="image">
                                                <img src="../../dashboard/views/' . $row[17] . '" alt="">
                                            </div>
                                            <div class="content">
                                                <h3>' . $row[1] . '</h3>
                                                <div class="price">$20.99 <span>$20.99</span></div>
                                                    <a href="#" class="btn-n">add to cart</a>
                                                </div>
                                            </div>
                                    ';
                };
                echo '
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            ';
            };
            ?>


        </div>

    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="index.php#home" class="fas fa-home"></a>
        <a href="index.php#bestselling" class="fas fa-list"></a>
        <a href="index.php#arrivals" class="fas fa-tags"></a>
        <a href="index.php#reviews" class="fas fa-comments"></a>
        <a href="contact.php" class="fa fa-phone"></a>
        <a href="about.php" class="fa fa-blog"></a>
    </nav>



    <!-- login form  -->

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="../apis/user_apis/login_user.php" method="POST">
            <h3>sign in</h3>
            <span>Email</span>
            <input type="email" name="vemail" class="box" placeholder="Enter your email" id="">
            <span>password</span>
            <input type="password" name="vpassword" class="box" placeholder="Enter your password" id="">
            <div class="checkbox">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me"> remember me</label>
            </div>
            <input type="submit" name="login" value="sign in" class="btn-n">
            <p>forget password ? <a href="#">click here</a></p>
            <p>don't have an account ? <a href="#" id="signup-btn">create one</a></p>
            <!-- <p>don't have an account ? <button id="signup-btn">create one</button></p> -->
        </form>

    </div>



    <!-- Register form  -->


    <div class="signup-form-container">

        <div id="close-signup-btn" class="fas fa-times"></div>

        <form action="../apis/user_apis/insert_user.php" method="POST" enctype="multipart/form-data">
            <h3>sign up</h3>
            <span>User Name</span>
            <input type="text" name="uname" class="box" placeholder="Enter your name" id="">
            <span>Email</span>
            <input type="email" name="uemail" class="box" placeholder="Enter your email" id="">
            <span>Phone</span>
            <input type="text" name="uphone" class="box" placeholder="Enter your phone" id="">
            <span>Address</span>
            <textarea style="border:1px solid gray;border-radius:6px ; resize: none; color: var(--light-color);" placeholder="Enter your address" name="uaddress" id="" cols="52" rows="3"></textarea>
            <span>password</span>
            <input type="password" name="upassword" class="box" placeholder="Enter your password" id="">
            <input type="submit" name="submit" value="submit" class="btn-n">
            <!-- <p>Already have an account ? <a href="#" id="login-btn">Sign in</a></p> -->
            <p>Already have an account ? <button id="login-btn">Sign in</button></p>
        </form>

    </div>


    <!--reviews-->
    <?php

    if (isset($_SESSION["userid"]) != null) {
        echo '
    <div id="feedsticky" style="z-index: +3;border-radius: 10px;">
        <div class="FeedDiv">
            <button id="FeedButton" class="wow animate__animated animate__heartBeat" data-wow-duration="1s" data-wow-delay=".7s">
                <a id="readmore" class="feedbutton" style="color: black;"><b>R<br>E<br>V<br>I<br>E<br>W<br>S</b></a>
            </button>
        </div>
        <div class="container-fluid FeedContainer">
            <div class="post">
                <div class="text">Thanks for rating us!</div>
                <div class="edit">EDIT</div>
            </div>
            <div class="star-widget">
                <input type="radio" name="rate" id="rate-5" value="5-Stars">
                <label for="rate-5" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-4" value="4-Stars">
                <label for="rate-4" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-3" value="3-Stars">
                <label for="rate-3" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-2" value="2-Stars">
                <label for="rate-2" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-1"  value="1-Star">
                <label for="rate-1" class="fas fa-star"></label>
                <form action="#">
                    <header></header>
                    <div class="textarea">
                        <textarea cols="30" placeholder="Describe your experience.."></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit" name="post" class="btn-n">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>';
    }

    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>