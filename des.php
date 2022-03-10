<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
                include "conection.php" ?>
<form action="des.php" method="POST" enctype="multipart/form-data">
<?php
                // $select = mysqli_query($conn, "SELECT * FROM `product`");
                // $prd = mysqli_fetch_assoc($select);  
                // $price = $prd["price"];
                // $label = $prd["label"];
                
                
                if (isset($_REQUEST["ID_product"])) {
                    $id = $_REQUEST['ID_product'];
                    $sql = "SELECT * FROM `product `WHERE ID_product ='$id' ";  

                    $result =$conn->query($sql);
                    $prd = mysqli_fetch_assoc($result);  
                    // $img = mysqli_fetch_assoc($result)['image'];
                    //  echo "<img src='image/$img ' id=img >";      
                    
                    
                }    
                // echo "<br>".$prd['ID_product']."<br>".$prd["price"] ." <br>".$prd["label"]."<br>" .$prd["prod_description"];
              
 ?>

    </form>
</body>
</html>