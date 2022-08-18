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
</style>


<body>

    <?= include "nav.php"; ?>

    <section class="products">

        <h1 class="title">latest products</h1>

        <div class="box-container">

            <form action="" method="post" class="box">
                <img class="image" src="image/book-1.png" alt="">
                <div class="name">A Gentleman in Moscow</div>
                <div class="price">Rs.1700</div>
                <!-- <input type="number" min="1" name="product_quantity" value="1" class="qty"> -->
                <input type="hidden" name="product_name" value="A Gentleman in Moscow">
                <input type="hidden" name="product_price" value="1700">
                <input type="hidden" name="product_image" value="A Gentleman in Moscow.png">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn-n">
            </form>

        </div>

    </section>


    <?= include "footer.php"; ?>

</body>

</html>