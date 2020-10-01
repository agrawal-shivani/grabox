<?php

$servername = "localhost";
$username = "root"; $password = "";
$dbname = "thegrabbox";

$ppass=$_GET['ppass'];
$npass=$_GET['npass'];

include 'check_con.php';
session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}


    $sql = "SELECT * from customer where user='$user' ";

    $myid=mysqli_query($conn,$sql);

if ($myid->num_rows > 0) {
	while ($row = $myid->fetch_assoc()) {
			$password = $row["password"];
            $username = $row["user"];
            
	}
	}



    if($password == $ppass)
                {
        $sql = "UPDATE customer SET password='$npass' where user='$username' "; 
 
        
    }

if (mysqli_query($conn,$sql))
 {    
      echo "alert(password Change Successfully);";
      header('location:index.php');

  
  }        

else{
       echo" Unable to change Password";
     }
    

}

mysqli_close($conn);   
    
?>
