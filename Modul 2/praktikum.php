<?php 
	$panjang = 20;
	$lebar = 10;
	$tinggi = 14;
	$phi = 3.14;
	$r = 10;

	// Volume Balok
	echo "<h1>Praktikum 1</h1>";
	$volume_balok = $panjang * $lebar * $tinggi;
	echo "Panjang : " . $panjang;
	echo "<br>";
	echo "Lebar : " . $lebar;
	echo "<br>";
	echo "Tinggi : " . $tinggi;
	echo "<br>";
	echo "Rumus : Panjang x Lebar x Tinggi";
	echo "<br>";
	echo "Volume Balok : $panjang x $lebar x $tinggi";
	echo "<br>";
	echo "Hasil : $volume_balok";
	echo "<br>";
	echo "<br>";
	// Volume Bola
	echo "<h1>Praktikum 2</h1>";
	$volume_bola = 3/4 * $phi * $r * $r * $r;
	echo "Phi : $phi";
	echo "<br>";
	echo "Jari Jari = $r";
	echo "<br>";
	echo "Rumus : 3/4 * Phi * r * r * r";
	echo "<br>";
	echo "Hasil : $volume_bola";

	echo "<br>";
	echo "<br>";
	echo "<h1>Praktikum 3</h1>";
	if ($volume_balok > $volume_bola) {
		echo "$volume_balok lebih dari $volume_bola";
	} else {
		echo "$volume_balok Kurang dari $volume_bola";
	}
 ?>