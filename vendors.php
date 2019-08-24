<?php
include 'check_con.php';

session_start();

if(isset($_SESSION['username']))
{

   $user=$_SESSION['username'];

}

else{
	header("location:index.html");
}


 $conn = mysqli_connect($servername, $username, $password, $dbname); 

    $sql="select * from vendor";

                $result = mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<style type="text/css">
	
	
body{
background:skyblue;
padding-bottom: 100px; 
background-attachment:fixed;
background-size:cover;
z-index: 1;
height: 100vh;
}


	.mydata{
		margin-left: 45px;
		font-size: 1em;
		padding: 15px;

	}
	.btn{
			padding-right:2px;
		padding-left:2px; 

	}

</style>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Grabbox</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="myadmin.php">Vendors panel</a></li>
      
      <li><a href="#"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out	"></span> Logout  </a></li>
    </ul>
  </div>
</nav>

<div class=" col-md-12 col-lg-12 container">
					<div class="row ">
					<h1 class="col-md-12 text-center jumbotron">Vendors<br>
					<a href="index.php"><input type="button" class="btn btn-primary" value="Home" name="">
					</a></h1>


			<?php
    
                    
                    if ($result->num_rows > 0) {
	                   while ($row = $result->fetch_assoc()) {
	                   		$myid = $row['id'];
			                 $name = $row['name'];
			                 $myuser = $row['user'];
			                 $email = $row['email'];
			                 $contact = $row['contact'];
			                 $approve = $row['approve'];
			                
                     
                    ?>
                    
                <div class="col-md-3 mydata col-lg-3 jumbotron" >
						<?php echo "$myid ) <br>"."<u>Name</u> : ".$name."<br>";
								echo "<u>Username</u> : ".$myuser."<br>";
								echo "<u>email</u> : ".$email."<br>";
								echo "<u>Contact </u>: ".$contact."<br>";

								if ($approve == 0) {
									echo "<i>Not Approve</i><br>";
								}
								else {
									echo "<i>Approved</i> <br>";
									}
								?>
								<br>	
							
								<form action="vproducts.php" method="POST">

								<input type="hidden" name="itsuser" value="<?php echo $myuser; ?>"">
								<input type="hidden" name="myid" value="<?php echo $myid; ?>"> 	
						 	  <input type="submit"  class="btn btn-primary col-lg-4 col-md-4 col-xs-4" name="" value="Products">
								</form>

							<?php if ($approve!=1) {
								
							?>
								<form action="approve.php" type="GET" class="col-lg-4 col-md-4 col-xs-4">
						    <input type="hidden" name="id" value="<?php echo $myid; ?>"> 
						    <input  type="submit" class="btn btn-success" value="Approve">
						    </form>
							<?php }
						    else{  ?>	
						 	  	

								<form action="approvenot.php" type="GET" class="col-lg-4 col-md-4  col-xs-4">
						    <input type="hidden" name="id" value="<?php echo $myid; ?>"> 
						    <input  type="submit" class="btn btn-danger" value="Decline">
						 	  </form>
						 	  <?php }  ?>
					</div>
                    <?php   }  } ?>
					

					

				</div>
			</div>		




</body>
</html>