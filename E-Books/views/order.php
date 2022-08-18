<?php

session_start();
include "../apis/connection.php";

$user_id = $_SESSION['userid'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>

<style>
    :root {
        --purple: #27ae60;
        --red: #c0392b;
        --orange: #f39c12;
        --black: #333;
        --white: #fff;
        --light-color: #666;
        --light-white: #ccc;
        --light-bg: #f5f5f5;
        --border: .1rem solid var(--black);
        --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    }

    .placed-orders .box-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 1.5rem;
    }

    .placed-orders .box-container .empty {
        flex: 1;
    }

    .placed-orders .box-container .box {
        flex: 1 1 40rem;
        border-radius: .5rem;
        padding: 2rem;
        border: var(--border);
        background-color: var(--light-bg);
        padding: 1rem 2rem;
    }

    .placed-orders .box-container .box p {
        padding: 1rem 0;
        font-size: 2rem;
        color: var(--light-color);
    }

    .placed-orders .box-container .box p span {
        color: var(--purple);
    }

    .search-form form {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        gap: 1rem;
    }

    .search-form form .btn {
        margin-top: 0;
    }

    .search-form form .box {
        width: 100%;
        padding: 1.2rem 1.4rem;
        border: var(--border);
        font-size: 2rem;
        color: var(--black);
        background-color: var(--light-bg);
        border-radius: .5rem;
    }
</style>

<body>

    <?= include "nav.php"; ?>

    <section class="placed-orders">

        <h1 class="title">placed orders</h1>

        <div class="box-container">

            <?php
            $order_query = mysqli_query($con, "SELECT * FROM `tbl_book_order` WHERE user_id = '$user_id'") or die('query failed');
            if (mysqli_num_rows($order_query) > 0) {
                while ($fetch_orders = mysqli_fetch_assoc($order_query)) {
            ?>
                    <div class="box">
                        <p> placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
                        <p> name : <span><?php echo $fetch_orders['user_name']; ?></span> </p>
                        <p> number : <span><?php echo $fetch_orders['user_number']; ?></span> </p>
                        <p> email : <span><?php echo $fetch_orders['user_email']; ?></span> </p>
                        <p> address : <span><?php echo $fetch_orders['user_address']; ?></span> </p>
                        <p> payment method : <span><?php echo $fetch_orders['order_method']; ?></span> </p>
                        <p> your orders : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
                        <p> total price : <span>Rs. <?php echo $fetch_orders['total_price']; ?></span> </p>
                        <p> payment status : <span style="color:<?php if ($fetch_orders['payment_status'] == 'pending') {
                                                                    echo 'red';
                                                                } else {
                                                                    echo 'green';
                                                                } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty">no orders placed yet!</p>';
            }
            ?>
        </div>

    </section>

    <?= include "footer.php"; ?>

</body>

</html>