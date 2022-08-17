<?php

include "../apis/connection.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
</head>

<body>

    <?= include "nav.php"; ?>

    <section class="featured" id="bestselling">

        <h1 class="heading"><span>All Products</span></h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <?php

                $category = mysqli_query($con, "SELECT * FROM `tbl_book_category` WHERE `b_category`='Best Sellers'");
                $category_row = mysqli_fetch_array($category);
                $fetch_book = mysqli_query($con, 'SELECT * FROM tbl_book_detail
                WHERE book_category_1=' . $category_row[0] . ' OR book_category_2=' . $category_row[0] . ' OR book_category_3=' . $category_row[0] . '
                ');
                while ($row = mysqli_fetch_array($fetch_book)) {
                    echo '
                <div class="swiper-slide box">
                <div class="icons">
                <a href="#" class="fas fa-search"></a>
                <a href="#" class="fas fa-heart"></a>
                <a data-bs-toggle="modal" data-bs-target="#myModal' . $row[0] . '" style="background: transparent;">
                <p class="fas fa-eye" data-bs-toggle="tooltip" title="Book Details"></p>
                </a>
                </div>
                <div class="image">
                <img src="../../dashboard/views/' . $row[17] . '" alt="">
                </div>
                <div class="content">
                <h3>' . $row[1] . '</h3>
                <div class="price">Rs.' . $row[14] . ' <span>$20.99</span></div>
                <form action="../apis/cart_apis/add_to_cart.php" method="POST">
                        <input type="hidden" name="book_name" value="' . $row[1] . '">
                        <input type="hidden" name="book_price" value="' . $row[14] . '">
                        <input type="hidden" name="book_image" value="' . $row[17] . '">
                        <input type="hidden" value="' . $row[0] . '" name="book_id" />';
                    if (isset($_SESSION["userid"]) != null) {
                        echo '
                        <input type="submit" class="btn-n" name="add_to_cart" value="Add To Cart">
                </form>
                        ';
                    } else {
                        echo '
                        <a href="#" class="btn-n">Add To Cart</a>';
                    }
                    echo '
                    </div>
                </div>
                    ';
                };

                ?>
            </div>
        </div>

    </section>


    <?= include "footer.php"; ?>

</body>

</html>