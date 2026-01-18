<?php

include "connection.php";

$pname = $_POST["pname"];
$brand = $_POST["brand"];
$cat = $_POST["cat"];
$color = $_POST["color"];
$size = $_POST["size"];
$desc = $_POST["desc"];




if(empty($pname)){
    echo("Please enter the product name");
} elseif ($brand == "0"){
    echo("Please Select the Brand");
}elseif($cat == "0"){
    echo("Please Select the Category");
}elseif( $color == "0"){
    echo("Please Select the Color");
}elseif( $size == "0"){
    echo("Please Select the size");
}elseif(empty($desc)){
    echo("Please Enter Description");
} else {
    if(isset($_FILES["image"])){
        $image = $_FILES["image"];
        // echo("Success");

        $path = "Resources/productimg/" . uniqid() . ".png";
        move_uploaded_file($image["tmp_name"], $path);

        $rs = Database::search("SELECT * FROM product WHERE name = '$pname' ");
        $num = $rs->num_rows;

        if($num > 0){
            echo("Product has been alredy registered");
        }else{
            Database::iud("INSERT INTO product (name,description,path,brand_id,category_id,size_id,color_id) 
            VALUES ('$pname','$desc','$path','$brand','$cat','$size','$color') ");

            echo("Success");
        }



    }else{
        echo("Please select a product image");
    }
}


?>