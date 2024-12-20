<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<body style="background-image: url(css/fren.jpg);">
	<div class="box-data">
		<h3>Data pendaftar Mahasiswa</h3><hr><br>

		<table border="1" style="width:100%;border-collapse: collapse;" cellpadding="0">
			<tr style="height:30px;">
				<bg color = "green">
				<td>No</td>
				<td>Nama Mahasiswa</td>
				<td>Nim</td>
				<td>NPM</td>
				<td>Tempat Lahir</td>
				<td>Tanggal Lahir</td>
				<td>Jenis Kelamin</td>
				<td>Jurusan</td>
				<td>kampus</td>
				<td>Agama</td>
				<td>Telepon</td>
				<td>Email</td>
				<td>Password</td>
				<td>Alamat</td>
				<td>Aksi</td>
			</tr>
			<?php
			include 'db.php';
			$no =1;
			$data =mysqli_query($koneksi, "SELECT * FROM gojo");
			while($row =mysqli_fetch_array($data)){
				?>


		<tr style="height:30px;">
				<td><?php echo $no++ ?></td>
				<td><?php echo$row['nama']?></td>
				<td><?php echo$row['nim']?></td>
				<td><?php echo$row['npm']?></td>
				<td><?php echo$row['tempat_lahir']?></td>
				<td><?php echo$row['tanggal_lahir']?></td>
				<td><?php echo$row['jenis_kelamin']?></td>
			   <td><?php echo$row['jurusan']?></td>
			   <td><?php echo$row['kampus']?></td>
			    <td><?php echo$row['agama']?></td>
				<td><?php echo$row['telepon']?></td>
				<td><?php echo$row['email']?></td>
				<td><?php echo$row['pass']?></td>
				<td><?php echo$row['alamat']?></td>	
				<td><a href="proses-hapus.php?id=<?php echo $row['id_daftar']?>">Hapus</a></td>		
			</tr>
		<?php } ?>



		</table>
	</div>
</body>
</html>