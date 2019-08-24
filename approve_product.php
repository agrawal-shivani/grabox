<?php
include 'check_con.php';

session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];
    
$itsuser = $_GET['itsuser'];
$pid=$_GET['pid'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 

    
	
$sql = "update vendor_$itsuser set approve=1 where id = '$pid'  ";

if (mysqli_query($conn,$sql))
 {    
    header('location:vendors.php');

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);





}
?>