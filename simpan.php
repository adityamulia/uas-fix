<?php 
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];


	$simpan = $conn->query("insert into listLayanan(nama, deskripsi) values('$nama','$deskripsi')");

	if($simpan){
		//echo "Berhasil disimpan ";
		header('Location:http://tugasuas.test/?menu=5 ');
	}else{
		echo "Gagal disimpan";
	}

	


?>