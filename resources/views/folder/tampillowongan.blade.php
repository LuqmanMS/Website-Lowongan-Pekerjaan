<!DOCTYPE html>
<html>
<head>
	<title>Lowongan Pekerjaan.com</title>
</head>
<body>
 
	<h2>Lowongan Pekerjaan</h2>
	<h3>Data Lowongan Pekerjaan</h3>
 
	<a href="/lowongan/tambah"> + Lowongan Pekerjaan Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Job Code</th>
			<th>Job Name</th>
			<th>Requirement</th>
		</tr>
		@foreach($lowongan as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->Job_COde}}</td>
			<td>{{ $p->Job_Name }}</td>
			<td>{{ $p->Requirement }}</td>
			<td>
				<a href="/lowongan/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/lowongan/delete/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>