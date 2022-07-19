<?php

    define("serverName","localhost");
    define("userName","root");
    define("password","");
    define("databaseName","e_book_db");

    $con = mysqli_connect(serverName,userName,password,databaseName);

    if(!$con){
        die("connection Failed :" . mysqli_connect_error());
    }

?>