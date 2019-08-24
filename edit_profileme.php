<?php
$servername = "localhost";
 $username = "root"; 
 $password = "";
  $dbname = "thegrabbox";

session_start();


if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];
    
    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    
        $sql = "SELECT * from customer where user='$user' ";
        $result = $conn->query($sql); 
    
    if ($result->num_rows > 0) {     
         while($row = $result->fetch_assoc()) {
                $name = $row["name"];
             $email = $row["email"];
              $user = $row["user"];
            $mobile = $row["contact"];
            $image = $row["image"];
         }
    } 
}
else
{
  header('location:clogin.php');
  
}


$name=$_GET['name'];
$email=$_GET['email'];
$contact=$_GET['contact'];

 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}

$sql = "UPDATE customer set name='$name' where user='$user' ";

$sql = "UPDATE customer set email='$email' where user='$user' ";

$sql = "UPDATE customer set contact='$contact' where user='$user' ";

if (mysqli_query($conn,$sql))
 {    
    
   header('location:profile.php');

}

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }

mysqli_close($conn);

 ?>