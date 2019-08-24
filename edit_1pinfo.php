<?php
$user="login";
include 'check_con.php';

session_start();

if(isset($_SESSION['username']) )
{
   $user=$_SESSION['username'];


}
else{
	header('location:vlogin.php');
}	

 $conn = mysqli_connect($servername, $username, $password, $dbname); 

    $sql="select * from vendor_$user ";

                $result = mysqli_query($conn,$sql);




?>


<html lang="en">

<head>
	<title>Upload</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">

<style type="text/css">
body{
        margin: 0;
        padding: 0;
        padding-bottom: 50px;
        background: skyblue ;
      }

        #col1{
           border-right: 1px solid black; 
        }

        .jumbotron{
          margin-top: 10px; 
          padding: 5px;      
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
      <li class=""><a href="vupload.php">Vendors Panel</a></li>
      <li class="active"><a href="edit_1pinfo.php">Upload Home Page Images </a></li>
      
      <li><a href="#"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> @<?php echo $user; ?> </a></li>
      <li><a href="logout3.php"><span class="glyphicon glyphicon-log-out "></span> Logout  </a></li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="jumbotron text-center">
       
	         <h2 align="center">GrabBox<br>
                 <small>Upload Home Page Images </small></h2>
            
    </div>        <h3 align="center">Home Page <u>Images</u></h3>


</div>


    
    
			<div class="col-md-12 product">
				<div class="row">
					
				
			<?php
    
                    
                    if ($result->num_rows > 0) {
	                   while ($row = $result->fetch_assoc()) {
			                 $name = $row['name'];
			                 $id = $row['id'];
                            $mrate = $row['mrate'];
                            $orate = $row['orate'];
                           $irate = $row['irate'];
                           $info = $row['info'];
                           $myimg = $row['image'];
                            
                     
                    ?>

                <div class="col-md-3 mystruct text-center" >
						<div class="col-md-11 myslide"  >
						<img src="<?php echo $myimg ?>">
						    <h2><?php echo $name; ?></h2>
						    <p><del><?php echo "RS. ".$mrate; ?></del>
                            <?php echo "RS. ".$orate;?></p>
                            <p style="margin-bottom: 20px;"><?php echo $info; ?></p>
						    <form method="GET" action="edit_pinfo.php" class="col-md-12">
								<input type="hidden" name="id" value="<?php echo $id;  ?>" />
								<input type="file" name="file" class="form-control col-lg-12 col-lg-12"/>
								<input type="submit" name="submit" value="Edit" class=" btn btn-primary " style="margin-top: 50px;" />
							</form>


						 </div>   
					</div>
                    <?php   }  } ?>
					

				</div>
				
			</div>
</body>
</html>