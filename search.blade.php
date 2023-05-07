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
	@foreach($data as $data)
	<tr>
	<td>{{$data->Id}}</td>
	<td>{{$data->Name}}</td>
	<td>{{$data->Password}</td>
	<td>
		<a href="update/{{$data->Id}}" class="btn btn-primary">Edit</a>
	</td>
	</tr>
	@endforeach
</table>
</body>
</html>