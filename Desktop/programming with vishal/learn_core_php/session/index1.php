<?php
session_start();
if(isset($_SESSION['name'])){
	echo "Welcome";
	echo "<br/>";
	echo "<a href='destroy.php'>Logout</a>";
}else{
	header('location:index.php');
	die();
}
?>