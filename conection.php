
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "faf_brief14";

    $conn = new mysqli($servername, $username, $password,$database);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   
?>