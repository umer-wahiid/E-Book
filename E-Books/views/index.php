    <?php

    require '../apis/connection.php';
    session_start();
    // if(isset($_GET['alert'])){
    //     $alert = $_GET['alert'];
    //     echo '<div class="alert alert-success" role="alert">'.$alert.'</div>';
    // }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Books</title>





        <!-- short icon link -->
        <link rel="shortcut icon" type="image/png" href="image/loader-img.gif">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    </head>

    <body>

        <!-- header section starts  -->

        <?php

        include 'nav.php';

        ?>


        <!-- home section starts  -->

        <section class="home" id="home">

            <div class="row">

                <div class="content">
                    <h3>upto 75% off</h3>
                    <p>Get Upto 75% Off On All New Arrival Books On Black Friday. So what are you waiting for, Avail the offer ASAP !</p>
                    <a href="#" class="btn-n">shop now</a>
                </div>

                <div class="swiper books-slider">
                    <div class="swiper-wrapper">
                        <?php
                    $fetch_book = mysqli_query($con, 'SELECT * FROM tbl_book_detail ORDER BY book_id DESC LIMIT 5 ');
                    while ($row = mysqli_fetch_array($fetch_book)) {
                        echo'
                        <a href="#" class="swiper-slide"><img src="../../dashboard/views/' . $row[17] . '" alt=""></a>
                        ';}
                        ?>
                    </div>
                    <img src="image/stand.png" class="stand" alt="">
                </div>

            </div>

        </section>

        <!-- home section ense  -->

        <!-- icons section starts  -->

        <section class="icons-container">

            <div class="icons">
                <i class="fas fa-shipping-fast"></i>
                <div class="content">
                    <h3>free shipping</h3>
                    <p>order over $100</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-lock"></i>
                <div class="content">
                    <h3>secure payment</h3>
                    <p>100 secure payment</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-redo-alt"></i>
                <div class="content">
                    <h3>easy returns</h3>
                    <p>10 days returns</p>
                </div>
            </div>

            <div class="icons">
                <i class="fas fa-headset"></i>
                <div class="content">
                    <h3>24/7 support</h3>
                    <p>call us anytime</p>
                </div>
            </div>

        </section>

        <!-- icons section ends -->

        <!-- featured section starts  -->

        <section class="featured" id="bestselling">

            <h1 class="heading"><span>Most Selling</span> </h1>

            <div class="swiper featured-slider">

                <div class="swiper-wrapper">

                    <?php


                    $category = mysqli_query($con, "SELECT * FROM `tbl_book_category` WHERE `b_category`='Best Sellers'");
                    $category_row = mysqli_fetch_array($category);
                    $fetch_book = mysqli_query($con, 'SELECT * FROM tbl_book_detail
                                        WHERE book_category_1=' . $category_row[0]. ' OR book_category_2=' . $category_row[0]. ' OR book_category_3=' . $category_row[0]. '
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
                                        </div>'
                    ?>

                </div>

                <div class="swiper-button-next" style="top:155%;right:4%;"></div>
                <div class="swiper-button-prev" style="top:155%;left:4%;"></div>

            </div>

        </section>

        <?php

        $fetch_book = mysqli_query($con, 'SELECT * FROM tbl_book_detail
        INNER JOIN tbl_book_category as tb1
        ON
        tbl_book_detail.book_category_1 = tb1.b_id
        INNER JOIN tbl_book_category as tb2
        ON
        tbl_book_detail.book_category_2 = tb2.b_id
        INNER JOIN tbl_book_category as tb3
        ON
        tbl_book_detail.book_category_3 = tb3.b_id
        ');
        while ($row = mysqli_fetch_array($fetch_book)) {
            echo '
            <div class="modal fade" id="myModal' . $row[0] . '" role="dialog">
                <div class="modal-dialog" style="max-width:3000px;width:630px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" style="color:green;">' . $row[1] . '</h2>
                            <button type="button" class="btn-close" style="margin-right:8px;" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body" style="padding:1.5rem;">
                            <div class="row">
                                <div class="col-lg-3" width="max-content">
                                    <img class="img-fluid" style="border-radius: 10px;" src="../../dashboard/views/' . $row[17] . '" alt="">
                                </div>
                                <div class="col-lg-8 mt-3" style="margin-left:20px;">
                                    <div class="row">
                                        <div class="col-6">
                                            <h4><b>Author</b></h4>
                                            <h5>' . $row[2] . '</h5>
                                        </div>
                                        <div class="col-5">
                                            <h4><b>Publisher</b></h4>
                                            <h5>' . $row[4] . '</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4><b>Categories</b></h4>
                                            <h5>' . $row[19] . '</h5>
                                            <h5>' . $row[21] . '</h5>
                                            <h5>' . $row[23] . '</h5>
                                        </div>
                                        <div class="col-5">
                                            <h4><b>Publication Date</b></h4>
                                            <h5>' . $row[5] . '</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4><b>Book Weight</b></h4>
                                            <h5>' . $row[6] . ' gm</h5>
                                        </div>
                                        <div class="col-5">
                                            <h4><b>Number of Pages</b></h4>
                                            <h5>' . $row[7] . ' pages</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4><b>Availability</b></h4>
                                            <h5>' . $row[9] . '</h5>
                                        </div>
                                        <div class="col-6">
                                            <h4><b>Rating</b></h4>
                                            <h5>' . $row[8] . '</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <h3><b>About Book</b></h3>
                                    <h5>' . $row[10] . '</h5>
                                    <br>
                                    <h3><b>About Author</b></h3>
                                    <h5>' . $row[3] . '</h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <h3><b>Price</b></h3>
                                    <h4>Rs. 300</h4>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-n" style="margin-top:0px;margin-right:309px;" data-bs-dismiss="modal">Add To Cart</button>
                            <button type="button" style="width:100px;height:35px;font-size:15px;" class="btn" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }

        ?>
  

        <!-- featured section ends -->

        <!-- newsletter section starts -->

        <section class="newsletter">

            <div class="row">
                <div class="content">
                    <h3>upto 75% off</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias
                        sit necessitatibus, aliquid ex minima at!</p>
                    <a href="#" class="btn-n">shop now</a>
                </div>
            </div>

            <form action="../apis/user_apis/subscribe.php" method="POST">

                <h3>subscribe for latest updates</h3>
                <input type="email" name="" placeholder="enter your email" 
                <?php
                    if (isset($_SESSION["userid"]) != null) {
                        echo  'value="' . $_SESSION["email"] . '" ';
                    }
                ?> 
                id="" class="box">
                <input type="radio" name="sub" value="1 Year" style="margin-top: 30px;">
                &nbsp;
                <span class="radio">1 Year/Rs.2000</span>
                <br>
                <input type="radio" name="sub" value="2 Year">
                &nbsp;
                <span class="radio">2 Year/Rs.2600</span>
                <br>
                <input type="radio" name="sub" value="3 Year" style="margin-bottom: 30px;">
                &nbsp;
                <span class="radio">3 Year/Rs.3200</span>
                <br>
                <?php
                if (isset($_SESSION["userid"]) != null) {
                    echo '<input type="submit" name="subscribe" value="subscribe" class="btn-n">';
                } else {
                    echo '<input type="submit" href="#" value="subscribe" class="btn-n">';
                }
                ?>
            </form>

        </section>

        <!-- newsletter section ends -->

        <!-- arrivals section starts  -->

        <section class="arrivals" id="arrivals">

            <h1 class="heading"> <span>new arrivals</span> </h1>

            <div class="swiper arrivals-slider">

                <div class="swiper-wrapper">

                    <?php

                    $fetch_book = mysqli_query($con, 'SELECT * FROM tbl_book_detail ORDER BY book_id DESC LIMIT 5 ');
                    while ($row = mysqli_fetch_array($fetch_book)) {
                        echo
                        '<a href="#" class="swiper-slide box">
                            <div class="image">
                                <img src="../../dashboard/views/' . $row[17] . '" alt="">
                            </div>
                            <div class="content">
                                <h3>' . $row[1] . '</h3>
                                <div class="price">$15.99 <span>$20.99</span></div>
                                <div class="stars">
                                <h4 style="color:black;">Rating: <span style="font-size:12px;"> '.$row[8].' <i class="fas fa-star"></i></span></h4>
                                </div>
                            </div>
                        </a>';
                    }

                    ?>
                </div>

            </div>

            <div class="swiper arrivals-slider">

                <div class="swiper-wrapper">

                    <?php

                    $fetch_book = mysqli_query($con, 'SELECT * FROM tbl_book_detail ORDER BY book_id ASC LIMIT 5
                    -- INNER JOIN tbl_book_category as tb1
                    -- ON
                    -- tbl_book_detail.book_category_1 = tb1.b_id
                    -- INNER JOIN tbl_book_category as tb2
                    -- ON
                    -- tbl_book_detail.book_category_2 = tb2.b_id
                    -- INNER JOIN tbl_book_category as tb3
                    -- ON
                    -- tbl_book_detail.book_category_3 = tb3.b_id
                    ');
                    while ($row = mysqli_fetch_array($fetch_book)) {
                        echo
                        '<a href="#" class="swiper-slide box">
                                    <div class="image">
                                        <img src="../../dashboard/views/' . $row[17] . '" alt="">
                                    </div>
                                    <div class="content">
                                        <h3>' . $row[1] . '</h3>
                                        <div class="price">$15.99 <span>$20.99</span></div>
                                        <div class="stars">
                                        <h4 style="color:black;">Rating: <span style="font-size:12px;"> '.$row[8].' <i class="fas fa-star"></i></span></h4>
                                        </div>
                                    </div>
                                </a>';
                    }

                    ?>



                </div>

            </div>

        </section>

        <!-- arrivals section ends -->

        <!-- deal section starts  -->

        <section class="deal">

            <div class="content">
                <h3>deal of the day</h3>
                <h1>upto 50% off</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde perspiciatis in atque dolore tempora
                    quaerat at fuga dolorum natus velit.</p>
                <a href="#" class="btn-n">shop now</a>
            </div>

            <div class="image">
                <img src="image/deal-img.jpg" alt="">
            </div>

        </section>

        <!-- deal section ends -->

        <!-- reviews section starts  -->
        <section class="reviews" id="reviews">
            <h1 class="heading"> <span>client's reviews</span> </h1>
            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">

                    <?php
                    $fetch_review = mysqli_query($con, "SELECT * FROM `tbl_user_reviews`");
                    while ($review_row = mysqli_fetch_array($fetch_review)) {
                        echo '
                    <div class="swiper-slide box">
                        <img src="'. $review_row[5] . '" alt="">
                        <h3>' . $review_row[1] . '</h3>
                        <p>' . $review_row[4] . '</p>
                        <div class="stars">' . $review_row[3] . '</div>
                    </div>
                    ';
                    }

                    ?>
                </div>
            </div>
        </section>








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



    </body>

    </html>