<?php include "nav.php";?>
<?php 
include "conection.php";
// session_destroy();
// $_SESSION['inmycart']=12;
// echo$_SESSION['inmycart'];

if (isset($_POST['add'])) {
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
}
?>
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

    <!-- <form action="?action=add&id=
<?php
//echo $row["ID_product"];
?>
" method='post' enctype="multipart/form-data"> -->
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
                Item cart
            </span>
        </p>
        <h1 class="addtocartp"> Summary Of The Article</h1>
        <table>
            <thead>
                <tr>
                    <th>Item(s) </th>
                    <!-- <th>label </th> -->
                    <th>Price</th>
                    <th>Quantities </th>
                    <th>Sub Total </th>
                    <th>Delivery</th>
                    <th>Total </th>

                </tr>
            </thead>
            <tbody>
                <?php
                $delevry = 60;
                $total=0;

                foreach ($_SESSION["inmycart"] as $key => $value) {
                    $sql = "SELECT *FROM `product`WHERE ID_product ='$key'";
                    $sqli = mysqli_query($conn, $sql);
                    foreach ($sqli as $row) {
                        echo "<tr>
                        <td> <a href = 'des.php?ID_product=$row[ID_product]' > <img src=' image/$row[image].'height=50px id=img ></a>
                       </td>
                        
                        <td> $row[price]£</td>
                        <td> $value[qty]</td>
                        <td>" . $row['price'] * $value['qty'] . "£</td>
                        <td> $delevry £</td>
                        <td>" . $row['price'] * $value['qty'] + $delevry . "£ &nbsp;<a href='index.php?remove=$row[ID_product]'><img src='image/trash.png' name='aicha'></a></td>
                        
                        </tr>";
                      
                      
                       
                     
                     


                        if (isset($_GET['remove'])) {
                            $id = $_GET['remove'];
                          unset($_SESSION["inmycart"][$id]);
                            header("location:index.php");
                        }
                ?>

                        <script>
                            function incrementValue() {
                                var value = parseInt(document.getElementById('quantity').value);
                                value = isNaN(value) ? 0 : value;
                                if (value < 100) {
                                    value++;
                                    document.getElementById('quantity').value = value;
                                    subtotal();

                                }
                            }
                            incrementValue();

                            function decrementValue() {
                                var value = parseInt(document.getElementById('quantity').value);
                                value = isNaN(value) ? 0 : value;
                                if (value < 100) {
                                    value--;
                                    document.getElementById('quantity').value = value;
                                    subtotal();
                                }
                            }
                            decrementValue();

                            function subtotal() {
                                gt = 0;
                                for (i = 0; i < price.length; i++) {
                                    subtotalproducts[i].innerText = (price[i].value)(quantity[i].value);
                                    gt += (price[i].value)(quantity[i].value);
                                }
                                gtotal.innerText = gt;
                            }
                         
                        </script>
                        
                <?php  
                 $total += $row['price'] * $value['qty'] + $delevry;
                }
            }
            ?>
            </tbody>
        </table>
        
    </div>
<h1 style="margin-left :80%">
    <?php
    echo" $total.£"?> </h1>
           <div style=" width:86%;display:flex; flex-direction:row-reverse;">
        <button style="width: 184px;
height: 58px;

margin-top:10px;
color:white;
background: #010101;
border-radius: 4px;
font-family: 'Josefin Sans';
font-style: normal;
font-weight: 400;
font-size: 24px;
transform: rotate(0.43deg);">Buy Now</button></div>
    <!-- </form> -->
    <div class="delevry">

<img src="image/icons8-delivery-64 (1) 1.png">
<img src="image/icons8-delivery-2.png">
<img src="image/icons8-delivery 3.png">
</div>

</div>
</body>

</html>