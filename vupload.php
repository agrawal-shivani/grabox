<?php
$user="login";
include 'check_con.php';
session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];

                $sql="select * from vendor where user='$user' ";

                $result=mysqli_query($conn,$sql); 


                if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $approve = $row['approve'];

                    if ($approve != '1') {
                        header('location:vnotconform.php');
                      }  
                }
                }


}

else{
  header('location:vlogin.php');
}

?>


<html lang="en">
<head>
  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

body{
	background: skyblue;
}


.row div{
	margin-top: 4%;
	margin-left: 5%;
	margin-bottom: 0;
	border-radius: 10px;
	border-bottom: 6px solid grey;
	border-right: 5px solid grey;
}
</style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Grabbox</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="vupload.php">Vendor's panel</a></li>
      
      
      <li><a href="#"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li class="active"><a href="">@<?php echo $user ?></a></li>
      <li><a href="logout3.php"><span class="glyphicon glyphicon-log-out	"></span> Logout  </a></li>
    </ul>
  </div>
</nav>
  

  <div class="row col-md-12 col-lg-12 col-xs-12">
				<a href="upload_pinfo.php"><div class="col-md-5 col-lg-5 col-xs-5 jumbotron text-center">Upload Product Info</div></a>
				<a href="upload_img.php"><div class="col-md-5 col-lg-5 col-xs-5 jumbotron text-center">Upload Images</div></a>			
				<a href="orders_vendor.php"><div class="col-md-5 col-lg-5 col-xs-5 jumbotron text-center">orders</div></a>      
        <a href="edit_1pinfo.php"><div class="col-md-5 col-lg-5 col-xs-5 jumbotron text-center">Edit Product</div></a>      
        
  </div>			




<footer class="ftr col-xs-12 col-md-12">
  
<div class="col-md-6 col-xs-12 footer">
    
  
</div>


</footer>



</body>
</html>


