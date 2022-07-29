<?php

include '../connection.php';

if (isset($_POST["btn"])) {
    $toGetCategory_1 = $_POST["txtcategory1"];
    $toGetCategory_2 = $_POST["txtcategory2"];
    $toGetCategory_3 = $_POST["txtcategory3"];

    $query = mysqli_query($con, "insert into tbl_book_category(b_category) values ('$toGetCategory_1')");
    $query = mysqli_query($con, "insert into tbl_book_category(b_category) values ('$toGetCategory_2')");
    $query = mysqli_query($con, "insert into tbl_book_category(b_category) values ('$toGetCategory_3')");

    if ($query) {
        header("location:../../views/index.php?viewcat=Successfully Inserted");
    } else {
        header("location:../../views/index.php?viewcat=Try Again");
    }
}
