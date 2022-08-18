<?php

include '../connection.php';

if (isset($_POST["quantity"])) {
    $id = $_GET["iid"];
    $qty = $_POST['quantity'];
    $price = $_POST['final_price'];

    $update_q = "UPDATE `tbl_cart` SET `cart_book_quantity`='$qty',`cart_final_price`='$price' WHERE `cart_id`= '$id'";

    $update_e = mysqli_query($con, $update_q);

    if ($update_e) {
        header("location:../../views/cart.php");
    } else {
        header("location:../../views/cart.php?response=Try Again");
    }
}


if (isset($_POST['abc'.$_GET['iid']])) {
    $id = $_GET["iid"];
    $price = $_POST['final_price'];
    $formprice = $_POST['form_price'];
    $form = $_POST['abc'.$id];

    $update_q = "UPDATE `tbl_cart` SET `cart_book_form`='$form',`cart_final_price`='$price',`cart_form_price`='$formprice' WHERE `cart_id`= '$id'";

    $update_e = mysqli_query($con, $update_q);

    if ($update_e) {
        header("location:../../views/cart.php");
    } else {
        header("location:../../views/cart.php?response=Try Again");
    }
}
?>