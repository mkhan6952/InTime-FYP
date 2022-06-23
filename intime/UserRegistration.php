<?php
  include('dbConnection.php');

  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];
        $cnic = $_REQUEST['cnic'];
        $number = $_REQUEST['number'];
        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password,cnic,number) VALUES ('$rName','$rEmail', '$rPassword','$cnic' ,'$number')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <style>
      body{
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.5;
    color: #212529;
      }
   </style> 

  <title>User Registration</title>
</head>
<body>
  <div class="container pt-5" id="registration">
  <h2 class="text-center heading">Create an Account</h2>
  <div class="row mt-4 mb-4">
    <div class="col-md-6 offset-md-3">
      <form action="" class="shadow-lg p-4" method="POST">
        <div class="form-group pb-2">
          <i style="color:#00aa63;font-size:22px;padding-right:8px;" class="bi bi-person-fill"></i><label for="name" class="pl-2 pb-2 font-weight-bold">  Name</label><input type="text"
            class="form-control" placeholder="Name" name="rName">
        </div>
        <div class="form-group pb-2">
          <i style="color:#00aa63;font-size:22px;padding-right:8px;" class="bi bi-envelope-fill"></i><label for="email" class="pl-2 pb-2 font-weight-bold">Email</label><input type="email"
            class="form-control" placeholder="Email" name="rEmail">
        </div>
        <div class="form-group pb-2">
          <i style="color:#00aa63;font-size:22px;padding-right:8px;"  class="bi bi-key-fill"></i><label for="pass" class="pl-2 pb-2 font-weight-bold">
            Password</label><input type="password" class="form-control" placeholder="Password" name="rPassword">
        </div>
        <div class="form-group pb-2">
          <i style="color:#00aa63;font-size:22px;padding-right:8px;" class="bi bi-credit-card-fill"></i><label for="cnic" class="pl-2 pb-2 font-weight-bold">CNIC</label>
          <input type="text" class="form-control" placeholder="CNIC" onkeypress="isInputNumber(event)" name="cnic"> 
        </div>
        <div class="form-group pb-2">
          <i style="color:#00aa63;font-size:22px;padding-right:8px;" class="bi bi-telephone-fill"></i><label for="number" class="pl-2  pb-2 font-weight-bold">Phone Number</label>
          <input type="text" class="form-control" placeholder="Phone Number" onkeypress="isInputNumber(event)" name="number"> 
        </div>
        
        <button style="width:100%" type="submit" class="btn btn-outline-success mt-3 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>

        <!-- <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em> -->
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
      </form>

      <div class="text-center"><a class="btn btn-success mt-3 shadow-sm font-weight-bold " href="index.php">Back
            to Home</a></div>
    </div>
  </div>
  <!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }

</script>
</body>
</html>

