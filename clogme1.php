<?php

if(isset($_POST['sub']))
{
	include 'check_con.php';

	$uname=$_POST['user'];
	$password=$_POST['password'];

	$sql="select * from customer where user='$uname' and password='$password' ";

	$result=mysqli_query($conn,$sql);


	if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
			$user = $row['user'];
			$psd = $row['password'];
        
			if ($uname == $user && $password == $psd) {
				session_start();
		          $_SESSION['username']=$user;
                               
        

                    header('location:index.php');
					break;
			}
	}
	}

	else{
		echo "User Not Found , Check User Name and Password";
	}	
}
 ?>