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

<style>
    /* All Products */
    .products .box-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, 30rem);
        align-items: flex-start;
        gap: 1.5rem;
        justify-content: center;
    }

    .products .box-container .box {
        border-radius: .5rem;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        padding: 2rem;
        text-align: center;
        border: var(--border);
        position: relative;
    }

    .products .box-container .box .image {
        height: 30rem;
    }

    .products .box-container .box .name {
        padding: 1rem 0;
        font-size: 2rem;
        color: var(--black);
    }

    .products .box-container .box .price {
        font-size: 2.2rem;
        color: var(--black);
        padding-top: 1rem;
    }

    .products .box-container .box .price span {
        font-size: 1.5rem;
        color: var(--light-color);
        text-decoration: line-through;
    }

    .products .box-container .box .icons {
        border-bottom: var(--border-hover);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        background: #fff;
        z-index: 1;
        transform: translateY(-105%);
    }

    .products .box-container .box:hover .icons {
        transform: translateY(0%);
    }

    .products .box-container .box .icons a {
        color: var(--black);
        font-size: 2.2rem;
        padding: 1.3rem 1.5rem;
    }

    .products .box-container .box .icons a:hover {
        background: var(--green);
        color: #fff;
    }

    .empty {
        padding: 1.5rem;
        text-align: center;
        border: var(--border);
        background-color: var(--white);
        color: var(--red);
        font-size: 2rem;
    }
</style>


<body>

    <?= include "nav.php"; ?>

    <section class="products">

        <h1 class="title">latest products</h1>

        <div class="box-container">

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
            if (mysqli_num_rows($fetch_book) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($fetch_book)) {

            ?>
                    <form action="" method="post" class="box">
                        <div class="icons">
                            <a href="#" class="fas fa-search"></a>
                            <a href="#" class="fas fa-heart"></a>
                            <a data-bs-toggle="modal" data-bs-target="#myModal<?php echo $fetch_product['book_id']; ?>" style="background: transparent;">
                                <p class="fas fa-eye" data-bs-toggle="tooltip" title="Book Details"></p>
                            </a>
                        </div>
                        <img class="image" src="../../dashboard/views/<?php echo $fetch_product['book_image']; ?>" alt="">
                        <div class="name"><?php echo $fetch_product['book_title']; ?></div>
                        <div class="price"><?php echo $fetch_product['book_price_hardcopy']; ?></div>
                        <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty"> -->
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['book_title']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['book_price_hardcopy']; ?>">
                        <input type="hidden" name="pdf_price" value="<?php echo $fetch_product['book_price_pdf']; ?>">
                        <input type="hidden" name="cd_price" value="<?php echo $fetch_product['book_price_cd']; ?>">
                        <input type="hidden" name="final_price" value="<?php echo $fetch_product['book_price_hardcopy']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['book_image']; ?>">
                        <input type="hidden" value="<?php echo $fetch_product['book_id']; ?>" name="book_id" />';
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn-n">
                    </form>
            <?php
                }
            } else {
                echo '<p class="empty">no products added yet!</p>';
            }
            ?>

        </div>

    </section>


    <?= include "footer.php"; ?>

</body>

</html>