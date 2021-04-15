<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
</head>
<body>
<form action="/pendaftar/store" method="post">
{{ csrf_field() }}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender</label><br>
    <input type="radio"  name="Gender" value="Laki-Laki">
<label for="Laki-Laki">Laki-Laki</label><br>
<input type="radio"  name="Gender" value="Wanita">
<label for="Wanita">Wanita</label><br>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" name="Address" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="col-md-6">
            <select name="Job" class="form-control">
                <option value="">== Select Job Code ==</option>
                @foreach($Job_COde as $code)
                    <!-- <option value="{{ $code->Job_COde}}">{{ $code->Job_COde}}</option> -->
                    <option value="{{ $code->Job_COde }}">{{ $code->Job_COde }}</option>
                @endforeach
            </select>

            
        </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>