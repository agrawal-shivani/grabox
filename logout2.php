<?php
session_start();
if(isset($_SESSION['username']))
{
	session_destroy();

	header('location:clogin.php');

}

else
{
	header('location:clogin.php');
}

?>