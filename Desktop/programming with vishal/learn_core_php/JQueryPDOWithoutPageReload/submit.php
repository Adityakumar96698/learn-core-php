<?php
// echo '<pre>'; 
// print_r($_POST);
sleep(3);
include('db.php');
$name = $_POST['name'];
$marks = $_POST['marks'];
$city = $_POST['city'];
$sql = 'insert into user(name,marks,city)values("'.$name.'","'.$marks.'","'.$city.'")';
$stmt = $con->prepare($sql);
$stmt-> execute();
echo "Data Submit";
 ?>