<?php
 // echo '<pre>'; 
 // print_r($_POST);

include('db.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from user1 where username='$username' and password='$password'";
$stmt =$con->prepare($sql);
$stmt->execute();
$data =$stmt->fetchAll(PDO::FETCH_ASSOC);

if(isset($data['0']))
{
	$_SESSION['LOGIN']='yes';
	echo "correct";	
}
else
{
	echo "wrong";
}

 


 ?>
