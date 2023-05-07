<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.button1:hover{
			background-image:linear-gradient(to left,red,green);
		}
		.button2{
			background-image: linear-gradient(to right,orange,grey);
			color: lightskyblue;
			width: 250px;
		}
		.button3:hover{
			font-size: 20px;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background-image:url('log.webp')">
<center>
	<u><h1 class="button2" style="font-family:cursive; margin-top: 40px;">Login Form</u></h1>
<form method="post" action="log1" style="background-color:lightgrey; color: darkred; margin-top: 200px; height:auto; padding-top: 30px; width:400px">
	@csrf
	<img src="log1.jpg" height="40px" width="50px">
	<br><br>
	<b>
	<label>Email:</label>
	<br>
	<input style="border-radius:20px;" type="email" name="email" required />
	<br><br>
	
	<label>Password:</label>
	<br>
	<input style="border-radius:20px" type="password" name="password" required />
	<br><br><br>
	<button style="width: 200px; font-family: cursive; margin-bottom: 20px; height:40px" type="Submit" class="button1" value="login" class="btn btn-outline-warning">LOGIN</button>
<p>If you doesn't have any account</p>
<a class="button3" href="log">Click Here</a>
<br><br>
@if($errors->any())
<span style="color:red"><h4>{{$errors->first()}}</h4></span>
@endif
</b>
</form>
</center>
</body>
</html>