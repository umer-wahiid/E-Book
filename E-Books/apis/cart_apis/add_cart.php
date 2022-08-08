<?php

require "../connection.php";
session_start();

    $product_id = $_GET['id'];
    $user_id = $_SESSION["userid"];
    $user_name = $_SESSION["name"];
    // $user_name = $_POST['uname'];

    $insert_q = "INSERT INTO `tbl_cart`(`cart_book_id`, `cart_user_id`,`cart_user_name`) VALUES ('$product_id','$user_id','$user_name')";

    $insert_e = mysqli_query($con, $insert_q);

    if ($insert_e) {
        header("location:../../views/index.php?alert=Welcome");
    } else {
        header("location:../../views/index.php?alert=Something went wrong");
    };
?>