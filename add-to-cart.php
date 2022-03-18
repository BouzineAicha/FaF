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
    <?php
    include "nav.php";
    ?>

    <h1 class="addtocartp"> Summary Of The Article</h1>
    <main>

        <table>
            <thead>
                <tr>
                    <th>Item(s) </th>
                    <th>Price</th>
                    <th>Quantities </th>
                    <th>Sub Total </th>
                    <th>Delivery</th>
                    <th>Total </th>
                </tr>
            </thead>
            <?php
            include "conection.php";
            $id = $_REQUEST['ID_product'];
            $sql = "SELECT *FROM `product`WHERE ID_product ='$id'";
            $result = $conn->query($sql);
            $imageresult1 =  $result;
           
                if (mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)) {
    
            ?>
        <form action="add-to-cart.php ?action=add & ID_product" method="POST" enctype="multipart/form-data"<?php echo $row['ID_product'];?>>
                <tr>
                    <td><?php echo "<img src=' image/$row[image].'height=100px id=img >" ?><br><p><?php echo $row["label"]?></p></td>
                    <td><?php echo $row["price"] ?></td>
                    <td>      <div class="thecontainer">
                        <input type="button" onclick="decrementValue()" value="-" class="button_increment" style="width: 36px;width: 40px;height: 36px;border-radius:200px;background: #FFFFFF;margin-left:5%;border: 1px solid #000000;box-sizing: border-box;"/>
                        <input type="text" name="quantity" id="quantity" value="<?php echo $value[""] ?>" size="1" class="thequantity" style="width: 110px;margin-left:5%;height: 36px;background: #FFFFFF;border: 1px solid #000000;box-sizing: border-box;border-radius: 8px;" />
                        <input type="button" onclick="incrementValue()" value="+" class="button_increment" style="width: 40px;height: 36px;margin-left:5%;border-radius:200px;background: #FFFFFF;border: 1px solid #000000;box-sizing: border-box;"
 />
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
                    </script></td>
                    <td><?php echo 3* $row["price"] ?></td>
                    <td>60£</td>
                    <td><?php echo 3* $row["price"] + 60 ?></td>

                </tr>
               <input type="hidden" name="hidden_name" value="<?php  $row["price"]?>">
               <input type="hidden" name="hidden_name" value="<?php  $row["price"]?>">
               

                <?php 
            if (isset($_POST["add_to_cart"])) {
                if (isset($_SESSION["shopping cart"])) {
                } else {
                }
            }


        }
    }
                ?>
                <button id="buy" name="add_to_cart" type="submit">BUY</button>
                </form>

        </table>
    </main>
</body>

</html>