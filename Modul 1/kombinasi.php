<?php 
	$nama = "Ahmad Ariyanur Rahman";
	$status = TRUE;
	$rank = "Private";
	$private1 = "Kowalski";
	$private2 = "Vladmir Putin";
	$private3 = "Albert";
	$private4 = "Lucilius";

	define('SQUAD', 'Tango');

	echo "?? : Hello ".SQUAD." one ! This is Your Commander Officer... My Name is ".$nama."... I need your Status! Roger.<br>";

	echo SQUAD ." : Copy That,Roger ! <br>";

	echo SQUAD ." : We are on Sector 8, We need Help ! ".$private2." Got Shoot ! And ".$private3." is Missing ! <br>";

	echo $nama ." : Copy That ! ". SQUAD ." I am On my Way ! I need you to Hold them for 7 Minutes <br>";

	echo SQUAD . " : We Can't Take that So Long ! <br>";

	echo $nama . " : Alright ! Maybe we can do it for 5 Minutes <br>";

	echo SQUAD . " : Roger That ! AARHHGG MY LEGS ! <br>";

	echo "*".$nama." Arrived* <br>";

	echo $nama . " : Oh Sh*t,". $private4." is Dead.... <br>";

	echo $private2 . " : Help... <br>";

	echo $nama . " : " .$private2 . " I Will Save You... <br>";

	if ($status) {
		echo $private2 . " : Help ". $private3." He's Missing with ". $private1."<br><br>";

		echo "*To Be Continued*";
	} else {
		echo $private2 . " : *Dead* <br>";

		echo $nama . " : Hey... HEY !! ". $private2 ." Stay With Me !! <br>";
	}

 ?>