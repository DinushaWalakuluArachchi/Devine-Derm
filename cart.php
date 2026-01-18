<?php

session_start();
include "connection.php";

$user = $_SESSION["u"];

if (isset($user)) {
    // load cart

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>Divine Derm</title>
    </head>


    <body class="indexBody" onload="loadcart();">



        <!-- navbar -->
        <?php include "navBar.php" ?>
        <!-- navbar -->

        <div class="container mt-5">
            <div class="row" id="cartBody">

                

               

            </div>


        </div>  
        
        
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>

<?php

} else {
    header("location: signIn.php");
}
