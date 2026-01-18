<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];
$netTotal = 0;

$rs = Database::search("SELECT * FROM `cart` INNER JOIN `stock` ON `cart`.`stock_stock_id` =`stock`.`stock_id`
INNER JOIN `product` ON `stock`.`product_id` = `product`.`id`
INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id`
INNER JOIN `size` ON `product`.`size_id` = `size`.`size_id` WHERE `cart`.`user_id`='".$user["id"]."'");

$num = $rs->num_rows;

if ($num > 0) {

?>
<!-- cart load here  -->
    <div class="mb-4 mt-4">
        <h3 class="text-light">Shopping Cart</h3>
    </div>

<?php

for ($i=0; $i < $num ; $i++) { 
  $d = $rs->fetch_assoc();
  $total = $d["price"] * $d["cart_qty"];
  $netTotal += $total;


  ?>
  <!-- cart Items -->
  <div class="col-12 border border-3 rounded-4 p-3 mb-2 d-flex justify-content-between ">
        <div class="d-flex align-items-center col-5">
            <img src="<?php echo $d["path"] ?>" class="rounded-4" width="200px" />
            <div class="ms-5">
                <h4 class="text-white"><?php echo $d["name"]?></h4>
                <p class="text-white mb-0 mt-3">Color: <?php echo $d["color_name"]?></p>
                <p class="text-white">Size: <?php echo $d["size_name"]?></p>
                <h5 class="text-warning">Rs: <?php echo $d["price"]?></h5>
            </div>

        </div>
        <div class="d-flex align-items-center gap-2">
            <button class=" btn btn-light btn-sm" onclick="decrementCartQty('<?php echo $d['cart_id']?>');">-</button>
            <input type="number" id="qty<?php echo $d['cart_id']?>" class="form-control form-control-sm text-center" 
            style="max-width: 100px;" value="<?php echo $d["cart_qty"]?>" disabled>
            <button class=" btn btn-light btn-sm" onclick="incrementCartQty('<?php echo $d['cart_id']?>');">+</button>
        </div>
        <div class="d-flex align-items-center">
            <h4 class="text-white">Total: <span class="text-warning">Rs: <?php echo $total ?></span></h4>
        </div>
        <div class="d-flex align-items-center">
            <button class="btn btn-danger btn-sm" onclick="removeCart('<?php echo $d['cart_id'] ?>');">X</button>
        </div>
    </div>
 <!-- cart Items -->

<?php

}

?>
  
   

    <div class="col-12 mt-4">
        <hr class="text text-white">
    </div>

    <!-- checkout -->
    <div class="d-flex flex-column align-items-end">
        <h6 class="text-light">Number of Items: <span class="text-info">  <?php echo $num ?></span></h6>
        <h5 class="text-light">Delivery Fee: <span class="text-white">Rs: 500</span></h5>
        <h3 class="text-light">Net Total <span class="text-warning"> <?php echo ($netTotal + 500)?></span></h3>
        <button class="btn btn-success col-3 mt-3 mb-4" onclick="checkOut();">CHECKOUT</button>
    </div>


    <!-- checkout -->

<?php
} else {

?>
    <div class="col-12 text-center mt-5">
        <h2 class="text-white">Your Cart is Empty!</h2>
        <a href="index.php" class="btn btn-info">Start Shopping</a>
    </div>

    
<?php
}
?>

