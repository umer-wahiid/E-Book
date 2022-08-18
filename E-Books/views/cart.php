<?php

session_start();
include "../apis/connection.php";

$user_id = $_SESSION['userid'];

if (!isset($user_id)) {
    header('location:../apis/user_apis/login_user.php');
}

if (isset($_POST['update_cart'])) {
    $cart_id = $_POST['cart_id'];
    $cart_quantity = $_POST['cart_quantity'];
    mysqli_query($con, "UPDATE `tbl_cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
    $message[] = 'cart quantity updated!';
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($con, "DELETE FROM `tbl_cart` WHERE cart_id = '$delete_id'") or die('query failed');
    header('location:cart.php');
}

if (isset($_GET['delete_all'])) {
    mysqli_query($con, "DELETE FROM `tbl_cart` WHERE cart_user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
}

?>
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
        max-height: 230px;
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

    /* .set_quantity::after {
        content: "(Note, 1 piece)";
        width: auto;
        height: auto;
        text-align: center;
        position: absolute;
        bottom: -20px;
        right: 1.5rem;
        font-size: 0.8rem;
    } */

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
        line-height: 19px;
        padding: 2px;
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
    <?php
    include "nav.php";
    ?>

    <!-- cart section starts -->

    <h1 class="heading" style="margin-top: 50px;"><span>Your Cart</span></h1>

    <body class="bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-11 mx-auto">
                    <div class="row mt-5 gx-3">
                        <!-- left side div -->
                        <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
                            <div class="card p-4">
                                <h3 style="cursor: pointer;margin-bottom:12px;"><i class="fas fa-trash-alt"></i>
                                    <a style="color:black;" href="cart.php?delete_all"
                                        onclick="return confirm('delete all from cart?');">
                                        REMOVE ALL ITEMS
                                    </a>
                                </h3>
                                <?php
                                $grand_total = 0;
                                $select_cart = mysqli_query($con, "SELECT * FROM `tbl_cart` WHERE cart_user_id = '$user_id'") or die('query failed');
                                if (mysqli_num_rows($select_cart) > 0) {
                                    while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                                ?>
                                <div class="row">
                                    <!-- cart images div -->
                                    <div class="col-md-3 col-10 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img"
                                        style="height: 250px;">
                                        <img style="height:230px;"
                                            src="../../dashboard/views/<?php echo $fetch_cart['cart_book_image']; ?>"
                                            alt="cart img">
                                    </div><!-- cart product details -->
                                    <div class="col-md-9 col-11 mx-auto px-4 mt-2">
                                        <div class="row">
                                            <!-- product name  -->
                                            <div class="col-6 card-title">
                                                <h1 class="mb-4 product_name">
                                                    <?php echo $fetch_cart['cart_book_name']; ?>
                                                </h1>
                                                <form
                                                    action="<?php echo '../apis/cart_apis/edit_cart.php?iid='.$fetch_cart['cart_id'].''?>"
                                                    method="POST">


                                                    <input type="hidden" name="form_price"
                                                        id="formp<?php echo $fetch_cart['cart_id']; ?>" value=''>
                                                    <input type="hidden" name="final_price"
                                                        id="itemva<?php echo $fetch_cart['cart_id']; ?>" value=''>
                                                    <input type="radio" name="abc<?php echo $fetch_cart['cart_id']; ?>"
                                                        onclick="radio() ; this.form.submit()" id="abc" value="PDFS">
                                                    &nbsp;
                                                    <label style="font-size: 16px;" for="">PDFS</label>
                                                    <br>
                                                    <input type="radio" name="abc<?php echo $fetch_cart['cart_id']; ?>"
                                                        onclick="radio1() ; this.form.submit()" id="abc" value="CD">
                                                    &nbsp;
                                                    <label style="font-size: 16px;" for="">CD</label>
                                                    <br>
                                                    <input type="radio" name="abc<?php echo $fetch_cart['cart_id']; ?>"
                                                        onclick="radio2() ; this.form.submit()" id="abc"
                                                        value="Hard Copy" checked>
                                                    &nbsp;
                                                    <label style="font-size: 16px;" for="">Hard Copy</label>


                                                </form>
                                            </div>
                                            <!-- quantity inc dec -->
                                            <div class="col-6">
                                                <ul class="pagination justify-content-end set_quantity">
                                                    <li class="page-item">


                                                        <form
                                                            action="<?php echo '../apis/cart_apis/edit_cart.php?iid='.$fetch_cart['cart_id'].''?>"
                                                            method="POST">
                                                            <input type="hidden" name="final_price" id="itemva"
                                                                value='<?php echo $fetch_cart['cart_final_price']; ?>'>
                                                            <input type="number" name="quantity" min="1" max="5"
                                                                class="page-link"
                                                                id="textbox<?php echo $fetch_cart['cart_id']; ?>"
                                                                value="<?php echo $fetch_cart['cart_book_quantity']; ?>"
                                                                onchange="qty();this.form.submit()">
                                                        </form>


                                                        <input type="hidden"
                                                            id="origorigprice<?php echo $fetch_cart['cart_id']; ?>"
                                                            value="<?php echo $fetch_cart['cart_final_price']; ?>">
                                                        <input type="hidden"
                                                            id="origprice<?php echo $fetch_cart['cart_id']; ?>"
                                                            value="<?php echo $fetch_cart['cart_book_price']; ?>">
                                                        <input type="hidden"
                                                            id="origpdfprice<?php echo $fetch_cart['cart_id']; ?>"
                                                            value="<?php echo $fetch_cart['cart_pdf_price']; ?>">
                                                        <input type="hidden"
                                                            id="origcdprice<?php echo $fetch_cart['cart_id']; ?>"
                                                            value="<?php echo $fetch_cart['cart_cd_price']; ?>">


                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- //remover move and price -->
                                        <div class="row">
                                            <div class="col-6 d-flex justify-content-between remove_wish">
                                                <p style="cursor: pointer;font-size:12px;color:var(--green);"><i
                                                        class="fas fa-trash-alt"></i>
                                                    <a style="color:var(--green)"
                                                        href="cart.php?delete=<?php echo $fetch_cart['cart_id']; ?>"
                                                        onclick="return confirm('delete this from cart?');">
                                                        REMOVE ITEM
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end price_money">
                                                <h3>Price: Rs.<span
                                                        id="formprice<?php echo $fetch_cart['cart_id']; ?>"><?php echo $fetch_cart['cart_form_price']; ?></span>
                                                </h3>
                                            </div>
                                            <div class="col-3 d-flex justify-content-end price_money">
                                                <h3>Total: Rs.<span
                                                        id="itemval<?php echo $fetch_cart['cart_id']; ?>"><?php echo $fetch_cart['cart_final_price']; ?></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <script>
                                const qty = () => {

                                    const orig = parseInt(document.getElementById(
                                        'formprice<?php echo $fetch_cart['cart_id']; ?>').innerHTML);
                                    const quantity = document.getElementById(
                                        'textbox<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const now = parseInt(orig * quantity);
                                    document.getElementById('itemva').value = now;
                                    document.getElementById('itemval<?php echo $fetch_cart['cart_id']; ?>')
                                        .innerHTML = now;

                                }


                                const radio = () => {

                                    const abc = document.getElementsByName(
                                        'abc<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const orig = document.getElementById(
                                        'origprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const origpdf = document.getElementById(
                                        'origpdfprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const origcd = document.getElementById(
                                        'origcdprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const quantity = document.getElementById(
                                        'textbox<?php echo $fetch_cart['cart_id']; ?>').value;
                                    document.getElementById('itemval<?php echo $fetch_cart['cart_id']; ?>')
                                        .innerHTML = origpdf * quantity;
                                    document.getElementById('itemva<?php echo $fetch_cart['cart_id']; ?>')
                                        .value = origpdf * quantity;
                                    document.getElementById('formprice<?php echo $fetch_cart['cart_id']; ?>')
                                        .innerHTML = origpdf;
                                    document.getElementById('formp<?php echo $fetch_cart['cart_id']; ?>')
                                        .value = origpdf;



                                }
                                const radio1 = () => {

                                    const abc = document.getElementsByName(
                                        'abc<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const orig = document.getElementById(
                                        'origprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const origpdf = document.getElementById(
                                        'origpdfprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const origcd = document.getElementById(
                                        'origcdprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const quantity = document.getElementById(
                                        'textbox<?php echo $fetch_cart['cart_id']; ?>').value;
                                    document.getElementById('itemval<?php echo $fetch_cart['cart_id']; ?>')
                                        .innerHTML = origcd * quantity;
                                    document.getElementById('itemva<?php echo $fetch_cart['cart_id']; ?>')
                                        .value = origcd * quantity;
                                    document.getElementById('formprice<?php echo $fetch_cart['cart_id']; ?>')
                                        .innerHTML = origcd;
                                    document.getElementById('formp<?php echo $fetch_cart['cart_id']; ?>')
                                        .value = origcd;



                                }
                                const radio2 = () => {

                                    const abc = document.getElementsByName(
                                        'abc<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const orig = document.getElementById(
                                        'origprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const origpdf = document.getElementById(
                                        'origpdfprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const origcd = document.getElementById(
                                        'origcdprice<?php echo $fetch_cart['cart_id']; ?>').value;
                                    const quantity = document.getElementById(
                                        'textbox<?php echo $fetch_cart['cart_id']; ?>').value;
                                    document.getElementById('itemval<?php echo $fetch_cart['cart_id']; ?>')
                                        .innerHTML = orig * quantity;
                                    document.getElementById('itemva<?php echo $fetch_cart['cart_id']; ?>')
                                        .value = orig * quantity;
                                    document.getElementById('formprice<?php echo $fetch_cart['cart_id']; ?>')
                                        .innerHTML = orig;
                                    document.getElementById('formp<?php echo $fetch_cart['cart_id']; ?>')
                                        .value = orig;


                                }
                                </script>
                                <?php
                            }
                        } 
                        else {
                            echo '<center><p style="font-size:30px;">your cart is empty</p></center>';
                        }
                        ?>
                            </div>
                        </div>
                        <!-- right side div -->
                        <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                            <div class="right_side p-3 shadow bg-white">
                                <h2 class="product_name mb-5">The Total Amount Of</h2>
                                <div class="price_indiv d-flex justify-content-between">
                                    <p>Product amount</p>
                                    <p>Rs.<span id="product_total_amt">0.00</span></p>
                                </div>
                                <div class="price_indiv d-flex justify-content-between">
                                    <p>Shipping Charge</p>
                                    <p>Rs.<span id="shipping_charge">50.0</span></p>
                                </div>
                                <hr />
                                <div class="total-amt d-flex justify-content-between font-weight-bold">
                                    <p>The total amount of (including VAT)</p>
                                    <p>PKR/<span id="total_cart_amt"></span>
                                    </p>
                                </div>
                                <a class="btn-n text-uppercase" href="checkout.php">Check Out</a>
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
            <a class="btn-n" href="index.php#bestselling" style="margin: 15px 0 20px 10px;">Continue Shopping</a>
        </div>

        <!-- cart section ends -->


        <!-- footer section starts -->

        <?php

        include "footer.php";

        ?>


        <script>
        // const abc = parseInt(document.getElementById('itemval').innerHTML);
        // var product_total_amt = document.getElementById('product_total_amt');
        // var shipping_charge = document.getElementById('shipping_charge');
        // var total_cart_amt = document.getElementById('total_cart_amt');
        // var discountCode = document.getElementById('discount_code1');
        // const decreaseNumber = (incdec, itemprice) => {
        //     var itemval = document.getElementById(incdec);
        //     var itemprice = document.getElementById(itemprice);
        //     console.log(itemprice.innerHTML);
        //     // console.log(itemval.value);
        //     if (itemval.value <= 0) {
        //         itemval.value = 0;
        //         alert('Negative quantity not allowed');
        //     } else {
        //         itemval.value = parseInt(itemval.value) - 1;
        //         itemval.style.background = '#fff';
        //         itemval.style.color = '#000';
        //         itemprice.innerHTML = parseInt(itemprice.innerHTML) - abc;
        //         product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) - 0;
        //         total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge
        //             .innerHTML);
        //     }
        // }
        // const increaseNumber = (incdec, itemprice) => {
        //     var itemval = document.getElementById(incdec);
        //     var itemprice = document.getElementById(itemprice);
        //     // console.log(itemval.value);
        //     if (itemval.value >= 5) {
        //         itemval.value = 5;
        //         alert('max 5 allowed');
        //         itemval.style.background = 'red';
        //         itemval.style.color = '#fff';
        //     } else {
        //         itemval.value = parseInt(itemval.value) + 1;
        //         itemprice.innerHTML = parseInt(itemprice.innerHTML) + abc;
        //         product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) + 0;
        //         total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge
        //             .innerHTML);
        //     }
        // }

        // function qty(){



        // qty = () => {
        //                             const orig = document.getElementById(
        //                                 'origpdfprice<?php echo $fetch_cart['cart_id']; ?>').value;
        //                             const quantity = document.getElementById(
        //                                 'textbox<?php echo $fetch_cart['cart_id']; ?>').value;
        //                             const now = (orig * quantity);
        //                             document.getElementById('itemval<?php echo $fetch_cart['cart_id']; ?>')
        //                                 .innerHTML = now;
        //                             document.getElementById('itemva<?php echo $fetch_cart['cart_id']; ?>')
        //                                 .value = now;
        //                         }
        </script>
    </body>

</html>