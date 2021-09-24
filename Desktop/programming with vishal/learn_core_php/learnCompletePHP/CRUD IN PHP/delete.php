<?php 
$conn = mysqli_connect("localhost","root","","complete_php");

// if(!isset($_SESSION['IS_LOGIN']))
// {
// 	header('location:login.php');

// 	die();
// }


$id = mysqli_escape_string($conn,$_GET['id']);

if($id=='')
{
	header('location:index.php');
	die();
}

mysqli_query($conn,"delete from student where id = '$id'");

header('location:index.php');

die();

 ?>