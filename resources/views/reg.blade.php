<!DOCTYPE html>
<html>
<head>
	<style>
		.button1:hover{
			background-color: yellow;
		}
		.button2:hover{
			background-color: green;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-image: url('r1.jpg');">
<center>
	<b>
	
	<form method='get' action="fb" style="background-color: lightgrey;  border-top-color: yellow;  border-bottom-color: green; border-radius: 60px; border-bottom-left-radius: inherit; border-top-right-radius: inherit; cursor: not-allowed; width: 320px; border-style: solid; padding-bottom: 30px; margin-top: 140px;">
		<b><u><header style="margin-top: 20px;font-family: sans-serif; color: darkblue;">REGISTRATION FORM</header></u></b>

		<br><br>
		
		<label>Name:</label>
		<br>
		<input style="border-radius: 70px; cursor:pointer; height: 30px;" type="text" name="name" placeholder="Enter Your Name" required>
		
		<br><br>
		
		<label>E-Mail ID</label>
		<br>
		<input  style="border-radius: 70px;cursor:pointer; height: 30px;" type="email" name="txtemail" placeholder="Enter your E-Mail id" required>
		
		<br><br>
		
		<label>Password:</label>
		<br>
		<input  style="border-radius: 70px;cursor:pointer;  height: 30px;" type="password" class="Password" placeholder="Enter Password" required>
		
		<br><br>
		
		<label>Confirm Password:</label>
		<br>
		<input  style="border-radius: 70px;cursor:pointer;  height: 30px;" type="password" class="Confirm Password" placeholder="Enter Below Password" required>

		<br><br>
		
		<button style="width: 100px;" type="submit" class="btn btn-outline-primary" href="\fb">Register</button>
		<br><br>
		<?php echo "<script>alert('Register Successful');</script>"?>
	</form>
	
	<form action="log">
		<h2>Don't Have an Account?</h2>
		<button style="width: 100px;" type="Submit" href="\log" class="btn btn-outline-warning">Login</button>
	</form>
</center>
</b>
</body>
</html>