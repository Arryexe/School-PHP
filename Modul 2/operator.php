<?php 
	$gaji = 2000000;
	$pajak = 0.1;
	$gaji_bersih = $gaji - ($gaji * $pajak);
	echo "Gaji sebelum pajak = Rp $gaji <br>";
	echo "Gaji yang dibawa pulang = Rp $gaji_bersih";
 ?>