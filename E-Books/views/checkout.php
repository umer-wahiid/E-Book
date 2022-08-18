<?php
session_start();

include "../apis/connection.php";

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
                    <input type="text" name="name" required placeholder="enter your name">
                </div>
                <div class="inputBox">
                    <span>your number :</span>
                    <input type="number" name="number" required placeholder="enter your number">
                </div>
                <div class="inputBox">
                    <span>your email :</span>
                    <input type="email" name="email" required placeholder="enter your email">
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
                    <input type="text" name="house/flat" required placeholder="e.g. house/flat no.">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" required placeholder="e.g. karachi">
                </div>
            </div>
            <input type="submit" value="order now" class="btn-n" name="order_btn">
        </form>

    </section>

    <!-- check out form ends -->




    <?= include "footer.php"; ?>



</body>

</html>