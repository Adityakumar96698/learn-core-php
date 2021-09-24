<?php 

//MySqli
$con=mysqli_connect("localhost","root","","complete_php");
$sql="insert into test(name) values('Adity')";
$sql="select * from test";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
	echo '<pre>';
	print_r($row);
}


 ?>