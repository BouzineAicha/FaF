<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
<<<<<<< HEAD
  <?php include "nav.php";  
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>
    <div class="product-item">
      <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["ID_client"]; ?>">
      <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
      <div class="product-tile-footer">
      <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
      <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
      <div class="cart-action"><input type="text" class="product-quantity" name="quantity_order" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
      </div>
      </form>
    </div>
  <?php
    }
   } ?>
=======
  <?php include "nav.php"   ?>
>>>>>>> 9132bc2e746dceadcdd4685b19b8538d78d13d3e
  <div id="lol" class="lable" style="display: flex; justify-content:space-around; font-family: Caramello Free;  margin-top:40px">
          <h2>Skincare</h2>
          <h2>Make up</h2>
          <h2>Parfumes</h2>
        </div>
  <form action="" method="POST" enctype="multipart/form-data">

    <div id="contain" class="parent container">

      <?php
      include "conection.php";
<<<<<<< HEAD
      $sql = "SELECT * FROM product  ";
=======
      $sql = "SELECT * FROM `product`  ";
>>>>>>> 9132bc2e746dceadcdd4685b19b8538d78d13d3e


      $result = $conn->query($sql);
      $imageresult1 =  $result;
      ?>
      <?php

      while ($prd = mysqli_fetch_assoc($result)) {

      ?>
<<<<<<< HEAD
<?php
=======

        <?php
>>>>>>> 9132bc2e746dceadcdd4685b19b8538d78d13d3e


        $img = $prd['image'];
        $label = $prd["label"];
        $price = $prd["price"];
        ?>
<<<<<<< HEAD

=======
        
>>>>>>> 9132bc2e746dceadcdd4685b19b8538d78d13d3e
        <!-- echo "<img src='image/$img ' id=img >" -->
        <div id="prod" class="product col-lg-4 col-md-6">
          <?php echo "<a href = 'des.php?ID_product=" . $prd['ID_product'] . "'><img src=' image/$img.'height=200px id=img ></a>"; ?> <br>
          <h6 id="lab"><?php echo  $label ?> </h6>
<<<<<<< HEAD
          <h3 id="he3"><?php echo  $price ?>£  &nbsp; <button  style="position: absolute;width: 37px;height: 30px;background: #FFFFFF;border: 1px solid #DE8678;box-sizing: border-box;border-radius: 14px;" name="quantity_order"><a href="add-to-cart.php">+</a></button><br> </h3> <br>
         
=======
          <h3 id="he3"><?php echo  $price ?> £ <img src="image/check-to-slot-solid2.png " id="addd" height=20px > </h3><br>
>>>>>>> 9132bc2e746dceadcdd4685b19b8538d78d13d3e
        </div>


      <?php
      }

      ?>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>