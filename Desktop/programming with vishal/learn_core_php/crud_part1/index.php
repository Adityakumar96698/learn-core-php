<?php
include('db.php');
$sql="select * from user order by id asc";
$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($arr);
?>
<a href="add_user.php">Add User</a>
<table border="1" cellspacing="4" cellpadding="4" width="50%">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Marks</th>
		<th>City</th>
		<th>Action</th>
	</tr>
	<?php foreach($arr as $list){?>
	<tr>
		<td><?php echo $list['id']?></td>
		<td><?php echo $list['name']?></td>
		<td><?php echo $list['marks']?></td>
		<td><?php echo $list['city']?></td>
		<td><a href="delete.php?id=<?php echo $list['id']?>">Delete</a> &nbsp; <a href="add_user.php?id=<?php echo $list['id']?>">Edit</a></td>
	</tr>
	<?php } ?>
</table>