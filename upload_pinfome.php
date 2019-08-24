<?php
session_start();

if(isset($_SESSION['username']) )
{
   $user=$_SESSION['username'];
}
else
{
	header('vlogin.php');
}	


$servername = "localhost";
 $username = "root"; $password = "";
  $dbname = "thegrabbox";

$field=$_GET['field'];
$name=$_GET['name'];
$irate=$_GET['irate'];
$info=$_GET['info'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}


$sql = "INSERT INTO vendor_$user(`name`, `irate`,`field`,`info`) VALUES ('$name','$irate','$field','$info')";


if (mysqli_query($conn,$sql))
 {    
    header('location:upload_img.php');

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }
    

mysqli_close($conn);

 ?>