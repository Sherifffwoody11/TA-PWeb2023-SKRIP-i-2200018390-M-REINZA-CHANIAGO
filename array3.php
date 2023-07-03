<?php
	$arrWarna = array("Red", "Orange", "Pink", "Blue", "Green", "Yellow");

	echo "Menampilkan isi array dengan FOR: <br>";
	for ($i = 0; $i < count($arrWarna); $i++){
		echo "Warna Warna <font color=$arrWarna[$i]>". $arrWarna[$i]. "</font><br>";
	} 

	echo "<br>Menampilkan isi array dengan FOREACH: <br>";
	foreach ($arrWarna as $warna){
		echo "Warna Warna <font color=$warna>". $warna. "</font><br>";
	}
?>