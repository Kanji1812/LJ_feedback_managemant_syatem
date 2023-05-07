<html>
<body>
	<h2>List Table</h2>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Password</th>
		<th>Operation</th>
	</tr>
	@foreach($data as $in)
	<tr>
	<td>{{$in->Id]}}</td>
	<td>{{$in->Name}}</td>
	<td>{{$in->Password}</td>
	<td><button><a href="update/{{$data->Id}}">Edit</a></button></td>
	</tr>
	@endforeach
</table>
</body>
</html>