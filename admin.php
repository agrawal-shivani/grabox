<?php

include 'check_con.php';

if(isset($_POST['sub2']))
{
	

	$uname=$_POST['username'];
	$password=$_POST['password'];


	$sql="select * from admin where  username='$uname' and password='$password'";

	$result=mysqli_query($conn,$sql);


	if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
			$user = $row['username'];
			$psd = $row['password'];
        
			if ($uname == $user && $password == $psd) {
				session_start();
		          $_SESSION['username']=$user;
                               
        

                    header('location:myadmin.php');
					break;
			}
	}
	}

	else{
		echo "User Not Found , Check User Name and Password";
	}	
}
mysqli_close($conn);

 ?>