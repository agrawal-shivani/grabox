<?php
session_start();
if(isset($_SESSION['username']))
{
	session_destroy();

	header('location:vlogin.php');

}

else
{
	header('location:vlogin.php');
}

?>