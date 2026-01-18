<?php

session_start();

if (isset($_SESSION["a"])) {

?>




<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Divene Derm</title>
</head>

<body class=" adminBody">
    <!-- nav Bar -->
    <?php include "adminNavBar.php"; ?>
    <!-- nav Bar -->

    <div class="col-10 col-md-10 col-lg-10">
        <h2 class="text-center text-light">Reports</h2>

        <div class="row mt-5">

            <div class="col-4 col-md-4 col-lg-4 mt-5">
           <a href="adminReportStock.php"> <button class="btn btn-outline-info col-12  col-md-12 col-lg-12 "> Stock Report</button></a>
            </div>
          
            <div class="col-4 col-md-4 col-lg-4 mt-5">
           <a href="adminReportProduct.php"><button  class="btn btn-outline-info col-12 col-md-12 col-lg-12"> Product Report</button></a> 
            </div>
           
            <div class="col-4 col-md-4 col-lg-4 mt-5">
            <a href="adminUserReport.php"><button class="btn btn-outline-info col-12 col-md-12 col-lg-12"> user Report</button></a>
            </div>

        </div>

    </div>

 <!-- Footer -->
 <div class="fixed-bottom col-12col-md-12 col-lg-12 ">
            <p class="text-center text-light">&copy; dinush#code2024 DivineDermOnlineStore.lk || All Right Reserved</p>
        </div>
        <!-- Footer -->




    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<?php


} else {
    echo ("You are not a Valid Admin");
}
