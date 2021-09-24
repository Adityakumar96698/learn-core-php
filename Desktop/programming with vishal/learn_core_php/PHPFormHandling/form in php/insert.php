<?php
// echo "<pre>";
// print_r($_POST);
//print_r($_POST['name']);


if(isset($_POST['name']))
{
	$name = $_POST['name'];
	$password = $_POST['password'];
	if(isset($_POST['gender']))
	{
		$gender = $_POST['gender'];
	}
	else
	{
		$gender = '';
	}

	$city = $_POST['city'];

	if(isset($_POST['education']))
	{
		$education = $_POST['education'];
		$education = implode(",", $education);
	}
	else
	{
		$education = '';
	}
	// echo '<pre>';
	// print_r($education);
	//die();

	echo "Name:- $name<br>";
	echo "Password:- $password<br>";
	echo "Gender:- $gender<br>";
	echo "City:- $city<br>";
	echo "Education:- $education<br>";
}

?>
<br><br>
<label>Insert Data</label>
<form method="post">

	Name:-<input type="textbox" name="name"><br><br>
	Password:-<input type="password" name="password"><br><br>
	Gender:-
	Female:- <input type="radio" name="gender" value="female">
	male:- <input type="radio" name="gender" value="male"><br><br>
	City:-
	<select name="city">
		<option>Select city</option>
		<option>Mumbai</option>
		<option>Kolkata</option>
		<option>Bangalore</option>
	</select>
	<br><br>
	Education:-
	B.Tech <input type="checkbox" name="education[]" value="btech">
	M.Tech <input type="checkbox" name="education[]" value="mtech">
	B.Sc <input type="checkbox" name="education[]" value="bsc">
	<br><br>

	<input type="submit" name="submit">

</form>
