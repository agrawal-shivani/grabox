<?php
$user="login";
include 'check_con.php';

session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];

}


 $conn = mysqli_connect($servername, $username, $password, $dbname); 

    $sql="select * from womenproduct";

                $result = mysqli_query($conn,$sql);



?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GrabBoX</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">

<style type="text/css">




</style>

</head>
<body>	



<ul class="fixedme">
	<a href="#"><li><span class="fa fa-instagram"></span></li></a>
	<a href="#"><li><span class="fa fa-facebook-official"></span></li></a>
	<a href="#" onclick="alert('thegrabbox@gmail.com')"><li><span class="fa fa-envelope"></span></li></a>
	<a href="#menu"><li><span class="fa fa-whatsapp"></span></li></a>
</ul>					


<div class="container-fluid">
		<div class="row">

		<div class="col-md-12 col-lg-12 col-xs-12 header bg-success">
        <a href="profile.php"> <div class="col-md-2 col-lg-2 col-xs-3 text-center text-center send" >
                <?php 
                    if(!mysqli_connect_error())
                    {
                        echo $user;
                    }
                    else{
                    
                        echo "login";
                    }
                
                    ?></div></a>  			
            <div class="col-md-8 col-lg-8 col-xs-6 text-center title">GrabBox</div>
			<div class="col-md-2 col-lg-2 col-xs-3  text-center  cart"><span class="glyphicon glyphicon-shopping-cart "></span></div>
			
		</div>
</div>

<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mynav ">

	<a href="mens.php"><div class="col-md-3 col-lg-3 col-sm-3 col-xs-3  element"><span class="menu shirt">Mens</span> </div></a>
	
	 <a href="womens.php"><div class="col-md-3 col-lg-3 col-sm-3 col-xs-3  element"><span class="menu womens">Womens</span></div></a>
		<a href="other.php"><div class="col-md-3 col-lg-3 col-sm-3 col-xs-3  element"><span class="menu tech">Other</span> </div></a>	
	 <a href="orders.php"><div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 element"><span class="menu reparing">Orders</span></div></a>
			 			 
</div>
	</div>
	
	<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 product">

					
				
			<?php
    
                    
			$sql = "Select * from vendor where approve='1' "; 	            
			$result = mysqli_query($conn,$sql);

		    if ($result->num_rows > 0) {
	        while ($row = $result->fetch_assoc()) {
					$vuser = $row['user'];

				$sql2 = "Select * from vendor_$vuser";
				$result2 = mysqli_query($conn,$sql2);
                   
                    if ($result2->num_rows > 0) {
	                   while ($row2 = $result2->fetch_assoc()) {
			                 $name = $row2['name'];
			                  $id = $row2['id'];
                            $mrate = $row2['mrate']; 
                            $orate = $row2['orate'];
                           $irate = $row2['irate'];
                           $info = $row2['info'];
                           $myimg = $row2['image'];
                    		$field = $row2['field'];        
                     		$approve = $row2['approve'];

                     if ($field=='womens' && $approve == 1) {
                     	
                     
                    ?>

                
               <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 mystruct text-center" >
						<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 myslide"  >
							<div class="encap"><img src="<?php echo $myimg ?>">
						    <h2><?php echo $name; ?></h2>
						    <p><del><?php echo "RS. ".$mrate; ?></del>
                            <?php echo "RS. ".$orate; ?></p>
						    <p class="pinfo"><?php echo $info; ?></p>
						    </div>
						    	<form action="order.php" type="GET">
						    <input type="hidden" name="vuser" value="<?php echo $vuser; ?>">
						    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
						    <input  type="submit" class="btn btn-danger registration_btn" value="Buy"><br><br>
						 	  </form>

						 </div>   
				</div>    <?php 	}  }  } 
                    		}	}	
                    ?>
					

				</div>
				
			</div>

<!-- Footer -->

				<div id="footer" class="text-center">
					<div class="inner">
						<h2>GrabBox</h2>
						<br>
					<div class="row">	
						<div class="delivery col-md-6 col-lg-6 col-xs-12 col-sm-12">
							<h3>Delivery Points</h3><br>
							<ul>
								<li>TV Center</li>
								<li>Cidco </li>
								<li>Hudco</li>
								<li>Seven Hills</li>
								<li>Akashwani Chowk</li>
								<li>Kranti Chowk</li>
								<li>Darga</li>
								<li>Deolai chowk</li>	
							</ul>
						</div>


						<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
						<h3>Follow Us On</h3><br>

						<ul class="icons">
							<li><a href="#" class="fa fa-twitter "><span class="label"><br>Twitter</span></a></li>
							<li><a href="#" class="fa fa-facebook"><span class="label"><br>Facebook</span></a></li>
							<li><a href="#" class="fa fa-instagram"><span class="label"><br>Instagram</span></a></li>
							<li><a href="#" class="fa fa-envelope"><span class="label"><br>Email</span></a></li>
						</ul>
						</div>
						</div>
					<br>
						<p class="copyright">&copy; SRB. Design:Saurabh Dhakne (SRB)<br> </p>
							
							<a href="#"><div class="fa fa-instagram" ></div></a>
							<a href="#"><div class="fa fa-facebook-official"></div></a>
							<a href="#"><div class="fa fa-envelope"></div></a>
						
					</div>
				</div>



	</div>	

</div>


<br><br><br><br><br><br><br><br>
				

				<footer class="footer"><a href="index.php">
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 ftr">
						<span class="glyphicon glyphicon-home"></span>
					</div></a>
                    
					<div class="col-md-3 col-lg-3  col-sm-3  col-xs-3 ftr">
						<span class="glyphicon glyphicon-search"></span>
					</div>
		                       
					<a href="post.php">
					<div class="col-md-3 col-lg-3  col-sm-3  col-xs-3 ftr">
						<span class="glyphicon glyphicon-file"></span>
					</div>					
					</a>
                    			
					
					<a href="profile.php">
                    			<div class="col-md-3 col-lg-3  col-sm-3  col-xs-3 ftr">
						<span class="glyphicon glyphicon-user"></span>
					</div>		
                        		</a>
				</footer>


r



</body>
</html>


