<?php 
if(isset($_POST['submit']))
{
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	$result = $num1+$num2;

	echo "The sum of $num1 and $num2 is: ".$result;   
}


 ?>
<form method="post">
Num1: <input type="text" name="num1"><br><br>
Num2: <input type="text" name="num2"><br><br>
<input type="submit" name="submit">
</form>
