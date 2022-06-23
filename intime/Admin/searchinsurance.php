<?php
define('TITLE', 'Verify-Insurance');
define('PAGE', 'searchinsurance');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>
<div class="col-sm-9 col-md-10 mt-5 text-center">
  <!--Table-->
  <p class=" bg-dark text-white p-2">List of Current Insurance Buyer</p>
  <?php
    $sql = "SELECT * FROM buyinsurance";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead>
   <tr>
    <th scope="col">CNIC</th>
    <th scope="col">Time Duration</th>
    <th scope="col">StartingPlace</th>
    <th scope="col">Package</th>
    <th scope="col">Date&Time</th>
    <th scope="col">Action</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    
    echo '<td>'. $row["cnic"].'</td>';
    echo '<td>'. $row["phonenumber"].'</td>';
    echo '<td>'.$row["startingplace"].'</td>';
    echo '<td>'.$row["package"].'</td>';
    echo '<td>'.$row["dateandtime"].'</td>';
    echo '<td><form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["id"] .'><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>
   </tr>';
  }

 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM `buyinsurance` WHERE `id`={$_REQUEST['id']}"; 
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
?>
</div>
</div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>