<?php 
	$no_urut = '01';
	$nama = 'Ahmad Ariyanur Rahman';
	$umur = '16';
	$nilai = 90;
	$status = TRUE;

	echo "NIM : ".$no_urut."<br>";
	echo "Nama : ".$nama."<br>";
	echo "Umur : $umur";
	echo "<br>";
	echo "Nilai : $nilai <br>";

	if ($status) {
		echo "Status : Siswa Aktif";
	} else {
		echo "Status : Siswa Tidak Aktif";
	}
 ?>