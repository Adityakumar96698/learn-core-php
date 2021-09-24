<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<table border="1" cellspacing="5" cellpadding="5">
		<tr>
			<td>Name</td>
			<td>
				<input type="textbox" name="name" id="name">
				<span id="name_error" class="error_field"></span>
			</td>
		</tr>
		<tr>
			<td>Marks</td>
			<td>
				<input type="textbox" name="marks" id="marks">
				<span id="marks_error" class="error_field"></span>
			</td>
			
		</tr>
		<tr>
			<td>City</td>
			<td>
				<select id="city">
					<option value="">select</option>
					<option>Delhi</option>
					<option>Mumbai</option>
					<option>Pune</option>
				</select>
				<span id="city_error" class="error_field"></span>
			</td>
		</tr>
		
		<tr>
			<td>Action</td>
			<td><input type="button" name="submit" value="Submit" onclick="submit_data()"></td>
		</tr>
	</table>
	<div id="result"></div>

	<script>
		function submit_data()
		{
			var name = jQuery('#name').val();
			var marks = jQuery('#marks').val();
			var city = jQuery('#city').val();

			jQuery('.error_field').html('');
			var is_error = '';

			if(name == '')
			{
				jQuery('#name_error').html('Please enter name');
				is_error = 'yes';
			}
			
			if(marks == '')
			{
				jQuery('#marks_error').html('Please enter marks');
				is_error = 'yes';
			}

			if(city == '')
			{
				jQuery('#city_error').html('Please enter city');
				is_error = 'yes';
			}

			if (is_error== '')
			{
				var datastring ='name='+name+'&marks='+marks+'&city='+city;
				// jQuery('#result').html('Please Wait..');
				jQuery('#result').html('<img src="./images/loader.png">');
				jQuery.ajax({
					url:'submit.php',
					type:'post',
					data:datastring,
					success:function(data){
						// alert(data);
						jQuery('#result').html(data);
					}
				});
			}
			
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<style>
		.error_field
		{
			color: red;
		}
	</style>
	
</body>
</html>