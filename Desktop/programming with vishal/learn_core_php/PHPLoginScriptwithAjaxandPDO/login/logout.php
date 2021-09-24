<?php 
session_start();
unset($_SESSION['LOGIN']);
header('location:index.php');
die();
 ?>