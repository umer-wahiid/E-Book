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
        header("location:../../views/ViewProduct.php?response=Try Again");
    }
}
?>
