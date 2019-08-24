<?php

$servername = "localhost";
 $username = "root"; $password = "";
  $dbname = "thegrabbox";

$name=$_GET['name'];
$email=$_GET['email'];
$user=$_GET['username'];
$contact=$_GET['contact'];
$pass=$_GET['password'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}


$sql = "SELECT id from customer";

$myid=mysqli_query($conn,$sql);



$sql = "INSERT INTO customer(`name`,`user`,`email`,`contact`, `password`) VALUES ('$name','$user','$email','$contact','$pass')";

if (mysqli_query($conn,$sql))
 {    
    
 	session_start();
		          $_SESSION['username']=$user;

    header('location:index.php');

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);

 ?>