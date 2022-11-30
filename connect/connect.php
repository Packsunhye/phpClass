<?php
    $host = "localhost";
    $user = "tjsgp9810";
    $pass = "tjsgpbdbfly9810*";
    $db = "tjsgp9810";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }


?>