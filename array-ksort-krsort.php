<?php
	$arrNilai=array("Muhammad"=>80, "Reinza"=>70, "Chaniago"=>75, "Ganteng"=>85);
	echo "<b>Array sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	ksort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan ksort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>"; 

	krsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array setelah diurutkan dengan krsort()</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>"; 
?>