<?php

    include '../connection.php';

    if (isset($_POST["txtcategory"])) {
        $toGetCategoryName = $_POST["txtcategory"];

        $query = mysqli_query($con, "insert into tbl_book_category(b_category) values ('$toGetCategoryName')");

        if($query){
            header("location:../../views/index.php?viewcat=Successfully Inserted");
        }
        else{
            header("location:../../views/index.php?viewcat=Try Again");
        }
    }
?>