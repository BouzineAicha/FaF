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
    <?php
include "conection.php" ;
$sql = "SELECT * FROM product  WHERE quantity_stock <9 " ;
$result = $conn->query($sql);
$imageresult1 =  $result;
while ($row = mysqli_fetch_assoc($result)) {
?>
<main>
<table >
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
    <tr>
        <td><?php echo "<img src=' image/$row[image].'height=200px id=img >"?></td>
        <td><?php echo $row["price"]?></td>
        <td><?php echo $row["quantity_order"]?></td>
        <td><?php echo $row["subtotal"]?></td>
        <td>60£</td>
        <td><?php echo $row["subtotal"]+60?></td>
       
    </tr>
<tr>

<?php } ?>
</form>

</table>
</main>
</body>
</html>