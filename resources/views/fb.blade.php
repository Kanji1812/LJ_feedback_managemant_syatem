<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.button1:hover{
			background-image:linear-gradient(to top,orange,purple);
			font-family: serif;
			font-size: 20px;
		}
		.button2:hover{
			filter: blur(2px);
		}
		.button3:hover{
			background-image: linear-gradient(to bottom,yellow,red);
			width: 900px;
			font-size: 50px;
			font-family:serif;
		}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<center>
<body style="background-image: url('college.jpg');background-repeat: no-repeat;
    background-size: cover;">
	<form action="st">
	<img src="group.jpeg"; style="float:left; height:80px; border-radius: 30px; width:80px;">
	<a href="log1">
	<img src="logo.png"; height="200px"; width="600px">
	</a>
<nav>
	<b><span style="color:yellow; float:right; padding:15px">{{session('email')}}</span></b>
	<b><a class="button1" style="float:right; color: yellow; padding:15px; text-transform: uppercase;"  href="feedback1">Feedback</a>
	<a  class="button1" style="float:right; color: yellow; padding: 15px;text-transform: uppercase;" href="\about">About Us</a>
	<a class="button1" style="float: right; color: yellow; padding: 15px; text-transform: uppercase;" href="\fb">Home</a></b></p>
	</nav>

</center>
<center>
<b><u><h1 class="button3" style="color:lightgreen; font-size: 50px; margin-top:80px"><b>Feedback Management System</b></u></h1>
<br>
<a href="log1">
<img style="border-radius:80px; left: 100%;backface-visibility: inherit; float: left; margin-top:500px;" hspace="20px;" src="lj1.jpg" class="button2" height="400px" width="400px">
</a>

<!-- <img style="border-radius:80px; margin-top:50px" hspace="20px" src="lj2.jpg" class="button2" height="480px" width="300px"> -->
<a href="log1">
<img style="border-radius:80px; left: 100%; margin-top:500px" hspace="20px" src="lj3.jpg" class="button2" height="400px" width="400px">
</a>

<a href="log1">
<img style="border-radius:80px;float: right; left: 100%; margin-top:500px" src="lj4.jpg" class="button2" height="400px" width="400px">
</a>
<br>
<!-- <h1><a style="color:black; font-family:cursive;" href="Logout">Logout</a></h1> -->
</center>
</form>
</body>
</html>