<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>Divine Derm</title>

</head>
<body class="signIn_Body">

<!-- Sign In Box -->
<div class="signIn_Box" id="signInBox">

<h2 class="text-center text-light">Reset Password</h2>

<div class="d-none">
  <input type="hidden" id="vcode" value="<?php echo ($_GET["vcode"])?>">
</div>

<div class="mt-3 mb-4 text-light">
    <label for="form-label">Password :</label>
    <input type="password" class="form-control" id="np" />
</div>

<div class="mt-34 text-light">
    <label for="form-label">Re-enter Password :</label>
    <input type="password" class="form-control" id="np2" />
</div>


<div class="d-none" id="msgDiv">
    <div class="alert alert-danger" id="msg"></div>
</div>

<div class="mt-4">
    <button class="btn btn-outline-info col-12" onclick="resetPassword();">Update</button>
</div>


</div>
    


<script src="script.js"></script>
</body>
</html>