<?php

    $servername ="localhost";
    $username ="scottanderson96";
    $password ="";
    $dbname ="c9";
    
    //creates ocnnection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connection_error){
        die("Connection Failed".$conn->connect_error);
    }

?>