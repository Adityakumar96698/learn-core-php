<?php
try
{
	$con=new PDO("mysql:host=localhost;dbname=complete_php","root","");
}
catch(PDOExection $e)
{
	echo $e->getMessage();
}
?>