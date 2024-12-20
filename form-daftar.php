<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<body style="background-image: url(css/frien.jpg);">
	<div class="box-form">
		<h3>Formulir Pendaftaran Mahasiswa Baru</h3><hr><br>
        <?php
        if(isset($_GET['err1'])){
        	echo '<div class="alert-error">Maaf, nomor telepon harus angka!!!</div>';
        }
        ?>
		<form action="proses-daftar.php" method="post">
			Nama Mahasiswa :<br>
			<input type="text" name="nama" required="" /><br><br>

			Nim :<br>
			<input type="text" name="nim" required="" /><br><br>

			NPM :<br>
			<input type="text" name="npm" required="" /><br><br>

				Tempat Lahir :<br>
			<input type="text" name="tempat_lahir" required="" /><br><br>
			
				Tanggal Lahir :<br>
			<input type="date" name="tanggal_lahir" required="" /><br><br>

			Jenis Kelamin :<br>
			<select name="jenis_kelamin">
				<option value="Laki-Laki">Laki-Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select><br><br>


               Jurusan :<br>
			<select name="jurusan">
				<option value="Teknik Multimedia">Teknik Multimedia</option>
				<option value="Manajemen Informatika">Manajemen Informatika</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="AgroBisnis Pangan">AgroBisnis Pangan</option>
			</select><br><br>


			  Pilihan Kampus :<br>
			<select name="kampus">
				<option value="Politeknik Negeri Sambas">Politeknik Negeri Sambas</option>
				<option value="Insitut Agama Islam Sultan Muhamaad Syafiudin Sambas">Insitut Agama Islam Sultan Muhamaad Syafiudin Sambas</option>
			</select><br><br>



			Agama :<br>
			<select name="agama">
				<option value="Islam">Islam</option>
				<option value="Kristen">Kristen</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option>
				<option value="Khonghucu">Khonghucu</option>
			</select><br><br>




			No. Telepon :<br>
			<input type="text" name="telepon" required="" /><br><br>
			Email:<br>
			<input type="email" name="email" required="" /><br><br>

			Password:<br>
			<input type="password" name="pass"  required="" /><br><br>

			


           Alamat Lengkap:<br>
           <textarea name="alamat" rows="5" cols="50"></textarea><br><br>   	
			<input type="submit" name="daftar" value="Daftar">
					
				</form>
	</div>
</body>
</html>