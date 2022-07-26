    <?php
    include '../connection.php';
    session_start();

    if (isset($_POST["subscribe"])) {

        $sid = $_SESSION["userid"];
        $subscribe = $_POST["sub"];

        $insert_uquery = "UPDATE `tbl_user_data` SET `user_subscribtion`='$subscribe' WHERE `user_id` = '$sid'";
        $insert_e = mysqli_query($con, $insert_uquery);

        if ($insert_e) {
            header("location:../../views/index.php?alert=Subscribed");
        } else {
            header("location:../../views/index.php?alert=Something went wrong");
        }
        
    }
    ?>
