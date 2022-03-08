<?php  include "nav.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <?php  
        include "conection.php";
        $sql = "SELECT * FROM product WHERE ID_product LIKE 'P13'";
      
       $result = $conn->query($sql);
       while ($prd = mysqli_fetch_assoc($result)){
           $label=$prd["label"];
           $ID=$prd["ID_product"];
           $description=$prd["prod_description"];
           $price=$prd["price"];
           $quantity_stock=$prd["quantity_stock"];
           
       }
       echo" $label <br> $ID <br>  $description  <br>$price <br> $quantity_stock"
       
        
        
        ?>
    </form>
</body>
</html>








<?php  include "footer.php"?>