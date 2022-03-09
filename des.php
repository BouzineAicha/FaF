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
                include "conection.php";
                $result = $conn->query($sql);
                $imageresult1 =  $result;

                $price = $prd["price"];

                $label = $prd["label"];

                $img = $prd['image'];
       $sql = "SELECT `ID_product`, `label`, `prod_description`, `price`, `quantity_stock`, `image` FROM `product` WHERE ID_product='$id';"
       ?>
</body>
</html>