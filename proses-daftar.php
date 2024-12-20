<?php
if (isset($_POST['daftar'])){
	include 'db.php';
	if(!is_numeric($_POST['telepon'])){
		header("location:form-daftar.php?err1");
	}else{
	$daftar =mysqli_query($koneksi, "INSERT INTO gojo values(NULL,
		'".$_POST['nama']."',
		'".$_POST['nim']."',
		'".$_POST['npm']."',
		'".$_POST['tempat_lahir']."',
		'".$_POST['tanggal_lahir']."',
		'".$_POST['jenis_kelamin']."',
		'".$_POST['jurusan']."',
		'".$_POST['kampus']."',
		'".$_POST['agama']."',
		'".$_POST['telepon']."',
		'".$_POST['email']."',
		'".$_POST['pass']."',
		'".$_POST['alamat']."' )");
	if ($daftar){
		echo 'ke data pendaftar ya';
	}else{
		echo 'hmm' .mysli_error($koneksi);
	}
	
}
}

?>
