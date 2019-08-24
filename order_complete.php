<?php
include 'check_con.php';

session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];
    
$mid=$_GET['mid'];
	

 $conn = mysqli_connect($servername, $username, $password, $dbname); 
	
$sql = "update orders set status='complete' where id = '$mid' ";

  $result = mysqli_query($conn,$sql);

if (mysqli_query($conn,$sql))
 {    
    header('location:orders.php');

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);





}
?>