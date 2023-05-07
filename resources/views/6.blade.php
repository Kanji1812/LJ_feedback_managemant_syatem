<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="log">
	@csrf
	Name:<input type="text" name="name"/>
	<br><br>
	password:<input type="password" name="password"/>
	<br><br>
	<input type="submit" name="SUBMIT"/>
</form>
</body>
</html>