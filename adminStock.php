<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

?>


    <!DOCTYPE html>
    <html lang="en"  >

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <title>Divine Stock</title>

    </head>

    <body class="adminBody">

        <?php
        include "adminNavBar.php";
        ?>
        <div class="container-fluid">

            <div class="row mt-5 ">
                <div class="col-5 col-md-5 col-lg-5 offset-1">

                    <h2 class="text-center text-light">Product Registration</h2>

                    <div class="mb-3 text-light ">
                        <label for="form-label"> Product Name</label>
                        <input id="pname" type="text" class="form-control  ">
                    </div>

                    <div class="row">



                        <div class="mb-3  col-6 col-md-6 col-lg-6 text-light">
                            <label for="form-label">Brand</label>
                            <select id="brand" class="form-select">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `brand`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();

                                ?>

                                    <option value="<?php echo ($data["brand_id"]) ?>"><?php echo ($data["brand_name"]) ?></option>

                                <?php

                                }

                                ?>

                            </select>

                        </div>

                        <div class="mb-3 col-6 col-md-6 col-lg-6 text-light">
                            <label for="form-label">Category</label>
                            <select id="cat" class="form-select">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `category`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();

                                ?>

                                    <option value="<?php echo ($data["cat_id"]) ?>"><?php echo ($data["cat_name"]) ?></option>

                                <?php

                                }

                                ?>

                            </select>

                        </div>
                        <div class="mb-3 col-6 col-md-6 col-lg-6 text-light">
                            <label for="form-label">Colors & Others</label>
                            <select id="color" class="form-select">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `color`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();

                                ?>

                                    <option value="<?php echo ($data["color_id"]) ?>"><?php echo ($data["color_name"]) ?></option>

                                <?php

                                }

                                ?>

                            </select>

                        </div>
                        <div class="mb-3 col-6 col-md-6 col-lg-6 text-light">
                            <label for="form-label">Size</label>
                            <select id="size" class="form-select">
                                <option value="0">Select</option>

                                <?php
                                $rs = Database::search("SELECT * FROM `size`");
                                $num = $rs->num_rows;

                                for ($x = 0; $x < $num; $x++) {

                                    $data = $rs->fetch_assoc();

                                ?>

                                    <option value="<?php echo ($data["size_id"]) ?>"><?php echo ($data["size_name"]) ?></option>

                                <?php

                                }

                                ?>

                            </select>

                            -
                        </div>

                    </div>

                    <div class="mb-3 text-light">
                        <label for="form-label">Description</label>
                        <textarea id="desc" class="form-control" rows=5></textarea>
                    </div>

                    <div class="mb-3 text-light">
                        <label for="form-label">Product Image</label>
                        <input id="file" class="form-control" type="file">
                    </div>

                    <div>
                        <button class="btn btn-info col-12 col-md-12 col-lg-12" onclick="regProduct();">Register Product</button>
                    </div>


                </div>

                <div class="col-5 col-md-5 col-lg-5">
                    <h2 class="text-center text-light">Stock Update</h2>

                    <div class="mb-3 text-light">
                        <label for="form-label">Product Name</label>
                        <select class="form-select" id="selectProduct">          
                        <?php 
                        $rs = Database::search("SELECT * FROM `product`");
                        $num= $rs->num_rows;

                       for ($i=0; $i < $num ; $i++) { 
                       $d = $rs->fetch_assoc();         
                       ?>
                       <option value="<?php echo $d["id"]?>"><?php echo $d["name"]?></option>
                       <?php             
                        }
                        ?>

                        </select>
                    </div>

                    <div class="mb-3 text-light">
                        <label class="form-label" for="">Qty</label>
                        <input type="text" class="form-control" id="qty" required>
                    </div>

                    <div class="mb-3 text-light">
                        <label class="form-label" for="">Unit Price</label>
                        <input type="text" class="form-control" id="uprice" required>

                    </div>
                    <div>
                        <button class="btn btn-info col-12 col-md-12 col-lg-12" onclick="updateStock();">Update Stock</button>
                    </div>

                </div>


            </div>

        </div>

        <!-- Footer -->
 <div class="fixed-bottom col-12 col-md-12 col-lg-12 ">
            <p class="text-center text-light">&copy; dinush#code2024 DivineDerm OnlineStore.lk || All Right Reserved</p>
        </div>
        <!-- Footer -->




        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

    </html>


<?php

} else {
    echo ("Your are not an admin");
}

?>