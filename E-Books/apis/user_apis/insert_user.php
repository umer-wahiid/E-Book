    <?php

    require "../connection.php";

    if (isset($_POST['submit']) && isset($_POST['uname'])) {

        $name = mysqli_real_escape_string($con, $_POST['uname']);
        $email = mysqli_real_escape_string($con, $_POST['uemail']);
        $address = mysqli_real_escape_string($con, $_POST['uaddress']);
        $phone = mysqli_real_escape_string($con, $_POST['uphone']);
        $password = mysqli_real_escape_string($con, $_POST['upassword']);

        $insert_q = "INSERT INTO `tbl_user_data`(`role_id`,`user_name`, `user_email`, `user_address`, `user_phone`, `user_image`, `user_subscribtion`, `user_password`) VALUES ('1','$name','$email','$address','$phone','image','No','$password')";

        $insert_e = mysqli_query($con, $insert_q);

        if ($insert_e) {
            header("location:../../views/index.php?alert=Welcome");
        } else {
            header("location:../../views/index.php?alert=Something went wrong");
        };
    }
    ?>
