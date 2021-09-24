<!-- <?php
// create cookie
//setcookie('rate','php',time()+60);

//echo '<pre>';
//print_r($_COOKIE);

// delete cookie
//setcookie('rate','php',time()+80);
?> -->

<?php 
if(isset($_POST['rate']))
{
	$rate = $_POST['rate'];
	if(isset($_COOKIE['rate']))
	{
		echo "Already voted for ".$_COOKIE['rate'];
	}
	else
	{
		setcookie('rate',$rate,time()+15);
		echo "Thank You for rating";
	}
}

 ?>



 <form method="post">
<table>
	<tr>
		<td>
			<input type="submit" name="rate" value="PHP">
		</td>
		<td>
			vs
		</td>

		<td>
			<input type="submit" name="rate" value="ASP">
		</td>
	</tr>
</table>	
</form>


