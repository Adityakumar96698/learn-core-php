<?php
// echo '<pre>';
// print_r($_FILES);
if(isset($_POST['submit']))
{
	$size=$_FILES['file']['size']/1024;
	if($size<1000000)
	{
		move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
		// move_uploaded_file($_FILES['file']['tmp_name'],'test.jpg');
	}
	else
	{
		echo "Only 977KB";
	}


	if($_FILES["file"]["type"]=="image/jpeg" || $_FILES["file"]["type"]=="image/gif")
	{
		move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name']);
	}
	else
	{
		echo "Only jpeg image are allowed";
	}


	
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="file"/>
	<input type="submit" name="submit" value="Upload"/>
</form>
