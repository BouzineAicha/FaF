<?php 

    include "conection.php" ;
    include "nav.php" ;
    // session_start() ;
    $id = $_SESSION["ID_client"] ;
    if(!$conn){
        echo "c is not done".mysqli_connect_error() ;
    }
    $query = "SELECT * FROM client WHERE ID_client = $id " ;
    $data = mysqli_query($conn, $query) ;
    $res = mysqli_fetch_assoc($data) ;
    echo "<hr>" ;
    // echo $res["client_address"] ;
    if(isset($_POST["buy"])){
        $sql = "INSERT INTO `detail_order` (quantity_order,ID_order,ID_productt )  VALUES (1,1,1)";
        // $quer = mysqli_query($conn,$sql);
    }


?>

<div class="container">
    <form  action="<?php echo $_SERVER["PHP_SELF"]   ?>" method="POST">
        <div class="form-check">

        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
        <label class="form-check-label" for="flexCheckIndeterminate">
        buy now
        </label>
        <button class="btn btn-primary" type="submit" name="buy">BUY</button>
        </div>
    </form>
  
</div>