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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background-image:url('log.webp')">
	<center>
		<form method="post" action="editdata" style="background-color:lightgrey; color: darkred; margin-top: 200px; height:auto; padding-top: 30px; width:400px">
			<u><h1 class="button2" style="font-family:cursive;"> Form</u></h1>
		@csrf
	<i class="bi bi-pencil-square"></i>
	<b>
	
	<br>
	<span style="color:orange;">
	@error('name'){{$message}}@enderror
</span>
	
	<label>Id:</label>
	<br>
	<input style="border-radius:20px" type="number" name="id" value="{{$data['id']}}" readonly>
	<br>
	 
	<label>Name:</label>
	<br>
	<input style="border-radius:20px" type="text" name="name" value="{{$data['name']}}" />
	<br>
	

	<label>E-mail:</label>
	<br>
	<input style="border-radius:20px" type='email' name='email' value="{{$data['email']}}" />
	<br>
	
	<label>Enrollement Number:</label>
	<br>
	<input style="border-radius:20px" name='enumber' value="{{$data['enumber']}}" />
	<br>

	<label>Div:</label>
	<br>
	<input style="border-radius:20px" type='text' name='div' value="{{$data['div']}}"/>
	<br>

	<label>Role:</label>
	<br>
	<input style="border-radius:20px" type='text' name='role' value="{{$data['role']}}" readonly />
	<br>


	<label>Password:</label>
	<br>
	<input style="border-radius:20px" type="password" name="password" value="{{$data['password']}}"/>
	<br><br>
	<input type="submit" name="submit" style="width: 200px; font-family: cursive; margin-bottom: 20px; height:40px"  class="button1">
	
</b>
</form>
</center>

@if($errors->any())
<span style="color:red"><h4>{{$errors->first()}}</h4></span>
@endif
</body>
</html>

				