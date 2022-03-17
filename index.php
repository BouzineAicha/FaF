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
            <h1 style="text-align:center">Shipping</h1>
            <div>
                <div>
                    <input type="checkbox"  style="width:30px;">
                    <span class="checkmark"></span>
                    <label class="container" style="width:20px;font-size:15px;">Continue with old Address</label>
                </div>
                    <div>
                <a style="font-size:15px;   ">Continue with new Address</a>
                <input id="inputs" type="adress" placeholder="Enter the new address" name="new-adress">
                <button style="width:100px; margin-left:140px" id="login" class="form__button" type="submit">Buy</button>
                </div>
            </div>

            </div>
    </form>

</body>

</html>