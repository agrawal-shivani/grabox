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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Grabbox</a>
    </div>
  </div>
</nav>
 
      <div class="col-md-1 col-lg-1 col-xs-0"></div>
      <div class="col-md-4 col-lg-4 col-xs-12 jumbotron">
      	<form method="POST" action="clogme1.php">
    <div class="form-group">
        <h3 align="center">Customer <u> Login</u></h3>
      <label for="name">Userame:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter the Full name " name="user" required>
 </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="sub">Login</button>
          Enter Details      
          <br>
          <a href="forgetpass.php">Forget Password...</a>
            </form>
        
      </div>
      <div class="col-md-1 col-lg-1 col-xs-0"></div>
      <div class="col-lg-5 col-md-5 col-xs-12 jumbotron" >
        <h3 align="center">Customer <u> Signup</u></h3>

        <form method="GET" action="cloginme.php">
    <div class="form-group">
      <label for="name">Full Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter the Full name " name="name" required>
 </div>
 <div class="form-group">
      <label for="username">Userame:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter the username " name="username" required>
 </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter the Email  " name="email" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact No.:</label>
      <input type="number" class="form-control" id="contact" placeholder="Enter The Contact Number " name="contact" onblur="funmobno()"   required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="sub">Login</button>
          Enter Details      
          
            </form>
          </div>
        </div>
   
        
     </div>

<script type="text/javascript">
function funmobno()
{

var no=document.getElementById('contact').value;
g=no.length;

if( g>13 && g<10)
{
alert("invalid number");
}


}
  
</script>

</body>
</html>