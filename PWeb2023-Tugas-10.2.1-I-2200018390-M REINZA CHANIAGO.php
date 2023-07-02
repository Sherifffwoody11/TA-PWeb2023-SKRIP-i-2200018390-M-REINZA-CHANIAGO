<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>
	<form method="POST">
		<h3>Konversi Nilai</h3>
		<label for="nilai">Masukkan Nilai:</label>
		<input type="number" name="nilai" id="nilai" required>
		<button type="submit" name="convert">Konversi</button>
	</form>

	
	
	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['convert'])) {
			$nilai = $_POST['nilai'];
			
			if ($nilai >= 80 && $nilai <= 100) {
				echo "Nilai anda 4.00, nilai huruf = A <br><br>";
			} elseif ($nilai >= 76.25 && $nilai <= 79.99) {
				echo "Nilai anda 3.67, nilai huruf = A- <br><br>";
			} elseif ($nilai >= 68.75 && $nilai <= 76.24) {
				echo "Nilai anda 3.33, nilai huruf = B+ <br><br>";
			} elseif ($nilai >= 65.00 && $nilai <= 68.74) {
				echo "Nilai anda 3.00, nilai huruf = B <br><br>";
			} elseif ($nilai >= 62.50 && $nilai <= 64.99) {
				echo "Nilai anda 2.67, nilai huruf = B- <br><br>";
			} elseif ($nilai >= 57.50 && $nilai <= 62.49) {
				echo "Nilai anda 2.33, nilai huruf = C+ <br><br>";
			} elseif ($nilai >= 55.00 && $nilai <= 57.49) {
				echo "Nilai anda 2.00, nilai huruf = C <br><br>";
			} elseif ($nilai >= 51.25 && $nilai <= 54.99) {
				echo "Nilai anda 1.67, nilai huruf = C- <br><br>";
			} elseif ($nilai >= 43.75 && $nilai <= 51.24) {
				echo "Nilai anda 1.33, nilai huruf = D+ <br><br>";
			} elseif ($nilai >= 40.00 && $nilai <= 43.74) {
				echo "Nilai anda 1.00, nilai huruf = D <br><br>";
			} else {
				echo "Nilai anda 0.00, nilai huruf = E <br><br>";
			} 
		
		}
	}
	?>
	
</body>
</html>