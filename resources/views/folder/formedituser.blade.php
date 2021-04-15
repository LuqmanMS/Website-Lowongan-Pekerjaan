<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h3>Edit Lowongan</h3>

	<a href="/pendaftar/show"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pendaftar as $p)
	<form action="/pendaftar/editSave" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_user" value="{{ $p->id_user }}"> <br/>
		Name <input type="text" required="required" name="Name" value=" {{ $p->Name }}"> <br/>
		Gender 
        <label><input type="radio" name="Gender" value="Wanita" id="Wanita" {{ $p->Gender=='Wanita'? 'checked' : ''}} >Wanita</label>       
        <label><input type="radio" name="Gender" value="Laki-Laki" id="Laki-Laki"{{ $p->Gender=='Laki-Laki'? 'checked': ''}} >Laki-Laki</label>
        <br>
		Address <input type="text" required="required" name="Address" value="{{ $p->Address }}"> <br/>
        Job <input type="text" required="required" name="Job" value="{{ $p->Job }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>