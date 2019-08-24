<?php
session_start();
if(isset($_SESSION['username']))
{
	session_destroy();

	header('location:myadmin.php');

}

else
{
	header('location:myadmin.php');
}

?>