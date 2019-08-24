<?php

include 'check_con.php';

session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];
    
$myid=$_GET['id'];
	

 $conn = mysqli_connect($servername, $username, $password, $dbname); 

    
	
$sql = "update vendor set approve=0 where id = '$myid'  ";

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