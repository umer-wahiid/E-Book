    <?php

    require '../apis/connection.php';
    session_start();
    $bestselling = '';
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam deserunt nostrum accusamus. Nam alias
                        sit necessitatibus, aliquid ex minima at!</p>
                    <a href="#" class="btn-n">shop now</a>
                </div>

                <div class="swiper books-slider">
                    <div class="swiper-wrapper">
                        <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
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

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <button data-bs-toggle="modal" data-bs-target="#myModal">
                                <a class="fas fa-eye" data-bs-toggle="tooltip" title="Book Details"></a>
                            </button>

                        </div>
                        <div class="image">
                            <img src="image/A Gentleman in Moscow.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>best selling</h3>
                            <div class="price">$20.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <!-- <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <button data-bs-toggle="modal" data-bs-target="#theBookThief">
                                <a class="fas fa-eye" data-bs-toggle="tooltip" title="Book Details"></a>
                            </button>
                        </div>
                        <div class="image">
                            <img src="image/The Book Thief.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="image/book-3.png" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="image/book-4.png" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="image/book-5.png" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="image/book-6.png" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="image/book-7.png" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="image/book-8.png" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="image/book-9.png" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                        </div>
                        <div class="image">
                            <img src="image/book-10.png" alt="">
                        </div>
                        <div class="content">
                            <h3>featured books</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <a href="#" class="btn-n">add to cart</a>
                        </div>
                    </div> -->

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

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
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog" style="max-width:3000px;width:630px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" style="color:green;">' . $row[1] . '</h2>
                            <button type="button" class="btn-close" style="margin-right:8px;" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body" style="padding:1.5rem;">
                            <div class="row">
                                <div class="col-lg-3" width="max-content">
                                    <img class="img-fluid" style="border-radius: 10px;" src="' . $row[17] . '" alt="">
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
        <!-- <div class="modal fade" id="theBookThief" role="dialog">
            <div class="modal-dialog" style="max-width:3000px;width:630px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" style="color:green;">The Book Thief</h2>
                        <button type="button" class="btn-close" style="margin-right:8px;" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" style="padding:1.5rem;">
                        <div class="row">
                            <div class="col-lg-3" width="max-content">
                                <img class="img-fluid" style="border-radius: 10px;" src="image/The Book Thief.jpg" alt="">
                            </div>
                            <div class="col-lg-8 mt-3" style="margin-left:20px;">
                                <div class="row">
                                    <div class="col-6">
                                        <h4><b>Author</b></h4>
                                        <h5>Markus Zusak</h5>
                                    </div>
                                    <div class="col-5">
                                        <h4><b>Publisher</b></h4>
                                        <h5>Windmill Books</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h4><b>Categories</b></h4>
                                        <h5>Historical Fiction</h5>
                                        <h5>Young Adults</h5>
                                        <h5>Summer Reading Recommendations</h5>
                                    </div>
                                    <div class="col-5">
                                        <h4><b>Publication Date</b></h4>
                                        <h5>08/09/2016</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h4><b>Book Weight</b></h4>
                                        <h5>100 gm</h5>
                                    </div>
                                    <div class="col-5">
                                        <h4><b>Number of Pages</b></h4>
                                        <h5>624 pages</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h4><b>Availability</b></h4>
                                        <h5>PDF/CD/BOOK</h5>
                                    </div>
                                    <div class="col-6">
                                        <h4><b>Rating</b></h4>
                                        <h5>4.8</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <h3><b>About Book</b></h3>
                                <h5>It is 1939. In Nazi Germany, the country is holding its breath. Death has never been busier - and will become busier still.
                                    <br>
                                    By her brother's graveside, Liesel's life is changed forever when she picks up a single object,
                                    abandoned in the snow. It is The Gravedigger's Handbook, and this is her first act of book thievery.
                                    So begins Liesel's love affair with books and words, and soon she is stealing from Nazi book-burnings,
                                    the mayor's wife's library . . . wherever there are books to be found.
                                </h5>
                                <br>
                                <h3><b>About Author</b></h3>
                                <h5>Markus Zusak was born in 1975 in Sydney, Australia, the youngest of four children of immigrant
                                    German and Austrian parents. Neither parent could read or write English when they first arrived
                                    in Australia.
                                </h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <h3><b>Price</b></h3>
                                <h4>Rs. 1,095.00</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-n" style="margin-top:0px;margin-right:309px;" data-bs-dismiss="modal">Add To Cart</button>
                        <button type="button" style="width:100px;height:35px;font-size:15px;" class="btn" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->



        <!-- featured section ends -->

        <!-- newsletter section starts -->

        <section class="newsletter">

            <form action="../apis/user_apis/subscribe.php" method="POST">
                <h3>subscribe for latest updates</h3>
                <input type="email" name="" placeholder="enter your email" <?php
                                                                            if (isset($_SESSION["userid"]) != null) {
                                                                                echo  'value="' . $_SESSION["email"] . '" ';
                                                                            }
                                                                            ?> id="" class="box">
                <input type="radio" name="sub" value="Annual" style="margin-top: 30px;margin-bottom: 30px;">
                &nbsp;
                <span class="radio">Annual/Rs. 1500</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="sub" value="Monthly">
                &nbsp;
                <span class="radio">Monthly/Rs. 750</span>
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

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-1.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-2.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-3.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-4.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-5.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                </div>

            </div>

            <div class="swiper arrivals-slider">

                <div class="swiper-wrapper">

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-6.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-7.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-8.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-9.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="image/book-10.png" alt="">
                        </div>
                        <div class="content">
                            <h3>new arrivals</h3>
                            <div class="price">$15.99 <span>$20.99</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>

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

                    <div class="swiper-slide box">
                        <img src="image/pic-1.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                            at sint, eos ex similique facere hic.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-2.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                            at sint, eos ex similique facere hic.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-3.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                            at sint, eos ex similique facere hic.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="swiper-slide box">
                        <img src="image/pic-4.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                            at sint, eos ex similique facere hic.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-5.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                            at sint, eos ex similique facere hic.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="image/pic-6.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam
                            at sint, eos ex similique facere hic.</p>
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

        </section>

        <!-- reviews section ends -->

        <!-- blogs section starts  -->

        <!-- <section class="blogs" id="blogs">

        <h1 class="heading"> <span>our blogs</span> </h1>

        <div class="swiper blogs-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn-n">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn-n">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn-n">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn-n">read more</a>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>blog title goes here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                        <a href="#" class="btn-n">read more</a>
                    </div>
                </div>

            </div>

        </div>

    </section> -->

        <!-- blogs section ends -->


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