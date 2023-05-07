<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.button1:hover{
			background-image:linear-gradient(to left,blue,yellow);
		}
		.button2{
			background-image: linear-gradient(to right,yellow,red);
			width: 400px;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background-image:url('log.webp')">
<center>
	<u><h1 class="button2" style="font-family:cursive; margin-top: 50px;">Registration Form</u></h1>
<form method="post" action="log" style="background-color:lightgrey; color: darkred; margin-top: 200px; height:auto; padding-top: 30px; width:400px">
	@csrf
	<img src="log1.jpg" height="40px" width="50px">
	<br><br>
	<b>
	<label>Name:</label>
	<br>
	<input style="border-radius:20px" type="text" name="name"/>
	<br>
	<span style="color:orange;">
	@error('name'){{$message}}@enderror
</span>
	<br><br>

	<label>E-mail:</label>
	<br>
	<input style="border-radius:20px" type="email" name="email" placeholder="Enter Your E-mail" required />
	<br><br>

	<label>Enrollment Number:</label>
	<br>
	<input style="border-radius:20px" type="text" name="enumber" required />
	<br><br>

	<label>Div:</label>
	<br>
	<input style="border-radius:20px" type="text" name="div" placeholder="Enter Your Divison"  required />
	<br><br>
	<input type="hidden" name="role" value="User">
	<label>Password:</label>
	<br>
	<input style="border-radius:20px" type="password" name="password" required />
	<br><br><br>
	<button style="width: 200px; font-family: cursive; margin-bottom: 20px; height:40px" type="Submit" class="button1" value="login">REGISTER</button>
	<br>
	<!-- <p>If You have an Account?</p>
	<a href="log1">Click Here</a> -->
</b>
</form>
</center>
</body>
</html>