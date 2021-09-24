<?php 
$conn = mysqli_connect("localhost","root","","complete_php");

if(isset($_POST['submit']))
{
	$username = mysqli_escape_string($conn,$_POST["username"]);
	$password = mysqli_escape_string($conn,$_POST["password"]);

	$res = mysqli_query($conn,"select * from admin_users where username='$username' and password='$password'");

	if(mysqli_num_rows($res)>0)
	{
		$_SESSION['IS_LOGIN'] = 'yes';
		header('location:index.php');
		die();
	}
	else
	{
			echo "Please Enter valid Login Details";
	}


	

}

?>


<form method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="textbox" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>