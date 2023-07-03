<?php
	$arrNilai=array("Dika"=>90, "Diki"=>85, "Duku"=>75, "Daka"=>80);
	echo "Menampilkan isi array asosiatif dengan foreach: <br>";
	foreach($arrNilai as $nama=>$nilai){
		echo "Nilai $nama=$nilai<br>";
	}

	reset($arrNilai);
	echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
	while(list($nama,$nilai)=each($arrNilai)){
		echo "Nilai $nama=$nilai<br>";
	} 
?>