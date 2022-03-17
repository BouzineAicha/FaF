
<?php
    $servername = "127.0.0.1";
    $username = "fatima";
    $password = "123";
    $database = "brief14_faf";

    $conn = new mysqli($servername,$username,$password,$database);

    if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
    }
   
?>