<?php 
	// Membuat Proggram untuk menampilkan orang yang berusia dibawah 17 tahun tidak bisa membuat KTP
	
	$umur = 16;
	if ($umur <= 17) {
		echo "Umur Anda $umur dan Belum Cukup untuk membuat KTP (Min : 17)";
	} else {
		echo "Umur Anda $umur dan Silahkan Membuat KTP";
	}
 ?>