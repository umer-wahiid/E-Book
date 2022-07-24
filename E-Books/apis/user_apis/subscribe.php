<?php
    require '../connection.php';
    session_start();
    
    if(isset($_POST['subs'])){

        $id = $_SESSION['userid'];
        $subs = $_POST['subs'];

        if($subs == 'Annual'){
            $GLOBALS['sub'] = 'Annual';         
        }

        $qu = $GLOBALS['sub'];
        $insert_q = "UPDATE `tbl_user_data` SET `user_subscribtion`='$qu' WHERE `user_id` = '$id'";
        $insert_e = mysqli_query($con, $insert_q);

        if($insert_e){
            header("location:../../views/index.php?alert=Subscribed");
        }
        else{
            header("location:../../views/index.php?alert=Something went wrong");
        };
        // else if($subs == 'Monthly'){
        //     $sub = 'Monthly';
        //     $insert_q = "UPDATE `tbl_user_data` SET `user_subscribtion`='$sub' WHERE `user_id` = '$id'";
        //     $insert_e = mysqli_query($con, $insert_q);
    
        //     if($insert_e){
        //         header("location:../../views/index.php?alert=Subscribed");
        //     }
        //     else{
        //         header("location:../../views/index.php?alert=Something went wrong");
        //     };
        // }

    }

?>