<?php
require('database.php');
$alias=mysqli_real_escape_string($con,$_GET['alias']);
$sql=mysqli_query($con,"select * from product where alias='$alias'");
?>
<table border="1">
	<?php
	while($row=mysqli_fetch_assoc($sql)){
		echo "<tr>
			<td>".$row['name']."</td>
			<td>".$row['desc']."</td>
			<td><img width='30%' src='../image/".$row['image']."'/></td>
		</tr>";
	}
	?>
</table>