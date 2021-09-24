<?php
// MySql
$con=mysql_connect("localhost","root","");
mysql_select_db("complete_php",$con);
//$sql="insert into test(name) values('Aditya')";
$sql="select * from test";
$res=mysql_query($sql);
echo $res;
while($row=mysql_fetch_assoc($res))
{
	echo '<pre>';
	print_r($row);
}



?>