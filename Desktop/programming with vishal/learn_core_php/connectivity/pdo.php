<?php 
//PDO
$con=new PDO("mysql:host=localhost;dbname=complete_php","root","");
//$sql="insert into test(name) values('Vishal55')";
$sql="select * from test";
$stmt=$con->prepare($sql);
$stmt->execute();
$row=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($row);

?>

 ?>