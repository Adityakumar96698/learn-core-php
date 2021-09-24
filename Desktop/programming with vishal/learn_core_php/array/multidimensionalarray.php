<?php 
$arr=array(
	array("S.No","Name","City"),
	array("1","Arup","Kolkata"),
	array("2","Aditya","Bangalore"),
	array("3","Amit","Mumbai"),
	array("4","Aman","Chennai"),

);
// echo '<pre>';
// print_r($arr);


 ?>

 <br><br>

<table border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td>S.No</td>
		<td>Name</td>
		<td>City</td>
	</tr>
	<tr>
		<td>1</td>
		<td>Arup</td>
		<td>Kolkata</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Aditya</td>
		<td>Bangalore</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Amit</td>
		<td>Mumbai</td>
	</tr>
		<tr>
		<td>4</td>
		<td>Aman</td>
		<td>Chennai</td>
	</tr>
</table>


<br><br>

<table border="1" cellspacing="5" cellpadding="5">
	<?php 
		foreach ($arr as $arrayList)
		{
			echo '<tr>';
			foreach ($arrayList as $arrDetail)
			{
				// echo $arrDetail;
				// echo "<br>";
				echo '<td>'.$arrDetail.'</td>';
				
			}
			echo '</tr>';
		}

	 ?>
</table>

