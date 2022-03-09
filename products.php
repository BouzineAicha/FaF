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
<form action="" method="POST" enctype="multipart/form-data" >
    <div class="parent">
        <div class="du">
        <?php  
          include "conection.php";
          $sql = "SELECT * FROM `product`  ";

        
          $result = $conn->query($sql);
          $imageresult1 =  $result;
          ?>
          <?php
          
         while ($prd = mysqli_fetch_assoc($result)){
             
             ?>
           
           <?php
            
            
            $img = $prd['image'];
            $label=$prd["label"]; 
            $price=$prd["price"];
            ?>
             </div>
            <div class="container">
             <?php echo "<img src='image/$img ?>' height=200px id=img >"?> <br>
            <h4><?php echo  $label?> </h4><br>
            <h4><?php echo  $price?> </h4><br>
            </div>
    
            </div>
       
          <?php   
         }
         
        ?>
    </div>
  </form>
</body>
</html>