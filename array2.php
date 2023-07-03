<?php
	$arrNilai=array("Nanda"=>80, "Nindi"=>70, "Nandu"=>75, "Nando"=>85);
	echo $arrNilai['Nando']. "<br>"; //85
	echo $arrNilai['Nanda']. "<br><br>"; //80

	$arrNilai=array();
	$arrNilai['Anda']=82;
	$arrNilai['Indi']=80;
	$arrNilai['Onda']=75;
	echo $arrNilai['Anda']. "<br>"; //82
	echo $arrNilai['Onda']. "<br>"; //75 
?>