<?php

    require '../connection.php';

    session_start();

    if(isset($_SESSION["userid"])!=null){
        header("location:../../views/index.php");
    }
    else{

        if(isset($_POST["login"])){
            $email = $_POST["vemail"];
            $password = $_POST["vpassword"];


            $select_q = mysqli_query($con, "SELECT * from tbl_user_data where user_email ='$email' AND user_password = '$password'");
            $rowNum = mysqli_num_rows($select_q);
            $fetchArray = mysqli_fetch_array($select_q);           

            if($rowNum>0){
                $_SESSION["name"] = $fetchArray[2];
                $_SESSION["image"] = $fetchArray[6];
                $_SESSION["email"] = $fetchArray[3];
                $_SESSION["contact"] = $fetchArray[5];
                $_SESSION["address"] = $fetchArray[4];
                $_SESSION["subscribtion"] = $fetchArray[7];
                $_SESSION["userid"] = $fetchArray[0];
                $_SESSION["role_id"] = $fetchArray[1];

                if($_SESSION["role_id"] == 2){
                header("location:../../../dashboard/views/index.php");}
                else if($_SESSION["role_id"] == 1){
                header("location:../../views/index.php?alert=Welcome Back");
                }
                
            }
            else{
                echo "<h1>Login Failed</h1>";
            }
        }

    }