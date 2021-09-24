<?php
include('db.php');
$sql="select * from user";
$stmt1=$con->prepare($sql);
$stmt1->execute();
$arr1=$stmt1->fetchAll(PDO::FETCH_ASSOC);
$total_record=count($arr1);
$per_page=3;

$num=floor($total_record/$per_page);
$rem=floor($total_record%$per_page);
if($rem>0)
{
	$num++;
}
$search_txt='';
$start=0;
if(isset($_GET['start']))
{
	$start=$_GET['start'];
	$start=($start-1)*$per_page;
}
if(isset($_POST['search_txt']) && $_POST['search_txt']!='')
{
	$search_txt=$_POST['search_txt'];
	$sql.=" where name like '%$search_txt%' or city like '%$search_txt%'";	
}
$sql.=" order by id asc limit $start,$per_page";
$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<form method="post">
	<input type="textbox" name="search_txt" value="<?php echo $search_txt?>"/>
	<input type="submit" name="search" value="Search"/>
</form>
<a href="add_user.php">Add User</a>
<table border="1" cellspacing="4" cellpadding="4" width="100%">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Marks</th>
		<th>City</th>
		<th></th>
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
<?php
for($i=1;$i<=$num;$i++)
{
	echo '<a href="index.php?start='.$i.'">'.$i.'</a> &nbsp;';
}
?>