<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.button1:hover{
			background-color: red;
		}
		.button2:hover{
			background-color:grey;
		}
	</style>
</head>
<body>
<table border="5" style="border-color: grey;">
	<tr>
		<td>Id</td>
		<td>Image</td>
		<td>Name</td>
		<td>Password</td>
		<td>Operation</td>
		<td>Operation</td>
	</tr>
	@foreach($in as $data)
	<tr>
	<td>{{$data->id}}</td>
	<td>{{$data->image}}</td>
	<td>{{$data->name}}</td>
	<td>{{$data->password}}</td>
	<td><a  class="button1" href="delete/{{$data->id}}">delete</a></td>
	<td><a class="button2" href="edit/{{$data->id}}">Edit</a></td>
	</tr>
	@endforeach
</table>
<br><br>
<a href="Logout">Logout</a>
</body>
</html>