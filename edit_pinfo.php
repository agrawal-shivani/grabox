<?php
$user="login";
include 'check_con.php';

session_start();


if(isset($_SESSION['username']) )
{
   $user=$_SESSION['username'];
}
else
{
  header('vlogin.php');
} 

$pid = $_GET['id'];

$sql2 = "Select * from vendor_$user where id=$pid";
        $result2 = mysqli_query($conn,$sql2);
                   
                    if ($result2->num_rows > 0) {
                     while ($row2 = $result2->fetch_assoc()) {
                       $name = $row2['name'];
                        $id = $row2['id'];
                           $irate = $row2['irate'];
                           $info = $row2['info'];
                           $myimg = $row2['image'];
                        $field = $row2['field'];     
                        }
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
        background: skyblue ;
    	}

        #col1{
           border-right: 1px solid black; 
        }

        .jumbotron{
        	margin-top: 10px;	
          padding: 5px;      
        }

        form{
          margin-top: 150px;
        }
    </style>
    <body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Grabbox</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="vupload.php">Vendor Panel</a></li>
      <li class="active"><a href="upload_pinfo.php">Upload Product Info.</a></li>
      
      <li><a href="#"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $user ; ?>  </a></li>
      <li><a href="logout3.php"><span class="glyphicon glyphicon-log-out "></span> Logout  </a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
    <div class="jumbotron text-center">
       
	         <h1 align="center">GrabBox<br>
                 <small>Upload Products </small></h1>
            
    </div>

        
    
    <div class="row">
        <div class="col-lg-2 col-md-2"></div>
    
        
        <div class="col-lg-1 col-md-1" id="col1"></div>
        <div class="col-lg-1 col-md-1"></div>
      <div class="col-lg-4 col-md-4">
        <h3 align="center">Edit Your <u>Product</u></h3>
        

            <div class="col-md-12 col-lg-12 col-xs-12 text-center"><img src="<?php echo $myimg ?>" width="200px">
            </div>
        <form method="GET" action="edit_pinfome.php">
          
        <input type="hidden" name="pid" value='<?php echo $pid; ?>' >

    <div class="form-group" >
      <input type="radio" id="mens" name="field" value="mens">
      <label for="mens">Mens</label><br>

      <input type="radio"  id="tech" name="field" value="womens">
      <label for="womens">Womens</label><br>

      <input type="radio"  id="accessaries" name="field" value="Other">
      <label for="accessaries">Other Product</label><br>

    </div>

    <div class="form-group">
      <label for="name">Name of Product:</label>
      <input type="text" class="form-control" id="name" value="<?php echo $name ;?>" name="name" required>
    </div>
            

    <div class="form-group">
      <label for="mobile">Your Selling Rate:</label>
      <input type="number" minlength="10" class="form-control" id="irate" value="<?php echo $irate ; ?>" name="irate" required>
   	 </div>
                    

    <div class="form-group">
      <label for="password">Information:</label>
      <input type="text" class="form-control" id="info" value="<?php echo $info ; ?>" name="info" required>
    </div>
          
                    
    <br>        
<button type="submit" class="btn btn-primary" name="" > Upload</button>
  </form>
          
      </div>
      
    </div>
</div>

</body>
</html>