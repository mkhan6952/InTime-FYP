<?php
define('TITLE', 'Buy Insurance');
define('PAGE', 'BuyInsurance');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}
if(isset($_REQUEST['buyinsurance'])){
   
   $username = $_REQUEST['name'];
   $usercnic = $_REQUEST['cnic'];
   $useremail = $_REQUEST['email'];
   $userphonenumber = $_REQUEST['phone_number'];
   $userstartingplace = $_REQUEST['starting_place'];
   $userpackage = $_REQUEST['package'];

   $query = "INSERT INTO  buyinsurance(name , cnic , email ,phonenumber , startingplace ,package) VALUES ('$username','$usercnic', '$useremail', '$userphonenumber', '$userstartingplace', '$userpackage')";

   $data =mysqli_query($conn,$query);
   if ($data) {
       echo "<script> location.href='payment.php'; </script>";
       
   }
   else{
       echo "failed";
   }
}
?>

<style>
    .container{
        width: 100%;
    }
    .container .title{
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
        padding-left:430px;
    }
    .container .form{
        width: 100%;
    }
    .container .form .input_field{
         width: 1000px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
    }
    .container .form .input_field label{
        width: 200px;
        margin-right:15px;
        font-size:18px;
    }
    .container .form .input_field input{
        width: 100%;
        border: 1px solid #ced4da;
        font-size:18px;
        padding:8px 10px;
        border-radius:3px;
    }
    .container .form .input_field input:focus,
    .container .form .input_field .selectbox:focus{
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
    }
    .container .form .input_field .selectbox{
         position: relative;
         width:100%;
         height: 40px;
         border: 1px solid #ced4da;
    }
    .container .form .input_field p{
        font: size 16px;
        color: #757575;
        margin-top:17px;
    }
    .container .form .input_field .check{
      position: relative;
         width: 15px;
         height: 15px;
         display: block;
         cursor: pointer;
    }
    .container .form .input_field .btn{
            background-color: #00aa63
    }
</style>
<div >
    <div class="container">

    <form action="#" method="POST">
        <div class="title mt-5 ">
            Buy Insurance
        </div>   

        <div class="form">
            <div class="input_field">
                <label>CNIC:</label>
                <input type="text" class="input" name="cnic"  placeholder="Enter Your CNIC without any Dash:" onkeypress="isInputNumber(event)" required>  
            </div>
            <div class="input_field">
                <label>Time Duration</label>
                <input type="text" class="input" name="phone_number" placeholder="4 hours,2 days,1 week etc:"  required>  
            </div>
            <div class="input_field">
                <label>Starting Place:</label>
                <input type="text" class="input" name="starting_place" placeholder="Enter Your Starting Point:" required>  
            </div>
            <div class="input_field">
                <label>Your package:</label>
                <select class="selectbox" name="package" required>
                    <option value="Hourly">Hourly</option>
                    <option value="Daily">Daily</option>
                    <option value="Weekly">Weekly</option>
                </select>
            </div>
            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>  
                <p>Agree to our terms and conditions</p>
            </div>

            <div class="input_field">
              
               <input type="submit" value="Buy Insurance" class="btn" name="buyinsurance"> 
              
            </div>
            
        </div> 
    </form>      
        
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
<?php
include('includes/footer.php'); 
$conn->close();
?>