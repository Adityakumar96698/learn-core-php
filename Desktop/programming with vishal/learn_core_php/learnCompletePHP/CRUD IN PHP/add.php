<?php 
include('dbcon.php');

// if(!isset($_SESSION['IS_LOGIN']))
// {
// 	header('location:login.php');

// 	die();
// }



if(isset($_POST['submit']))
{
	$name = mysqli_escape_string($conn,$_POST["name"]);
	$city = mysqli_escape_string($conn,$_POST["city"]);
	$occupation = mysqli_escape_string($conn,$_POST["occupation"]);

	mysqli_query($conn,"insert into student(name,city,occupation)values('$name','$city','$occupation')");

	header('location:index.php');

	die();

}

 ?>
<br/><a href="logout.php">Logout</a><br/>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="textbox" name="name"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="textbox" name="city"></td>
		</tr>
		<tr>
			<td>Occupation</td>
			<td><input type="textbox" name="occupation"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>

	</table>

</form>

 