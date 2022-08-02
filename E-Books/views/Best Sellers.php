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

    <!-- short icon link -->
    <link rel="shortcut icon" type="image/png" href="image/loader-img.gif">
    <title>Best Sellers</title>
    <style>
        * {
            text-transform: lowercase;
        }

        /* .swiper-wrapper{
            width: 0%;
        } */
    </style>
</head>

<body>
    <!-- header section starts  -->

    <?php

    include 'nav.php';

    ?>




    <section class="featured" id="bestselling">

        <h1 class="heading"><span>Most Selling</span> </h1>

        <div class="cat-page">

            <div class="swiper-wrapper" style="display: flex;flex-wrap: wrap;width:280px;">
                <!-- flex-flow:row; -->
                <?php

                $fetch_book = mysqli_query($con, "SELECT * FROM tbl_book_detail
                INNER JOIN tbl_book_category as tb1
                ON
                tbl_book_detail.book_category_1 = tb1.b_id
                INNER JOIN tbl_book_category as tb2
                ON
                tbl_book_detail.book_category_2 = tb2.b_id
                INNER JOIN tbl_book_category as tb3
                ON
                tbl_book_detail.book_category_3 = tb3.b_id
                WHERE book_category_1=14 OR book_category_2=14 OR book_category_3=14
                ");
                while ($row = mysqli_fetch_array($fetch_book)) {
                    echo '
                    <div class="swiper-slide box m-4">
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
                }
                ?>
            </div>
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