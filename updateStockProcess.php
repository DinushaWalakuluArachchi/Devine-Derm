<?php

include "connection.php";

$productId =$_POST["p"];
$qty =$_POST["q"];
$price =$_POST["up"];

//echo($productId);

if (empty($qty)) {
    echo("Please Enter Qty");
} else if (!is_numeric($qty)){
    echo("only Number can be enterd for Qty");
} else if (strlen($qty)>10){
    echo("Your Qty Should be less than 10 characters");
} else if (empty($price) ) {
    echo("Please Enter Unit price");
} else if (!is_numeric($price)){
    echo("only Number can be enterd for Unit Price");
} else if (strlen($price)>10){
    echo("Your Price Should be less than 10 characters");
} else {
   // echo("Success");
    $rs = Database::search("SELECT*FROM `stock` WHERE `product_id` ='".$productId."' AND `price` = '".$price."'");
    $num = $rs->num_rows;
    $d =$rs->fetch_assoc(); // ilga row eka read karanna

if ($num==1){
   //update query.
$newQty = $d["qty"]+$qty;
Database::iud("UPDATE `stock` SET `qty` = '".$newQty."'  WHERE `stock_id` = '".$d["stock_id"]."'");
echo("Stock Updated Successfully");

} else {
   // insert query

   Database::iud("INSERT INTO `stock` (`price`,`qty`,`product_id`) VALUES ('".$price."','".$qty."','".$productId."')");
   echo("New Stock Added Successfully");
}



}



?>