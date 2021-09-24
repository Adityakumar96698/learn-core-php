<?php 
include('dbcon.php');

// if(!isset($_SESSION['IS_LOGIN']))
// {
// 	header('location:login.php');

// 	die();
// }


$id = mysqli_escape_string($conn,$_GET['id']);

if(isset($_POST['submit']))
{
	$name = mysqli_escape_string($conn,$_POST["name"]);
	$city = mysqli_escape_string($conn,$_POST["city"]);
	$occupation = mysqli_escape_string($conn,$_POST["occupation"]);

	mysqli_query($conn,"update student set name = '$name', city = '$city',occupation = '$occupation' where id = '$id'");

	header('location:index.php');

	die();

}

$res = mysqli_query($conn,"select * from student where id = '$id'");
if(mysqli_num_rows($res)==0)
{
	header('location:index.php');
	die();
}

$row = mysqli_fetch_assoc($res);
$name = $row['name'];
$city = $row['city'];
$occupation = $row['occupation'];

 ?>

<br/><a href="logout.php">Logout</a><br/>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="textbox" name="name" value="<?php echo $name ?>"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="textbox" name="city" value="<?php echo $city ?>"></td>
		</tr>
		<tr>
			<td>Occupation</td>
			<td><input type="textbox" name="occupation" value="<?php echo $occupation ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>

	</table>

</form>

 