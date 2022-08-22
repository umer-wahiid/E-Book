<?php

    require '../connection.php';
    session_start();

    if(isset($_POST["btn-edit"])){
        $id = $_SESSION["userid"];
        $name = $_POST["txtname"];
        $email = $_POST["txtemail"];
        $contact = $_POST["txtcontact"];
        $address = $_POST["txtaddress"];
        
        
        
        $unique = uniqid();
        
        $uimage_path = "../profileImage/".$unique.basename($_FILES['txtimage']['name']);
        $uimage = "../apis/profileImage/".$unique.basename($_FILES['txtimage']['name']);
        $tmp_location = $_FILES['txtimage']['tmp_name'];
        $allowed_types = array(
            'jpg',
            'jpeg',
            'png',
            'jfif'
        );
        $typecheck = pathinfo($uimage_path, PATHINFO_EXTENSION);
        if (in_array($typecheck, $allowed_types)){
        

            move_uploaded_file($tmp_location, $uimage_path); //(Specifies the filename of the uploaded file, Specifies the new location for the file)

            $insert_q = "UPDATE `tbl_user_data` SET `user_name`='$name',`user_email`='$email',`user_address`='$address',`user_phone`='$contact',`user_image`='$uimage' WHERE `user_id` = '$id'";

            $insert_e = mysqli_query($con, $insert_q);
            
            if($insert_e){
                header("location:../../views/profile.php?response=Successfully Inserted");
            }
            else{
                header("location:../../views/profile.php?response=Try Again");
            }
        }
        else{
            header("location:../../views/profile.php?response=Try Again");
        }    
    }

    
    
    ?>