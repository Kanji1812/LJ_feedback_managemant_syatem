<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.button1:hover{
			background-image: linear-gradient(to top,yellow,skyblue);
		}
	</style>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="background-color:lightgrey;">
	<img style="margin-left:500px; margin-top: 100px; border-radius:30px" src="lj.jpg" height="300px" width="500px">
	<center>
	<form action="feedback">
		<p style="margin-top: 60px; font-size: 20px; color:blueviolet;">If you have any complain about any Faculty then Send a Report!!</p>
		<textarea type="textarea" name="text" required></textarea>
		<br><br>
		<input class="button1" style="border-style: solid; height:50px; font-size:20px; font-family:cursive;" type="submit" name="submit" value="Send Report">
	</form>
</center>
</body>
</html>