<?php 
if(isset($_GET['submit']))
{
	$num1 = $_GET["num1"];
	$num2 = $_GET["num2"];

	$result = $num1+$num2;

	echo "The sum of $num1 and $num2 is: ".$result;   
}


 ?>
<form method="GET">
Num1: <input type="text" name="num1"><br><br>
Num2: <input type="text" name="num2"><br><br>
<input type="submit" name="submit">
</form>
