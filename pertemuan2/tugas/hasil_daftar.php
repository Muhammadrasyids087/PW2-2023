<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container px-3">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>01</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
                    <td>02</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>

                <tr>
				<?php
                    if(isset($_POST['proses'])){
                    
                    $nourut = $_POST['no'];
                    $nme = $_POST['nama_lengkap'];
                    $gml = $_POST['email'];
                    $alt = $_POST['alamat'];
                    $telp = $_POST['tel'];
                
                    
                    echo '<td> ' . $nourut;
                    echo '<td> ' . $nme;
                    echo '<td> ' . $gml;
                    echo '<td> ' . $alt;
                    echo ' <td> ' . $telp;
                    }
		        ?>
                </tr>

			</tbody>
		</table>
	</div>
</body>
</html>