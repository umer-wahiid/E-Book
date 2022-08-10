    <?php

    include '../connection.php';

    $id = $_GET["id"];

    $query = mysqli_query($con, "DELETE FROM `tbl_user_reviews` WHERE review_id = '$id'");

    if ($query) {
        header("location:../../views/reviews.php?alert=Delete Successful");
    } else {
        header("location:../../views/reviews.php?alert=Invalid Error");
    }
    ?>
    
