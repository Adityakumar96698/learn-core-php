<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
</head>
<body>
	<div id="login_box">
		<h3>Login Form</h3>
		<div>
			<label>Username</label>
			<input type="textbox" name="username" id="username"><br>
			<span id="username_error" class="error_field"></span>
		</div>
		<div class="mg15">
			<label>Password</label>
			<input type="textbox" name="password" id="password"><br>
			<span id="password_error" class="error_field"></span>
		</div>
		<div class="mg15">
			<input type="button" name="submit" value="Login" onclick="frm_login()">
		</div>
		<div class="error_field" id="result_msg">
			
		</div>
	</div>
	<style>
		.mg15
		{
			margin-top: 10Px;
		}

		.error_field
		{
			color: red;
		}

		#login_box
		{
			width: 40%;
			margin: 5% auto;
			border: 1px solid #000;
			padding: 5%;
			font-family: arial;
		}

		#login_box input
		{
			padding: 10px;
			width: 100%;
			margin-bottom: 10px;

		}
	</style>
	<script>
		function frm_login()
		{
			var username = jQuery('#username').val();
			var password = jQuery('#password').val();
			
			jQuery('.error_field').html('');
			var is_error = '';

			if(username == '')
			{
				jQuery('#username_error').html('Please enter username');
				is_error = 'yes';
			}
			
			if(password == '')
			{
				jQuery('#password_error').html('Please enter password');
				is_error = 'yes';
			}

			if (is_error== '')
			{
				// var datastring ='name='+name+'&marks='+marks+'&city='+city;
				// jQuery('#result').html('Please Wait..');
				// jQuery('#result').html('<img src="./images/loader.png">');
				jQuery.ajax({
					url:'check.php',
					type:'post',
				 	data: 'username='+username+'&password='+password,
				 	success:function(result)
				 	{
				 		if(result == 'correct')
				 		{
				 			window.location.href='dashboard.php'
				 		}
				 		else
				 		{
				 			jQuery('#result_msg').html('Please Enter correct login details')
				 		}
				
				 	}
				});
			}
			
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>