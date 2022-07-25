<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - E-book</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- short icon link -->
    <link rel="shortcut icon" type="image/png" href="image/loader-img.gif">

    <!-- bootstrap 5 css link -->
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <style>
        /* cart */

        .small-container {
            max-width: 1200px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }

        .cart-page {
            margin: 80px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        td p {
            font-size: 18px;
        }

        td small {
            font-size: 14px;
        }

        th {
            text-align: left;
            padding: 5px;
            color: #fff;
            background: var(--dark-color);
            font-weight: normal;
            font-size: 20px;
        }

        td {
            padding: 10px 5px;
            font-size: 20px;
        }

        td input {
            width: 40px;
            height: 30px;
            padding: 5px;
        }

        td a {
            color: var(--green);
            font-size: 12px;
        }

        td img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid var(--dark-color);
            width: 100%;
            max-width: 400px;
        }

        td:last-child {
            text-align: right;
        }

        th:last-child {
            text-align: right;
        }
    </style>

    <!-- header section starts -->

    <?php

    include "nav.php";

    ?>

    <!-- header section ends -->

    <!-- cart section starts -->

    <!-- ------------- cart items details ----------------  -->

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/A Gentleman in Moscow.jpg">
                        <div>
                            <p>A Gentleman in Moscow</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/book-1.png">
                        <div>
                            <p>A Gentleman in Moscow</p>
                            <small>Price: $75.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="image/book-2.png">
                        <div>
                            <p>A Gentleman in Moscow</p>
                            <small>Price: $75.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$235.00</td>
                </tr>
            </table>
        </div>
        <button class="btn-n">Check Out</button>
    </div>

    <!-- cart section ends -->


    <!-- footer section starts -->

    <?php

    include "footer.php";

    ?>


</body>

</html>