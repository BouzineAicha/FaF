<?php session_start();
 include "conection.php";
$al=$_GET["ID_product"];
$sql = "SELECT *FROM `product`WHERE ID_product ='$al'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js%22%3E"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js%22%3E"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/
4.7.0/css/font-awesome.min.css">
</head>

<body>
 

    <?php
    $prd = mysqli_fetch_assoc($result);
    ?>
      <div class="countainer">
        <p class="hh"><span>
                <?php if (isset($_SESSION['inmycart'])) {
                    echo "<a href='index.php'>" . count($_SESSION['inmycart']) . "</a>";
                } else {
                    echo 0;
                }
                $sql = "SELECT * FROM `product`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                }
?>
     </span>Item Cart
        </p>
      </div>
    <form action="index.php?id=<?php echo$prd['ID_product']?>" method="POST" enctype="multipart/form-data">
        <a href="home.php" style="margin-left: 20px  "><img src="image/vectory.png" width="40px" style="padding-top:20px ; "></a>
        <?php
        // $select = mysqli_query($conn, "SELECT * FROM `product`");
        // $prd = mysqli_fetch_assoc($select);  
        // $price = $prd["price"];
        // $label = $prd["label"];


        // if (isset($_REQUEST["ID_product"])) {
        //     $id = $_REQUEST['ID_product'];
        //     $sql = "SELECT *FROM `product`WHERE ID_product ='$id'";
        //     $result = $conn->query($sql);
        
            // $img = mysqli_fetch_assoc($result)['image'];
            //  echo "<img src='image/$img ' id=img >";      


        // }
        // echo "<br>".$prd['ID_product']."<br>".$prd["price"] ." <br>".$prd["label"]."<br>" .$prd["prod_description"];
        ?>
        <div class="decription">
            <div class="foto">
                <?php $img = $prd['image'] ?>
                <?php echo "<img src='image/$img ' id='img'  height=300px  >" ?>
            </div>
            <div class="des">
                <h1><?php echo $prd["label"] ?></h1>
                <p><?php echo $prd["prod_description"] ?></p>
                <h3>Price : <?php echo $prd["price"] ?>£</h3>
                <h3>QTY:
                    <div class="container">
                        <input type="button" onclick="decrementValue()" value="-" class="button_increment" style="width: 36px;width: 40px;height: 36px;border-radius:200px;background: #FFFFFF;margin-left:5%;border: 1px solid #000000;box-sizing: border-box;"/>
                        <input type="text" name="thequantity" id="quantity" value="1" size="1" class="thequantity" style="width: 110px;margin-left:5%;height: 36px;background: #FFFFFF;border: 1px solid #000000;box-sizing: border-box;border-radius: 8px;" />
                        <input type="button" onclick="incrementValue()" value="+" class="button_increment" style="width: 40px;height: 36px;margin-left:5%;border-radius:200px;background: #FFFFFF;border: 1px solid #000000;box-sizing: border-box;"/>
                    </div>
                    <script>
                        function incrementValue() {
                            var value = parseInt(document.getElementById('quantity').value);
                            value = isNaN(value) ? 0 : value;
                            if (value < 100) {
                                value++;
                                document.getElementById('quantity').value = value;
                              
                            }
                        }
                        incrementValue();

                        function decrementValue() {
                            var value = parseInt(document.getElementById('quantity').value);
                            value = isNaN(value) ? 0 : value;
                            if (value < 100) {
                                value--;
                                document.getElementById('quantity').value = value;
                               
                            }
                        }
                        decrementValue();
                    </script>
                </h3>

            </div>

            <div class="btns">
                <button id="add-to-cart" name="add" style="margin-top: 50px;"><a href="index.php?id=<?php echo$prd['ID_product']?>"></a>Add to cart</button>
                <button id="buy">Buy</button>
            </div>


        </div>
    </form>
    <?php
             
    if (isset($_GET["action"]) == "add") {
                    $id = $_GET["id"];
                    if (isset($_SESSION['inmycart'][$id])) {
                        $eski = $_SESSION['inmycart'][$id]['qty'];
                        $_SESSION['inmycart'][$id] = array("ID_product" => $id, "qty" => $eski + $_POST["thequantity"]);
                    } else {

                        $_SESSION['inmycart'][$id] = array("ID_product" => $id, "qty" => $_POST["thequantity"]);
                    }
                    // echo "<pre>";
                    // print_r($_SESSION["inmycart"]);
                    // echo "</pre>";
                    // header("location:index.php");
                }
                ?>

</body>

</html>