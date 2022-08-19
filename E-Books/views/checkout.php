<?php
session_start();

include "../apis/connection.php";

$user_id = $_SESSION['userid'];


if (isset($_POST['order_btn'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $number = $_POST['number'];
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $method = mysqli_real_escape_string($con, $_POST['method']);
    $address = mysqli_real_escape_string($con, $_POST['house/flat']);
    $placed_on = date('d-M-Y');

    $cart_total = 0;
    $cart_products[] = '';

    $cart_query = mysqli_query($con, "SELECT * FROM `tbl_cart` WHERE cart_user_id = '$user_id'");
    if (mysqli_num_rows($cart_query) > 0) {
        while ($cart_item = mysqli_fetch_assoc($cart_query)) {
            $cart_products[] = $cart_item['cart_book_name'] . ' (' . $cart_item['cart_book_quantity'] . ') ';
            $sub_total = ($cart_item['cart_final_price'] * $cart_item['cart_book_quantity']);
            $cart_total += $sub_total;
        }
    }

    $total_products = implode(', ', $cart_products);

    $order_query = mysqli_query($con, "SELECT * FROM `tbl_book_order` 
    WHERE user_name = '$name' 
    AND user_number = '$number' 
    AND user_email = '$email' 
    AND order_method = '$method' 
    AND user_address = '$address' 
    AND total_products = '$total_products' 
    AND total_price = '$cart_total'");

    if ($cart_total == 0) {
        $message[] = 'your cart is empty';
    } else {
        if (mysqli_num_rows($order_query) > 0) {
            $message[] = 'order already placed!';
        } else {
            mysqli_query($con, "INSERT INTO `tbl_book_order`(`user_id`, `user_name`, `user_number`, `user_email`, `order_method`, `user_address`, `total_products`, `total_price`, `placed_on`,`payment_status`) 
            VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_products', '$cart_total', '$placed_on','pending')");
            $message[] = 'order placed successfully!';
            mysqli_query($con, "DELETE FROM `tbl_cart` WHERE user_id = '$user_id'");
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out - E-Book</title>
</head>

<style>
    .checkout form {
        max-width: 1200px;
        padding: 2rem;
        margin: 0 auto;
        border: var(--border);
        background-color: var(--light-bg);
        border-radius: .5rem;
    }

    .checkout form h3 {
        text-align: center;
        margin-bottom: 2rem;
        color: var(--black);
        text-transform: uppercase;
        font-size: 3rem;
    }

    .checkout form .flex {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
    }

    .checkout form .flex .inputBox {
        flex: 1 1 40rem;
    }

    .checkout form .flex span {
        font-size: 2rem;
        color: var(--black);
    }

    .checkout form .flex select,
    .checkout form .flex input {
        border: var(--border);
        width: 100%;
        border-radius: .5rem;
        width: 100%;
        background-color: var(--white);
        padding: 1.2rem 1.4rem;
        font-size: 1.8rem;
        margin: 1rem 0;
    }
</style>

<body>

    <?= include "nav.php"; ?>


    <!-- check out form starts -->

    <section class="checkout">

        <form action="" method="post">
            <h3>place your order</h3>
            <div class="flex">
                <div class="inputBox">
                    <span>your name :</span>
                    <input type="text" name="name" readonly 
                    <?php 
                    echo  'value="'.$_SESSION["name"].'" ';
                    ?> 
                    required placeholder="enter your name">
                </div>
                <div class="inputBox">
                    <span>your number :</span>
                    <input type="text" name="number"
                    <?php 
                    echo  'value="'.$_SESSION["contact"].'" ';
                    ?>
                    required placeholder="enter your number">
                </div>
                <div class="inputBox">
                    <span>your email :</span>
                    <input type="email" name="email" readonly
                    <?php 
                    echo  'value="'.$_SESSION["email"].'" ';
                    ?>
                    required placeholder="enter your email">
                </div>
                <div class="inputBox">
                    <span>payment method :</span>
                    <select name="method">
                        <option value="cash on delivery">cash on delivery</option>
                        <option value="credit card/debit card">credit card/debit card</option>
                        <option value="jazzcash">jazzcash</option>
                        <option value="easypaisa">easypaisa</option>
                        <option value="u-paisa">u-paisa</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="house/flat"
                    <?php 
                    echo  'value="'.$_SESSION["address"].'" ';
                    ?>
                    required placeholder="e.g. house/flat no.">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" value="Karachi" required placeholder="e.g. karachi">
                </div>
            </div>
            <input type="submit" value="order now" class="btn-n" name="order_btn">
        </form>

    </section>

    <!-- check out form ends -->




    <?= include "footer.php"; ?>



</body>

</html>