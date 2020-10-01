<?php
$user;
include 'check_con.php';
session_start();


if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];
    
    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    
    $sql = "SELECT * from customer";
        $result = $conn->query($sql); 
    
    if ($result->num_rows > 0) {     
         while($row = $result->fetch_assoc()) {
            
                $pass = $row["password"];
        
         }
    } 
        else {   
            echo "NO results";
        } 
    
}

else
{
	header('location:login.php');
}
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

    h2{
        font-size: 6em;
    }

    .info span{
        font-size:2em;
        line-height: 50px;
        
    }
    
    .jumbotron{
        padding: 10px;
    }
    
    .phead{
        font-family: algerian;
        
    }
</style>

</head>
<body>	


<ul class="fixedme">
	<a href="#"><li><span class="fa fa-instagram"></span></li></a>
	<a href="#"><li><span class="fa fa-facebook-official"></span></li></a>
	<a href="#" onclick="alert('thegrabbox@gmail.com')"><li><span class="fa fa-envelope"></span></li></a>
	<a href="#menu"><li><span class="fa fa-whatsapp"></span></li></a>
</ul>					


<div class="container">
		<div class="row">

		<div class="col-md-12 header bg-success">
			<a href="profile.php"> <div class="col-md-2 col-xs-3 text-center text-center send">
                <?php 
                    if(!mysqli_connect_error())
                    {
                        echo $user;
                    }
                    else{
                    
                        echo "login";
                    }
                
                    ?></div></a>  			
        <div class="col-md-8 col-xs-6 text-center title">GrabBox</div>
			<div class="col-md-2 col-xs-3 text-center  cart"><span class="glyphicon glyphicon-shopping-cart "></span></div>
			
		</div>		
</div><div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mynav ">

	<a href="mens.php"><div class="col-md-3 col-lg-3 col-sm-3 col-xs-3  element"><span class="menu shirt">Mens</span> </div></a>
	
	 <a href="womens.php"><div class="col-md-3 col-lg-3 col-sm-3 col-xs-3  element"><span class="menu womens">Womens</span></div></a>
		<a href="other.php"><div class="col-md-3 col-lg-3 col-sm-3 col-xs-3  element"><span class="menu tech">Other</span> </div></a>	
	 <a href="orders.php"><div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 element"><span class="menu reparing">Orders</span></div></a>
			 			 
</div>


		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 tex-center">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  jumbotron text-center phead" ><h2>Change Password</h2></div>    
            
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  jumbotron info">
               
    <form method="GET" action="changepassme.php">
    <div class="form-group">
      <label for="username">Enter Present Password:</label>
      <input type="password" class="form-control" id="username" placeholder="Enter Present Password" name="ppass" required>
    </div>
    <div class="form-group">
      <label for="password">Enter New Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="New password" name="npass" required>
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="sub2">Change Password</button>
            
                </form>
            
    </div>	
    </div>
				
<!-- Footer -->







				<div id="footer" class="text-center">
					<div class="inner">
						<h2>GrabBox</h2>
						<br>
					<div class="row">	
						<div class="delivery col-md-6">
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


						<div class="col-md-6">
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

				

							<footer class="footer">
					<a href="index.php">
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




</body>
</html>


