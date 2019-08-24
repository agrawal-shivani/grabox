<?php
$user;
include 'check_con.php';
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style>

    	body{
    		margin: 0;
    		padding: 0;
    		padding-bottom: 50px;
        background:skyblue; 
    	}

      .jumbotron{
        margin-top: 2%;
      }
    </style>
    <body>
    <div class="container-fluid">
    <div class="row">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Grabbox</a>
    </div>
  </div>
</nav>

    <div class="col-md-3 col-lg-3 col-xs-0"></div>
      
      <div class="col-lg-6 col-md-6 col-xs-12 jumbotron" >
        <h3 align="center">Edit <u>Profile</u></h3>

        <form method="GET" action="edit_profileme.php">
    <div class="form-group">
      <label for="name">Full Name:</label>
      <input type="text" class="form-control" id="name" value="<?php echo $name ?>" name="name" required>
 </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $email ?>" name="email" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact No.:</label>
      <input type="number" class="form-control" id="contact" value="<?php echo $mobile ?>" name="contact" required>
    </div>
    
    
    <input  type="submit" class="btn btn-primary" name="sub" value="Update">
          Enter Details.      
          
            </form>
          </div>
        </div>
   
        
     </div> 
</body>
</html>