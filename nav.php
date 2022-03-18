<?php 
session_start();
include "conection.php"; 
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
<body class="joji">
<div id="navbaro">
        <a href="home.php" id="A">Home </a>
        <a href="products.php" id="B">Products</a>
        <a href="home.php" id="C">Ingredients</a>

        <a href="index.php" id="logoo"><img src="image/logo_dark.png" class="logo" height="60px" id="logoo"></img></a>
        <a href="AboutUs.php" id="D">About Us</a>
        <a href="contact.php" id="E">Contact</a>
        <div style="display:flex">
            <div class="bag" style="display: flex; flex-direction: column;">
            <?php if (isset($_SESSION['inmycart'])) {
                        echo "<a href='index.php'><p style=' font-size:13px;  margin-left: 19px;'>". count($_SESSION['inmycart'])."</p></a>";
                    } else {
                        echo' <p style="font-size: 14; margin-left: 42px;">0</p> ' ;
                    }
                    
            
                    ?>
            <a href="#" id="bagblack"><img src="image/bagblack.png" class="bag" height="20px" style="margin-top:-49px;"></a>
            </div>
        
            <?php if(isset( $_SESSION['ID_product'] ) ){
            echo'<a href="login.php" id="F"><img src ="image/user-add.png" style=" width:20px"></a>';
            } else{
                echo '<a href="login.php" id="F"><img src ="image/user-done.png"style=" width:20px"></a>';
            }
        
            ?>
            </div>
         
    </div>
  

</body>

</html>