<?php


include "connection.php";
session_start();
$user = $_SESSION["u"];


if (isset($_SESSION["u"])) {

$rs = Database::search("SELECT * FROM `user` WHERE `id` = '".$user["id"]."'");
$d = $rs->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Divine Derm</title>

</head>
<body class="profile_Body">
    
 <!-- navbar -->
 <?php include "navBar.php" ?>
    <!-- navbar -->


    <div class="adminBody">
        <div class="row container">
            <div class="col-4 col-md-4 col-lg-4 d-flex justify-content-center flex-column" >
                <div class="d-flex justify-content-center ">
                <img src="<?php 
                            if (!empty($d["img_path"])) {
                                echo $d["img_path"];
                            } else {
                                echo("Resources/Img/profile.png");
                            }
                            
                
                
                             
                             ?>" height="150px" id="i"/>
                </div>
               
                <div class="mt-3 text-light">
                    <label for="form-label">Profile Image</label>
                    <input type="file" class="form-control"  id="imgUploader">
                </div>
                <div class="mt-3">
                    <button class="btn btn-outline-info col-12 col-md-12 col-lg-12" onclick="uploadImg();">Upload</button>
                </div>
            </div>

            <div class="col-8 col-md-8 col-lg-8 text-light">
                <h2 class="text-center">Profile Details</h2>
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-6">
                    <label for="form-label text-light">First Name</label>
                    <input type="text" class="form-control" value="<?php echo $d["fname"]?>" id="fname">
                    </div>
                    <div class="col-6 col-md-6 col-lg-6">
                    <label for="form-label text-light">Last Name</label>
                    <input type="text" class="form-control"value="<?php echo $d["lname"]?>" id="lname">
                    </div>                   
                </div>
                <div class="mt-3">
                    <label for="form-label text-light">Email</label>
                    <input type="email" class="form-control"value="<?php echo $d["email"]?>" id="email">
                    </div>
                    <div class="mt-3">
                    <label for="form-label text-light">Mobile</label>
                    <input type="email" class="form-control"value="<?php echo $d["mobile"]?>" id="mobile">
                    </div>
                    <div class="row mt-3">
                    <div class="col-6 col-md-6 col-lg-6 text-light">
                    <label for="form-label"> Usename</label>
                    <input type="text" class="form-control"value="<?php echo $d["username"]?>" disabled>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6 text-light">
                    <label for="form-label">Password</label>
                    <input type="password" class="form-control" value="<?php echo $d["password"]?>" id="pw">
                    </div>                   
                </div>
            <h5 class="mt-3 text-light">Shipping Address</h5>

            <div class="row mt-3">
                    <div class="col-3 col-md-3 col-lg-3">
                    <label for="form-label text-light">No</label>
                    <input type="text" class="form-control" value="<?php echo $d["no"]?>" id="no">
                    </div>
                    <div class="col-9 col-md-9 col-lg-9">
                    <label for="form-label text-light">Line 01:</label>
                    <input type="text" class="form-control" value="<?php echo $d["line_1"]?>" id="line1">
                    </div>                   
                </div>
                <div class="mt-3">
                    <label for="form-label text-light">Line 02:</label>
                    <input type="text" class="form-control"  value="<?php echo $d["line_2"]?>" id="line2">
                    </div> 
                    <div class="mt-3 ">
                    <button class="btn btn-outline-info col-12" onclick="updateData();">Update</button>
                    </div>
            </div>


        </div>

    </div>








    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
    <?php


} else {
  header("location: signIn.php");
}


?>
