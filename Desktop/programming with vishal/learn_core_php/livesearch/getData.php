<?php
include('db.php');
$search=$_POST['search'];
$sql="select name,phone,email from data "; 
if($search!='')
{
	$sql.="where name like '%$search%' or phone like '%$search%' or email like '%$search%'";

}
$stmt=$con->prepare($sql);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
if(isset($data['0']))
{
	$html='<table class="table table-bordered"><thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		  </tr>
		</thead>';
	foreach($data as $list)
	{
		$html.='<tr>
			<td>'.$list['name'].'</td>
			<td>'.$list['email'].'</td>
			<td>'.$list['phone'].'</td>
		  </tr>';
	}	
	$html.='</table>';
	echo $html;	
}
else
{
	echo "Data not found";
}
?>