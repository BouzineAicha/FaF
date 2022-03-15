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
  <?php include "nav.php"   ?>
  <div id="lol" class="lable" style="display: flex; justify-content:space-around; font-family: Caramello Free;  margin-top:40px">
          <h2>Skincare</h2>
          <h2>Make up</h2>
          <h2>Parfumes</h2>
        </div>
  <form action="" method="POST" enctype="multipart/form-data">

    <div id="contain" class="parent container">

      <?php
      include "conection.php";
      $sql = "SELECT * FROM `product`  ";


      $result = $conn->query($sql);
      $imageresult1 =  $result;
      ?>
      <?php

      while ($prd = mysqli_fetch_assoc($result)) {

      ?>

        <?php


        $img = $prd['image'];
        $label = $prd["label"];
        $price = $prd["price"];
        ?>
        
        <!-- echo "<img src='image/$img ' id=img >" -->
        <div id="prod" class="product col-lg-4 col-md-6">
          <?php echo "<a href = 'des.php?ID_product=" . $prd['ID_product'] . "'><img src=' image/$img.'height=200px id=img ></a>"; ?> <br>
          <h6 id="lab"><?php echo  $label ?> </h6>
          <h3 id="he3"><?php echo  $price ?> £ <img src="image/check-to-slot-solid2.png " id="addd" height=20px > </h3><br>
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