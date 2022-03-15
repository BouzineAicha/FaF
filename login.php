<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <title>Document</title>
</head>
<body><form>
<?php include "home.php";
      include "conection.php"
      ?>
</form>
    <div class="back" style="background-color:#e2a29673 ; position:fixed;">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 320 512" ><a href="home.php"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></a></svg>
            <h1 style="text-align:center">Login</h1>
        <div >
            <input id="inputs" type="text" placeholder="Username or email address *" >
            <input id="inputs" type="password" placeholder="Password *">
            <input id="inputs" type="text" placeholder="ConfirmPassword *">
            <a href="home.php"><button style="width:270px;" id="login"class="form__button" type="submit">Log in</button> </a>
            <p style="width:388px;">Don’t have an account?</p>
            <a href="Form.php"><button style="width:270px; background-color: white; color:black" id="login"class="form__button" type="submit">Register</button> </a>
        </div>
    </div>
</body>

</html>