<?php

session_start();
include 'conection.php';
// session_start();
function show_error($errora)
{
    if (isset($_SESSION[$errora]) && $_SESSION[$errora] != "") {
        echo "<span>";
        echo $_SESSION[$errora];
        echo "</span>";
    }
}
if (isset($_POST["submit"])) {
    $error = false;
    $_SESSION["register_error"] = "";
    $id = $_POST["ID_client"];

    $first = $_POST["FirstName"];
    $_SESSION["first_error"] = "";
    $last = $_POST["LastName"];
    $_SESSION["last_error"] = "";
    $adress = $_POST["client_address"];
    $_SESSION["adress_error"] = "";
    $phone = $_POST["phone"];
    $_SESSION["phone_error"] = "";
    $email = $_POST["email"];
    $_SESSION["email_error"] = "";
    $password = $_POST["c_password"];
    $_SESSION["password_error"] = "";



    // $sql = "INSERT INTO `client` (ID_client, FirstName, LastName, client_address, phone, email, c_password) 
    $sql = "INSERT INTO client (ID_client, FirstName, LastName, client_address, phone, email, c_password) 
    VALUES ('$id','$first ',' $last','$adress','$phone', '$email', '$password')";
    $result = $conn->query($sql);

    // if ($result) {
    //     echo "successful !!!!";
    //     echo "client registred";
    //     // header('location: index.php');
    // } else {
    //     echo "no no no ";
    //     die(mysqli_error($conn));
    // }
    if (empty($result)) {
        if (!preg_match("/[a-zA-Z\s]{3,}/", $first)) {
            $_SESSION["first_error"] = "The first name should contain at least 3 letters";
            $error = true;
        }
        if (!preg_match("/[a-zA-Z\s]{3,}/", $lname)) {
            $_SESSION["last_error"] = "Your lastname should contain at least 3 letters";
            $error = true;
        }
        if (!preg_match("/[a-zA-Z0-9]+/", $adress)) {
            $_SESSION["adress_error"] = "invalid adress, please reenter a correct one";
            $error = true;
        }
        if (!preg_match("/[0-9]{10}/", $phone)) {
            $_SESSION["phone_error"] = "Phone number should contain 10 digits!!!";
            $error = true;
        }
        if (!preg_match("/\w+@gmail\.com/", $email)) {
            $_SESSION["email_error"] = "invalid email format! please try again.";
            $error = true;
        }
        if (!preg_match("/[a-zA-z0-9]{8,}/", $pass)) {
            $_SESSION["pass_error"] = "short password, the password must contain at least 8 characters!";
            $error = true;
        }
        if (!preg_match("/[a-zA-Z0-9]+/", $adress)) {
            $_SESSION["adress_error"] = "invalid adress format!";
            $error = true;
        }
        if ($error == false) {
            $sql = "INSERT INTO client (ID_client, FirstName, LastName, client_address, phone, email, c_password) 
            VALUES ('$id','$first ',' $last','$adress','$phone', '$email', '$password')";
            $conn->query($sql);
            $_SESSION["account_created"] = "Client registered successfully";
        }
        header("location: login.php");
    } else {
        $_SESSION["exists_error"] = "Email already exists!";
        header("location: login.php");
    }
    $_SESSION["register_error"] = $error;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <?php include "nav.php"   ?>
    <h1 id="registration">Registration form</h1>

    <div class="line"></div>
    <form action="Form.php" method="POST">
        <h2 id="frm">id</h2>
        <input type="text" placeholder=" id" name="ID_client">
        <h2 id="frm">Full name</h2>
        <span>
            <?php
            show_error("first_error");
            ?>
        </span><span>
            <?php
            show_error("last_error");
            ?>
        </span>
        <input type="text" placeholder=" First Name" name="FirstName"><br><br><input type="text" placeholder=" Last Name" name="LastName"><br><br>
        <h2 id="frm">Address</h2>
        <span>
            <?php
            show_error("adress_error");
            ?>
        </span>
        <input type="text" placeholder=" Address" name="client_address">

        <h2 id="frm"> number</h2>
        <span>
            <?php
            show_error("phone_error");
            ?>
        </span>
        <input type="text" placeholder=" Enter a phone number" name="phone"><br><br>
        <h2 id="frm">E-mail</h2>
        <span>
            <?php
            show_error("email_error");
            ?>
        </span>
        <input type="text" placeholder=" Enter an email" name="email"><br><br>
        <h2 id="frm">Password</h2>
        <span>
            <?php
            show_error("pass_error");
            ?>
        </span>
        <input type="password" placeholder=" Enter a password" name="c_password"><br><br><br>
        </div>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="submit" id="register" name="submit"> Register </button><br><br>
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>





        <?php
        // include"footer.php"
        ?>

    </form>

</body>

</html>