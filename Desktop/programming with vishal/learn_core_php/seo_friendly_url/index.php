<?php
require('database.php');
$sql=mysqli_query($con,"select * from product");
?>
<table border="1">
	<?php
	while($row=mysqli_fetch_assoc($sql)){
		echo "<tr>
			<td><a href='product/".$row['alias']."'>".$row['name']."</a></td>
			<td><img width='30%' src='image/".$row['image']."'/></td>
		</tr>";
	}
	?>
</table>