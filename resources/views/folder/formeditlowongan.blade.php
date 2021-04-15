<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit Lowongan</h3>

	<a href="/lowongan/show"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($lowongan as $p)
	<form action="/lowongan/editSave" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		<input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
	    Job Code <input type="text" required="required" name="Job_COde" value="{{ $p->Job_COde }}"> <br/>
		Job Name <input type="text" required="required" name="Job_Name" value="{{ $p->Job_Name }}"> <br/>
		Requirement <input type="text" required="required" name="Requirement" value="{{ $p->Requirement }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>
