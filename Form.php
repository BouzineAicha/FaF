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
  
    <?php include"nav.php"   ?>
  
<h1 id="registration">Registration form</h1>
<br><br>
<div class="line"></div>
<form>
<br>
<h2 id="frm">Full name</h2> <input type="text" placeholder=" First Name"><br><br><input type="text" placeholder=" Last Name"><br><br>
<h2 id="frm"> number</h2> <input type="text"placeholder=" Enter aphone number"><br><br>
<h2 id="frm">E-mail</h2><input type="text"placeholder=" Enter an email"><br><br>

 <h2 id="frm">Password</h2><input type="password" placeholder=" Enter a password"><br><br><br><input type="password"placeholder="Reenter password"><br><br>
 <h2 id="frm">Address</h2> 
<input type="text"  id="adrinut" placeholder=" Address"><input type="text" id="adrinut" placeholder=" Street address"><br><br><br>
        <input type="text" id="adrinut" placeholder=" Postalcode"><input type="texr" id="adrinut" placeholder="Country"><br> <br>
 </div>
        <button id="register"> Register </button>

        <br><br><br><br>





    
    <?php include"footer.php"
    ?>

</form>

</body>
</html>