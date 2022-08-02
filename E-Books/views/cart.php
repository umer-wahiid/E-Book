<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - E-book</title>
</head>

<body>

    <style>
        /* cart */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Mulish', sans-serif;
        }

        :root {
            --text-clr: #4f4f4f;
        }

        p {
            color: #6c757d;
        }

        a {
            text-decoration: none;
            color: var(--text-clr);
        }

        a:hover {
            text-decoration: none;
            color: var(--text-clr);
        }

        h2 {
            color: var(--text-clr);
            font-size: 1.5rem;
        }

        .main_cart {
            background: #fff;
        }

        .card {
            border: none;
        }

        .product_img img {
            min-width: 200px;
            max-height: 200px;
        }

        .product_name {
            color: black;
            font-size: 1.4rem;
            text-transform: capitalize;
            font-weight: 500;
        }

        .card-title p {
            font-size: 0.9rem;
            font-weight: 500;
        }

        .remove-and-wish p {
            font-size: 0.8rem;
            margin-bottom: 0;
        }

        .price-money h3 {
            font-size: 1rem;
            font-weight: 600;
        }

        .set_quantity {
            position: relative;
        }

        .set_quantity::after {
            content: "(Note, 1 piece)";
            width: auto;
            height: auto;
            text-align: center;
            position: absolute;
            bottom: -20px;
            right: 1.5rem;
            font-size: 0.8rem;
        }

        .page-link {
            line-height: 16px;
            width: 45px;
            font-size: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--text-clr);
        }

        .page-item input {
            line-height: 18px;
            padding: 3px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .page-link:hover {
            text-decoration: none;
            color: #495057;
            outline: none !important;
        }

        .page-link:focus {
            box-shadow: none;
        }

        .price_indiv p {
            font-size: 1.1rem;
        }
    </style>

    <!-- header section starts -->

    <?php

    include "nav.php";

    ?>

    <!-- header section ends -->

    <!-- cart section starts -->

    <body class="bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-11 mx-auto">
                    <div class="row mt-5 gx-3">
                        <!-- left side div -->
                        <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
                            <div class="card p-4">
                                <h2 class="py-4 font-weight-bold">Cart (2 items)</h2>
                                <div class="row">
                                    <!-- cart images div -->
                                    <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                                        <img src="image/A Gentleman in Moscow.jpg" alt="cart img">
                                    </div>




                                    <!-- cart product details -->
                                    <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                        <div class="row">
                                            <!-- product name  -->
                                            <div class="col-6 card-title">
                                                <h1 class="mb-4 product_name">A Gentleman in Moscow</h1>
                                                <input type="radio" name="" value="PDFS">
                                                &nbsp;
                                                <label style="font-size: 16px;" for="">PDFS</label>
                                                <br>
                                                <input type="radio" name="" value="CD">
                                                &nbsp;
                                                <label style="font-size: 16px;" for="">CD</label>
                                                <br>
                                                <input type="radio" name="" value="Hard Copy">
                                                &nbsp;
                                                <label style="font-size: 16px;" for="">Hard Copy</label>
                                            </div>
                                            <!-- quantity inc dec -->
                                            <div class="col-6">
                                                <ul class="pagination justify-content-end set_quantity">
                                                    <li class="page-item">
                                                        <button class="page-link " onclick="decreaseNumber('textbox','itemval')">
                                                            <i class="fas fa-minus"></i> </button>
                                                    </li>
                                                    <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox">
                                                    </li>
                                                    <li class="page-item">
                                                        <button class="page-link" onclick="increaseNumber('textbox','itemval')"> <i class="fas fa-plus"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- //remover move and price -->
                                        <div class="row">
                                            <div class="col-8 d-flex justify-content-between remove_wish">
                                                <p style="cursor: pointer;"><i class="fas fa-trash-alt"></i> REMOVE ITEM</p>
                                            </div>
                                            <div class="col-4 d-flex justify-content-end price_money">
                                                <h3>$<span id="itemval">0.00 </span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <!-- 2nd cart product -->
                            <div class="card p-4">
                                <div class="row">
                                    <!-- cart images div -->
                                    <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                                        <img src="image/The Book Thief.jpg" class="img-fluid" alt="cart img">
                                    </div>




                                    <!-- cart product details -->
                                    <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                        <div class="row">
                                            <!-- product name  -->
                                            <div class="col-6 card-title">
                                                <h1 class="mb-4 product_name">The Book Thief</h1>
                                                <input type="radio" name="" value="PDFS">
                                                &nbsp;
                                                <label style="font-size: 16px;" for="">PDFS</label>
                                                <br>
                                                <input type="radio" name="" value="CD">
                                                &nbsp;
                                                <label style="font-size: 16px;" for="">CD</label>
                                                <br>
                                                <input type="radio" name="" value="Hard Copy">
                                                &nbsp;
                                                <label style="font-size: 16px;" for="">Hard Copy</label>
                                            </div>
                                            <!-- quantity inc dec -->
                                            <div class="col-6">
                                                <ul class="pagination justify-content-end set_quantity">
                                                    <li class="page-item">
                                                        <button class="page-link " onclick="decreaseNumber('textbox1','itemval1')"> <i class="fas fa-minus"></i> </button>
                                                    </li>
                                                    <li class="page-item"><input type="text" name="" class="page-link" value="0" id="textbox1">
                                                    </li>
                                                    <li class="page-item">
                                                        <button class="page-link" onclick="increaseNumber('textbox1','itemval1')"> <i class="fas fa-plus"></i></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- //remover move and price -->
                                        <div class="row">
                                            <div class="col-8 d-flex justify-content-between remove_wish">
                                                <p style="cursor: pointer;"><i class="fas fa-trash-alt"></i> REMOVE ITEM</p>
                                            </div>
                                            <div class="col-4 d-flex justify-content-end price_money">
                                                <h3>$<span id="itemval1">0.00 </span> </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- right side div -->
                        <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                            <div class="right_side p-3 shadow bg-white">
                                <h2 class="product_name mb-5">The Total Amount Of</h2>
                                <div class="price_indiv d-flex justify-content-between">
                                    <p>Product amount</p>
                                    <p>$<span id="product_total_amt">0.00</span></p>
                                </div>
                                <div class="price_indiv d-flex justify-content-between">
                                    <p>Shipping Charge</p>
                                    <p>$<span id="shipping_charge">50.0</span></p>
                                </div>
                                <hr />
                                <div class="total-amt d-flex justify-content-between font-weight-bold">
                                    <p>The total amount of (including VAT)</p>
                                    <p>$<span id="total_cart_amt">0.00</span></p>
                                </div>
                                <button class="btn-n text-uppercase">Checkout</button>
                            </div>

                            <div class="mt-3 shadow p-3 bg-white">
                                <div class="pt-4">
                                    <h5 class="mb-4">Expected delivery date</h5>
                                    <p>July 27th 2020 - July 29th 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cart section ends -->


        <!-- footer section starts -->

        <?php

        include "footer.php";

        ?>


    </body>

</html>