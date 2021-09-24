<?php 

$conn = mysqli_connect("localhost","root","","complete_php");

//insert data into table

$sql = "insert into student(name,city,occupation)values('aditya','bangalore','Engineer')";

//update data into table

//$sql = "update student set name = 'anshu' where id = 1";


//delete data into table

//$sql = "delete from student where id = 1";

//mysqli_query($conn,$sql);



//retrive or fetch data

// $sql = "select * from student";

// $res = mysqli_query($conn,$sql);

// while($row = mysqli_fetch_assoc($res))
// {
// 	echo "<pre>";
// 	print_r($row);
// }


 ?>