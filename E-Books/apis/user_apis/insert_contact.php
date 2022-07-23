<?php

require "../connection.php";

if (isset($_POST['send'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $insert_queery = "INSERT INTO `tbl_user_contact`(`contact_name`, `contact_email`, `contact_message`) VALUES ('$name','$email','$message')";

    $insert_e = mysqli_query($con, $insert_queery);

    if ($insert_e) {
        header("location:../../views/contact.php?alert=Message Send");
    }
}
