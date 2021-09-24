<?php 
session_start();
if (!isset($_SESSION['LOGIN']))
{
	header('location:index.php');
	die();
}


 ?>

 <h2>Welcome User</h2>
 <a href="logout.php">Logout</a>