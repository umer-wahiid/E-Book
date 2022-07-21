<?php
if(isset($_POST["btn"])){
        $id = $_SESSION["userid"];
        $name = $_POST["txtname"];
        $email = $_POST["txtemail"];
        $contact = $_POST["txtcontact"];
        $address = $_POST["txtage"];

        $unique = uniqid();

        $uimage_path = "../profileImage/".$unique.basename($_FILES['txtimage']['name']);
        $uimage = "../apis/profileImage/".$unique.basename($_FILES['txtimage']['name']);
        $tmp_location = $_FILES['txtimage']['tmp_name'];


        move_uploaded_file($tmp_location, $uimage_path); //(Specifies the filename of the uploaded file, Specifies the new location for the file)

        $insert_q = "INSERT INTO `tbl_user_data`(`user_name`, `user_email`, `user_address`, `user_phone`, `user_image`) VALUES ('$name','$email','$address','$contact','$uimage')";

        $insert_e = mysqli_query($con, $insert_q);
        
        if($insert_e){
            header("location:../../views/user.php?response=Successfully Inserted");
        }
        else{
            header("location:../../views/user.php?response=Try Again");
        }



        // move_uploaded_file($tmplocation,"admin/profileimage/".$image);

        // $querry = mysqli_query($con,"UPDATE user set uname='$name' , uemail='$email' , unumber='$contact' , uage='$age' , uprofile='$image' where uid='$id' ");
        
        // if ($querry > 0) {
        //     header("location:profile.php");
        // } 
        // else {
        //     echo "<h1>VALUES NOT Updated</h1>";
        // }
    }
    ?>