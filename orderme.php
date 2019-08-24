<?php
$user="login";
include 'check_con.php';


session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];
    
$id = $_GET['pid'];
$vuser = $_GET['vuser'];
$address = $_GET['address'];

 $conn = mysqli_connect($servername, $username, $password, $dbname); 

    	
$sql = "INSERT INTO orders(`user`,`vuser`,`address`,`pid`) VALUES ('$user','$vuser','$address','$id')";

if (mysqli_query($conn,$sql))
 {    
    header('location:order_submitted.php');

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);





}
?>