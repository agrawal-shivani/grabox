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
   <style type="text/css">
   	body{

background:skyblue;
padding-bottom: 100px; 
background-attachment:fixed;
background-size:cover;
display:table;
z-index: 1;
height: 100vh;
}


.div1{  
margin-top: 10%;
padding-top: 10px;
}
   </style>
    <body>

<div class="container">
<div class="col-md-3 col-lg-3 col-xs-0"></div>
<div class=" div1 col-md-8  col-lg-8 col-xs-12 jumbotron">
       
	         <h1 align="center">GrabBox<br>
                 
        <h3 align="center">Admin <u>Login</u></h3>
	<form method="POST" action="admin.php">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="sub2">Login</button>
            
            
  </form>
</div>
</div>

</body>
</html>