<?php

$servername = "localhost";
 $username = "root"; $password = "";
  $dbname = "thegrabbox";

$itsuser = $_GET['itsuser'];
$pid=$_GET['pid'];
$mrate=$_GET['mrate'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}


$sql = "Update vendor_$itsuser set mrate = '$mrate'  where id=$pid "  ;

if (mysqli_query($conn,$sql))
 {    
    
 
    header('location:vendors.php');

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);

 ?>