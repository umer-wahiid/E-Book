    <?php

    include "../connection.php";

    if (isset($_POST["search-btn"])) {
        $search = $_POST["search"];

        $select_q = "SELECT * FROM `tbl_book_detail` WHERE book_title LIKE '%{$search}%'";
        $select_e = mysqli_query($con, $select_q);

        if ($select_e) {
            header("location:../../views/search.php");
        } else {
            echo "<h1>Try Different Keyworda</h1>";
        }
    }

    ?>