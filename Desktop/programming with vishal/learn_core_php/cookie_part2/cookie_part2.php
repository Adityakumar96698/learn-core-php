<?php
try
{
	$con=new PDO('mysql:host=localhost;dbname=complete_php','root','');
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

if(isset($_POST['rate']))
{
	$rate=$_POST['rate'];	
	if(isset($_COOKIE['rate']))
	{
		echo "Already voted for ".$_COOKIE['rate'];
	}
	else
	{
		setcookie('rate',$rate,time()+5);
		$update_sql="update rate set option_value=option_value+1 where `option`='$rate'";
		$update_stmt=$con->prepare($update_sql);
		$update_stmt->execute();
		echo "Thank you for rating";
	}
}

$sql="select * from rate";
$stmt=$con->prepare($sql);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($data);
?>
<form method="post">
	<table>
		<tr>
			<td>
				<input type="submit" name="rate"
				value="<?php echo $data['0']['option']?>"/> (<?php echo $data['0']['option_value']?>)
			</td>
			<td>
				vs 
			</td>
			<td>
				<input type="submit" name="rate"
				value="<?php echo $data['1']['option']?>"/> (<?php echo $data['1']['option_value']?>)
			</td>
		</tr>
	</table>
</form>