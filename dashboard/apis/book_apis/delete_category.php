<?php

    include '../connection.php';


        $id = $_GET["id"];

        $query = mysqli_query($con, "DELETE FROM `tbl_book_category` WHERE b_id = '$id'");

        if($query){
            header("location:../../views/index.php?viewcat=Successfully Deleted");
        }
        else{
            header("location:../../views/index.php?viewcat=Try Again");
        }

?>