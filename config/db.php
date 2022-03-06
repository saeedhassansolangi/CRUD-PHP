<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database ="crud-php";

    $con =mysqli_connect($server, $username, $password, $database);

    if(!$con){
        echo "not connected";
        die("Connection is failed ".mysqli_connect_error($con));
    } 

//    echo '<p>connected</p>';
?>