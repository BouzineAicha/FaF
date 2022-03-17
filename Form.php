<?php

include 'conection.php';
if (isset($_POST["submit"])) {
    $id = $_POST["ID_client"];
    $first = $_POST["FirstName"];
    $last = $_POST["LastName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["c_password"];
    $adress = $_POST["client_address"];


 
    $valid = 0;

    $checkUserId = mysqli_query($conn, "SELECT email FROM client WHERE email ='$email'");
    if (mysqli_num_rows($checkUserId) > 0) {
    echo  "<p style=\"color:red;\">this email is already used</p>";
    $valid++;
}
$checkPhone = mysqli_query($conn, "SELECT phone from client WHERE phone = '$phone'");
if (mysqli_num_rows($checkPhone) > 0) {
echo  "<p style=\"color:red;\">this phone number is already used</p>";
$valid++;
}
if($valid == 0){
  $sql = "INSERT INTO client (ID_client, FirstName, LastName, client_address, phone, email, c_password)  VALUES ('$id','$first ',' $last','$adress','$phone', '$email', '$password')";
  $query = mysqli_query($conn,$sql);
  header("Location: home.php");
  exit(); 
  mysqli_close($conn);
}
if ( $query) {
    echo "successful !!!!";

} else {
    echo "oh no no no ";
    die(mysqli_error($conn));
}
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

    <?php include"nav.php"   ?>
<h1 id="registration">Registration form</h1>

<div class="line"></div>
<form action="Form.php" method="POST" >

    <h2 id="frm">id</h2> 
    <input type="text"  placeholder=" id" name="ID_client" >
<h2 id="frm">Full name</h2>
 <input type="text" placeholder=" First Name" name="FirstName"><br><br><input type="text" placeholder=" Last Name" name="LastName"><br><br>
 <h2 id="frm">Address</h2> 
 <input type="text"  placeholder=" Address" name="client_address" >

<h2 id="frm"> number</h2>
 <input type="text"placeholder=" Enter a phone number" name="phone"><br><br>
<h2 id="frm">E-mail</h2>
<input type="text"placeholder=" Enter an email" name="email"><br><br>
 <h2 id="frm">Password</h2>
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