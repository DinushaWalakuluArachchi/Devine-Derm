<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>Divine DErm</title>

</head>
<body class="signIn_Body">

<!--Forgetpassword  Box -->
<div class="signIn_Box" id="signInBox">

<h2 class="text-center text-light">Forget Password</h2>



<div class="mt-3 mb-4 text-light">
    <label for="form-label">Email :</label>
    <input type="email" class="form-control" id="e" />
</div>


<div class="d-none" id="msgDiv">
    <div class="alert alert-danger" id="msg"></div>
</div>

<div class="mt-4">
    <button class="btn btn-outline-info col-12 col-md-12 col-lg-12" onclick="forgetPassword();">Send Email</button>
</div>


</div>
    


<script src="script.js"></script>
</body>
</html>