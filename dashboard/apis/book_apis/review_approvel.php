    <?php

    include '../connection.php';

    $uid = $_GET["id"];

    $update_q = "UPDATE `tbl_user_reviews` SET `review_approvel` = 'Yes' WHERE `review_id` = '$uid'";
    $update_e = mysqli_query($con, $update_q);
    if ($update_e > 0) {
        header("location:../../views/index.php?alert=Push Successful");
    } else {
        echo '<h1>Invalid Error</h1>';
    }

    ?>