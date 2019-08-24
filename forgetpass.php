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
    		background: skyblue;
    	}

      .jumbotron{
        margin-top: 2%;
      }
    </style>
    <body>
    <div class="container-fluid">
    <div class="row">
   </div>


      <h1 class="jumbotron text-center col-md-12 col-lg-12 col-xs-12">Forget Password</h1>
        <form action="forgetpassme.php" method="GET" class="jumbotron col-lg-12 col-lg-12 col-xs-12">
          
        <div class="form-group">
          <label class="text-right">Enter Your Email id :</label><br>
          <input type="email" class="form-control" placeholder="Email id" name="email" id="email" required>
        </div>
        <input type="submit" class="btn btn-primary" name="">


        </form>
        <a href="clogin.php"><div class="col-lg-5 col-lg-5 col-xs-12  jumbotron text-center"><h2>Login</h2> </div>   </a>
        <div class="col-lg-2 col-lg-2 col-xs-12"></div>
        <a href="index.php"><div class="col-lg-5 col-lg-5 col-xs-12 jumbotron text-center"><h2>Grabbox Home</h2> </div>   </a>
        
     </div> 
</body>
</html>