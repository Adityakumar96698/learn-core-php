<?php 
if(isset($_POST['submit']))
{
	// echo "<pre>";
	// print_r($_FILES);
	move_uploaded_file($_FILES['doc']['tmp_name'], 'media/'.$_FILES['doc']['name'] );


	//upload file with diferent name

	// $file = rand(1111,9999);
	// move_uploaded_file($_FILES['doc']['tmp_name'], 'media/'.$file.$_FILES['doc']['name'] );
}


 ?>
<form method="post" enctype="multipart/form-data">
File: <input type="file" name="doc"><br><br>
<input type="submit" name="submit">
</form>
