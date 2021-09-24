<?php 
$arr = array('aditya','monish','anshu','amit', 'arup');
print_r($arr);
echo'<br>';
echo'<br>';
$arr = array('name'=>'aditya','city'=>'bangalore');
print_r($arr);
echo'<br>';
echo'<br>';

$arr= array('Patna','bangalore','chennai','delhi');
?>


<select>
	<option>select a city</option>
	<option>Patna</option>
	<option>bangalore</option>
	<option>chennai</option>
	<option>delhi</option>
</select>



<br><br>
<select>
	<option>select a city</option>
	<?php 
	foreach ($arr as $arrayList) 
	{
		echo '<option>'.$arrayList.'</option>';
	}

	?>
	<option>Patna</option>
</select>


