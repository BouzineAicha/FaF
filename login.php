<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body style=" background-image:url(image/slide1\ 3.png) ;  background-size: cover;  ">

    <?php
    // include "home.php"
    ?>
    <div id="navbar">
        <a href="home.php" id="A">Home </a>
        <a href="products.php" id="B">Products</a>
        <a href="#ingrdion" id="C">Ingredients</a>
        <a href="#" id="logo"><img src="image/logo_light.png" class="logo" height="60px" id="logo"></img></a>
        <a href="AboutUs.php" id="D">About Us</a>
        <a href="contact.php" id="E">Contact</a>
        <a href="#" id="bag"><img src="image/bag.png" class="bag" height="20px"></a>
        <a href="login.php" id="F">Login</a>
    </div>
    <form action="login.php" method="POST" enctype="multipart/form-data">

        <div class="back" style="background-color:#D0D4E0 ; position:fixed;">
            <a href="home.php"> <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z" />
                </svg></a>
            <h1 style="text-align:center">Login</h1>
            <div>
                <input id="inputs" type="text" placeholder="Username or email address *" name="email">
                <input id="inputs" type="password" placeholder="c_password *" name="c_password">
                <button style="width:270px;" id="login" class="form__button" type="submit">Log in</button>
                <p style="width:388px;">Don’t have an account?</p>
                <button style="width:270px; background-color: white; color:black" id="login" class="form__button" type="submit"> <a href="Form.php">Register</a></button>
            </div>

            <?php

           
include "conection.php";
session_start();
        
            if (isset($_POST['email']) && isset($_POST['c_password'])) {
        
                function validate($data)
                {
        
                    $data = trim($data);
        
                    $data = stripslashes($data);
        
                    $data = htmlspecialchars($data);
        
                    return $data;
                }
        
                $email = validate($_POST['email']);
        
                $pass = validate($_POST['c_password']);
        
                if (empty($email)) {
        
                    header("Location: index.php?error=User Name is required");
        
                    exit();
                } else if (empty($pass)) {
        
                    header("Location: index.php?error=c_password is required");
        
                    exit();
                } else {
        
                    $sql = "SELECT * FROM client WHERE email='$email' AND c_password='$pass'";
        
                    $result = mysqli_query($conn, $sql);
        
                    if (mysqli_num_rows($result) === 1) {
        
                        $user = mysqli_fetch_assoc($result);
        
                        if ($user['email'] === $email && $user['c_password'] === $pass) {
        
                            
      
                            $_SESSION['email'] = $user['email'];
        
                            $_SESSION['c_password'] = $user['c_password'];
        
                            $_SESSION['ID_client'] = $user['ID_client'];
        
                            echo"<p style='color:#155E0A'>you are connected!!</p>";
                            header("Location: home.php");

                            exit();
                        } else {
   
                            echo"Incorect User name or c_password";
                            exit();
                        }
                    } else {
                        echo" <p style='color:red'>Incorect User name or c_password</p>";
        
                        exit();
                    }
                }
            } else {

                // header("Location: home.php");
                exit();
            }
            ?>
        </div>
    </form>

</body>

</html>