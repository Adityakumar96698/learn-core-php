<?php
session_start();
if(isset($_POST['submit'])){
	// echo $name=$_POST['name'];
	$name=$_POST['name'];
	if($name=='Aditya'){
		$_SESSION['name']='Aditya';
		header('location:index1.php');
		die();
	}
}
?>
<form method="post">
	<input type="textbox" name="name"/>
	<input type="submit" name="submit" value="Click"/>
</form>

