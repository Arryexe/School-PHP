<?php 
	$no_urut = '01';
	$nama = 'Ahmad Ariyanur Rahman';
	$alamat = 'Banjarbaru. Komp Buana Permai';
	define('UMUR', 16);
	define('NILAI', 90);
	
	$status = TRUE;

	echo "NIM : ".$no_urut."<br>";
	echo "Nama : ".$nama."<br>";
	echo "Alamat : ".$alamat."<br>";
	echo "Umur : ". UMUR . "<br>";	
	echo "Nilai : ". NILAI ."<br>";
	echo "<br>";

	if ($status) {
		echo "Status : Siswa Aktif";
	} else {
		echo "Status : Siswa Tidak Aktif";
	}
 ?>