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
$pid = $_GET['pid'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}



$sql = "update vendor_$user set name='$name',irate='$irate',field='$field',info='$info'	where id='$pid' ";


if (mysqli_query($conn,$sql))
 {    
    header('location:edit_1pinfo.php');

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }
    

mysqli_close($conn);

 ?>