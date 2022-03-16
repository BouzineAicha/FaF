<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>&&
<body>
    <?php
    include "nav.php";
include "conection.php" ;
$sql = "SELECT * FROM product ""SELECT * FROM detail_order";
$result = $conn->query($sql);
$imageresult1 =  $result;
while ($row = mysqli_fetch_assoc($result)) {
?>
<h1 class="addtocartp"> Summary Of The Article</h1>
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
        <td><?php echo $row["total"]?></td>
       
    </tr>
<tr>

<?php } ?>
</form>

</table>
</main>
</body>
</html>