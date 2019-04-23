<?php 
	// Membuat sebuah proggram dimana apabila rata rata nilai dari 5 pelajaran dibawah 70 maka murid tidak naik kelas

	$nilai = [
		'MTK' 		=> 80,
		'BIND' 		=> 80,
		'BING' 		=> 70,
		'RPLPHP'	=> 90,
		'RPLCPP'	=> 80,
	];
	
	$semua_nilai = $nilai["MTK"] + $nilai["BIND"] + $nilai["BING"] + $nilai["RPLPHP"] + $nilai["RPLCPP"];
	$hasil = $semua_nilai/5;

	if ($hasil > 70) {
		echo "Nilai Rata-Rata anda $hasil, Selamat ! Anda Naik Kelas...";
	} else {
		echo "Nilai Rata-Rata anda $hasil, Anda Tidak Naik Kelas... Belajar Lagi !";
	}
 ?>