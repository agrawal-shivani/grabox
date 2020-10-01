<?php
session_start();
if(isset($_SESSION['username']))
{
// 	session_destroy();
	session_unset();


	header('location:myadmin.php');

}

else
{
	header('location:myadmin.php');
}

?>
