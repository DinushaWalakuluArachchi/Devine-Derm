<?php include "connection.php";?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Divine Derm</title>
</head>

<body onload="loadProduct(0);" class="indexBody">

    <!-- navBar -->
    <?php include "navBar.php" ?>
    <!-- navBar -->



    <!-- basic search -->
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-6 col-md-6 col-lg-6 mt-3">
            <input type="text" class="form-control " placeholder=" Product Name" id="product" onkeyup="searchProduct(0);">
        </div>
        <button class="btn btn-outline-light col-1 col-md-1 col-lg-1 ms-2 mt-3" onclick="viewFilter();">Filter</button>
    </div>
    <!-- basic search -->

   
    <!-- Advanced search  -->
    <div class="d-none" id="filterId">
        <div class="border border-light  rounded-4 mt-4 p-5 col-10 offset-1">

            <div class="row col-12 col-md-12 col-lg-12">

                <div class="row col-6 col-md-6 col-lg-6 ms-auto">
                    <label class="col-3 col-md-3 col-lg-3 form-label text-white">Colors & others:</label>
                    <select name="" class="form-select  col-9 col-md-9 col-lg-9" id="color">
                        <option value="0">Select colors & Others</option>
                        <?php

                        $rs = Database::search("SELECT * FROM color");
                        $num = $rs->num_rows;

                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_array();
                        ?>
                            <option value="<?php echo $d["color_id"] ?>"><?php echo $d["color_name"] ?></option>
                        <?php
                        }

                        ?>
                    </select>
                </div>

                <div class="row col-6 col-md-6 col-lg-6 ms-auto">
                    <label class="form-label text-white">Category:</label>
                    <select class="form-select col-9 col-md-9 col-lg-9" id="cat">
                        <option value="0">Select Category</option>
                        <?php

                        $rs2 = Database::search("SELECT * FROM category");
                        $num2 = $rs2->num_rows;

                        for ($i = 0; $i < $num2; $i++) {
                            $d2 = $rs2->fetch_array();
                        ?>
                            <option value="<?php echo $d2["cat_id"] ?>"><?php echo $d2["cat_name"] ?></option>
                        <?php
                        }

                        ?>

                    </select>
                </div>
            </div>

            <div class="row col-12 col-md-12 col-lg-12 mt-4">

                <div class="row col-6 col-md-6 col-lg-6 ms-auto">
                    <label class="col-3 form-label text-white">Brand:</label>
                    <select name="" class="form-select col-9 col-md-9 col-lg-9" id="brand">
                        <option value="0">Select Brand</option>
                        <?php

                        $rs3 = Database::search("SELECT * FROM brand");
                        $num3 = $rs3->num_rows;

                        for ($i = 0; $i < $num3; $i++) {
                            $d3 = $rs3->fetch_array();
                        ?>
                            <option value="<?php echo $d3["brand_id"] ?>"><?php echo $d3["brand_name"] ?></option>
                        <?php
                        }

                        ?>

                    </select>
                </div>

                <div class="row col-6 col-md-6 col-lg-6 ms-auto">
                    <label class="form-label text-white">Size:</label>
                    <select class="form-select  col-9 col-md-9 col-lg-9" id="size">
                    <option value="0">Select Size</option>
                        <?php

                        $rs4 = Database::search("SELECT * FROM `size`");
                        $num4 = $rs4->num_rows;

                        for ($i = 0; $i < $num4; $i++) {
                            $d4 = $rs4->fetch_array();
                        ?>
                            <option value="<?php echo $d4["size_id"] ?>"><?php echo $d4["size_name"] ?></option>
                        <?php
                        }

                        ?>

                    </select>
                </div>
            </div>

            <div class="mt-4 row col-12 col-md-12 col-lg-12">
                <div class="col-5 col-md-5 col-lg-5">
                    <input type="text" class="form-control" placeholder="Min Price" id="min">
                </div>
                <div class="col-5 col-md-5 col-lg-5">
                    <input type="text" class="form-control " placeholder="Max Price" id="max">
                </div>
                <button class="col-2 col-md-2 col-lg-2 btn btn-outline-light border-danger-subtle" onclick="advSearchProduct(0);">Search</button>

            </div>

        </div>
    </div>
    <!-- Advanced search  -->




    <!-- carsoul -->
    <div class=" containercol-12 d-none d-lg-block mb-3 mt-5 ">

    <div class="row">

    <div id="carouselExampleCaptions" class="carousel slide offset-1 col-10 col-md-10 col-lg-10  ">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Resources/carsoelImg/cr1 (1).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5> COSMETIC & BRUSH STORAGE</h5>
        <p> pharmaceutical products that are used for improving skin appearance and body odor</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Resources/carsoelImg/c2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Skin-care preparations</h5>
        <p>Preparations for the care of the skin form a major line of cosmetics.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Resources/carsoelImg/cr3.jpg"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Other cosmetics</h5>
        <p>Perfumes are present in almost all cosmetics and toiletries.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </div>

    </div>
   

<!-- carsoul -->


    <!-- load product -->

    <div class="row col-10 col-md-10 col-lg-10 offset-1" id="pid">
       

    </div>

    <!-- load product -->

<hr class="text-light">
    <!-- Footer -->
   <?php include "footer.php";?>
    <!-- Footer -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>