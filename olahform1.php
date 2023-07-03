<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pengolahan Form Cara 1</title>
</head>
<body>
	<form action="" method="post" name="input">
		Nama Anda :  <input type="text" name="nama"><br>
		<input type="submit" name="Input" value="Tampilkan isi TextBox"/>
	</form>

</body>
</html>

<?php
	if(isset($_POST['Input'])){
		$nama=$_POST['nama'];
		echo "Nama Anda : <b>$nama</b>";
	}
?>