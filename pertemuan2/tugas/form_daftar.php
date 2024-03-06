<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="hasil_daftar.php">
        <h1>Form Pendaftaran</h1>
        <hr />
        <div class="container px-3">
            <div class="form-group row mb-3">
				<label for="no" class="col-4 col-form-label">Nomor Urut :</label>
                <div class="col-8">
                    <input id="no" name="no" type="text" class="form-control" placeholder="Nomor urut" required>
                </div>
			</div>
			<div class="form-group row mb-3">
				<label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap :</label>
                <div class="col-8">
                    <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Nama kamu siapa?" required>
                </div>
            </div>
			<div class="form-group row mb-3">
				<label for="email" class="col-4 col-form-label">Email :</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control" placeholder="beta@gmail.com" required>
                </div>
			</div>
			<div class="form-group row mb-3">
				<label for="alamat" class="col-4 col-form-label">Alamat :</label>
                <div class="col-8">
                    <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Domisli" required>
                </div>
			</div>
			<div class="form-group row mb-3">
				<label for="telepon"class="col-4 col-form-label">Telepon :</label>
                <div class="col-8">
                    <input id="tel" name="tel" type="text" class="form-control" placeholder="+62800" required>
                </div>
			</div>
            <div class="form-group row mb-3">
                <div class="offset-4 col-8">
                    <input type="submit" name="proses" value="submit" class="btn btn-primary">
                </div>
            </div>
        </div>    
	</form>
	
</body>
</html>