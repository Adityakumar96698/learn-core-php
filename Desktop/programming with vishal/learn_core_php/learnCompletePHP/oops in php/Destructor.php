<?php 

class class1
{

	function __construct()
	{
		echo"__construct";
	}
	
	function test()
	{
		echo "Class1_test";
	}

	function __destruct()
	{
		echo"__destruct";
	}
}

$obj = new class1();
// $obj->test();

?>