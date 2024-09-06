<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "yt";

    $connection = mysqli_connect($hostname,$username,$password,$database);

    if(isset($connection)){
        echo "connected";
    }else{
        echo "Not connected";
    }
?>