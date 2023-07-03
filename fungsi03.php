<?php
	//Fungsi dengan return value dan prameter
	function luas_lingkaran($jari){
		return 3.14*$jari*$jari;
	} 

	// pemnaggilan fungsi
	$r=20;
	echo "Luas Lingkaran dengan jari-jari $r = ";
	echo luas_lingkaran($r);
?>