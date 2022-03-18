<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



     "<tr>
            <td> <a href = 'des.php?ID_product=$row[ID_product]' > <img src=' image/$row[image].'height=50px id=img ></a>
            <h6  style= 'font-size: 10px'> $row[label]</h6></td>
           
            <td> $row[price]£</td>
            <td> $value[qty]</td>
            <td>". $row['price']*$value['qty']."£</td>
            <td> $delevry £</td>
            <td>". $row['price']*$value['qty']+ $delevry."£ &nbsp;<img src='image/trash.png' ></td>
         
            </tr>";
            ?>
          <form action="index.php" method="post">
              <input type="hidden" name="name" value="">

              <a href="index.php?id=<?php echo $row["ID_product"]; ?>" onClick="return confirm('Are you sure you want to delete?')"> <i class='bx bx-trash icon 2x btn'   style="font-size:25px ; color:#695cfe ; background-color:#c8d6fd8e" ></i></a>
          </form>
      </td>


</body>
</html>
