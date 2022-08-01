    <?php

    include '../connection.php';

    $id = $_GET["id"];

    $query = mysqli_query($con, "DELETE FROM `tbl_book_detail` WHERE book_id = '$id'");

    if ($query) {
        header("location:../../views/index.php?viewproduct=Successfully Deleted");
    } else {
        header("location:../../views/index.php?viewproduct=Try Again");
    }
    ?>