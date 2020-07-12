<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<?php
	echo "<head><title> Guest Book</head></title>";
	$fp = fopen("pendaftaran.txt", "a+");

	$nama =$_POST['nama'];
	$tempat_lahir =$_POST['tempat_lahir'];
	$tanggal =$_POST['tanggal'];
	$alamat =$_POST['alamat'];
	$kota =$_POST['kota'];
	$negara =$_POST['negara'];
	$kode_pos =$_POST['kode_pos'];
	$hp =$_POST['hp'];
	$email =$_POST['email'];
	$tinggi_badan =$_POST['tinggi_badan'];
	$berat_badan =$_POST['berat_badan'];

	fputs($fp,"$nama|$tempat_lahir|$tanggal|$alamat|$kota|$negara|$kode_pos|$hp|$email|$tinggi_badan|$berat_badan\n");
	fclose($fp);

	echo "Terima Kasih Atas Partisipasi Anda Mengisi Form Pendaftaran <br>";
	?>
	<button class="tombol"><a align="center" href="home.html">Buku Tamu</a></button>
    <button class="tombol"><a align="center" href="tabel.php">Lihat Pengunjung</a></button>
	

<div>
</body>
</html>
