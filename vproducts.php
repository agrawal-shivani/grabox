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

$myid = $_POST['myid'];
$itsuser = $_POST['itsuser'];

 $conn = mysqli_connect($servername, $username, $password, $dbname); 

    $sql="select * from vendor_$itsuser ";

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
          padding: 15px;      
        }

        td,th{
        	border:2px solid black;
        	padding-top: 5px;
        	padding-bottom: 5px;
          font-size: 12px;
        }

        table .btn{
          width: 100px;
          padding:2px;
          margin-top: 15px; 
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
      <li class=""><a href="myadmin.php">Admin Panel</a></li>
      <li class="active"><a href="upload.php">Upload Home Page Images </a></li>
      
      <li><a href="#"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin_profile.php"><span class="glyphicon glyphicon-user"></span> <?php echo $user; ?> </a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out "></span> Logout  </a></li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="jumbotron text-center">
       
	         <h2 align="center">GrabBox<br>
                 <small>Upload Home Page Images </small></h2>
            
    </div>        <h3 align="center">Vendors <u>Product</u></h3>


</div>
<div class="container">
    
    
			<div class="col-md-12 col-lg-12 col-xs-12 	product ">
				<div class="row">
					<br><br>
				<table class=" col-md-12 col-lg-12 col-xs-12 ">
				<tr>
					<th class="text-center bg-danger" >Sr.<br>No.</th>
					<th class="text-center bg-primary"  >Name</th>
					<th class="text-center bg-success">Input<br> Rate</th>
					<th class="text-center bg-primary">Market<br> Rate</th>
					<th class="text-center bg-info">Selling<br> Rate</th>
					<th class="text-center bg-primary">Information</th>
          <th class="text-center bg-info col-md-4 col-lg-4">Image</th>
          <th class="text-center bg-primary col-md-4 col-lg-4">Approve</th>
          
          
				</tr>
			<?php
    
                    $i=1;
                  
                      if ($result->num_rows > 0) {
                      while ($row = $result->fetch_assoc()) {
                            $name = $row['name'];
			                     $id = $row['id'];
                            $mrate = $row['mrate'];
                            $orate = $row['orate'];
                           $irate = $row['irate'];
                           $info = $row['info'];
                           $myimg = $row['image'];
                          $approve = $row['approve'];    
                     
                    ?>


            				        
                    	<tr class="">

                    		<td class="text-center  col-md-1 col-lg-1 col-xs-1"><?php echo $i; ?></td>

                    		<td class="text-center  col-md-1 col-lg-1 col-xs-1"><?php echo $name; ?></td>
                    		
                        <td class="text-center  col-md-1 col-lg-1 col-xs-1"><?php echo $irate; ?></td>
                    		
                        <td class="text-center  col-md-1 col-lg-1 col-xs-1">
                        <form action="update_mrate.php" method="GET">
                        <input type="hidden" name="itsuser" value="<?php echo $itsuser ?>">
                        <input type="hidden" name="pid" value="<?php echo $id ?>">
                        <input type="number" class="btn" name="mrate" placeholder="<?php echo "Rs.".$mrate; ?>">
                        <input type="submit" class="btn btn-danger" name="">
                        </form>
                        </td>

                    		<td class="text-center  col-md-1 col-lg-1 col-xs-1">
                        <form action="update_orate.php" method="GET">
                        <input type="hidden" name="itsuser" value="<?php echo $itsuser ?>">
                        <input type="hidden" name="pid" value="<?php echo $id ?>">
                        <input type="number" class="btn" name="orate" placeholder="<?php echo "Rs.".$orate; ?> ">
                        <input type="submit" class="btn btn-danger" name="">
                        </form>
                        </td>

                    		<td class="text-center  col-md-3 col-lg-3 col-xs-3 text-center"><?php echo $info; ?></td>

                        <td class="text-center  col-md-2 col-lg-2 col-xs-2 text-center">
                        <img src="<?php echo $myimg; ?>" height="100px"></td>

                        <td class="text-center  col-md-2 col-lg-2 col-xs-2 text-center">
                        <?php
                        if ($approve == '1') {
                          echo  "Product is Approved.";
                        ?>

                        <form action="approvenot_product.php" type="GET" class="col-lg-4 col-md-4 col-xs-4">
                         
                        <input type="hidden" name="itsuser" value="<?php echo $itsuser ?>">
                        <input type="hidden" name="pid" value="<?php echo $id ?>"> 
                         <input  type="submit" class="btn btn-danger" value="Decline">
                        </form>
                                                  
                        <?php
                        }


                        else{
                          echo "Product is Not approved";
                        
                       ?>

                        <form action="approve_product.php" type="GET" class="col-lg-4 col-md-4 col-xs-4">
                         
                        <input type="hidden" name="itsuser" value="<?php echo $itsuser ?>">
                        <input type="hidden" name="pid" value="<?php echo $id ?>"> 
                         <input  type="submit" class="btn btn-success" value="Approve">
                        </form>
                                                  
                        <?php
                        }
     


                        ?>
                        </td>

                    	</tr>
                    	



                    <?php $i+=1;  }  } ?>
					</table>

				</div>
				
			</div>
				

</div>
</body>
</html>