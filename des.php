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
    include "conection.php" ?>
    <form action="des.php" method="POST" enctype="multipart/form-data">
        <a href="home.php" style="margin-left: 20px  "><img src="image/vectory.png" width="40px" style="padding-top:20px ; "></a>
        <?php
        // $select = mysqli_query($conn, "SELECT * FROM `product`");
        // $prd = mysqli_fetch_assoc($select);  
        // $price = $prd["price"];
        // $label = $prd["label"];


        if (isset($_REQUEST["ID_product"])) {
            $id = $_REQUEST['ID_product'];
            $sql = "SELECT *FROM `product`WHERE ID_product ='$id'";
            $result = $conn->query($sql);
            $prd = mysqli_fetch_assoc($result);
            // $img = mysqli_fetch_assoc($result)['image'];
            //  echo "<img src='image/$img ' id=img >";      


        }
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
                    <button id="" onclick="increment()">+</button>
                    <input id=demoInput type=number min=0 max=30>
                    <button onclick="decrement()">-</button>
                    <script>
                        function increment() {
                            document.getElementById('demoInput').stepUp();
                        }

                        function decrement() {
                            document.getElementById('demoInput').stepDown();
                        }
                    </script>
                </h3>

            </div>

            <div class="btns">
                <button id="add-to-cart">Add to cart</button>
                <button id="buy">Buy</button>
            </div>


        </div>
    </form>

</body>

</html>