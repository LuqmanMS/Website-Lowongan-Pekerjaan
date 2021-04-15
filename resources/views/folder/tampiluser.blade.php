<!DOCTYPE html>
<html>
<head>
	<title>Pendaftar Pekerjaan.com</title>
</head>
<body>
 
	<h2>Pendaftar Pekerjaan</h2>
	<h3>Data Lowongan Pekerjaan</h3>
 
	<a href="/pendaftar/tambah"> + Pendaftar Pekerjaan Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>ID User</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Address</th>
            <th>Job Code</th>
            <th>Job Name</th>
            <th>Requirement</th>
            <th>Action</th>
			
						
		</tr>
		@foreach($pendaftar as $p)
		<tr>
			<td>{{ $p->id_user }}</td>
			<td>{{ $p->Name}}</td>
			<td>{{ $p->Gender}}</td>
			<td>{{ $p->Address}}</td>
            <td>{{ $p->Job}}</td>
			<td>{{ $p->Job_Name }}</td>
			<td>{{ $p->Requirement }}</td>
			<td>
				<a href="/pendaftar/edit/{{ $p->id_user }}">Edit</a>
				|
				<a href="/pendaftar/delete/{{ $p->id_user }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>